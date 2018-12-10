<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientVideos Model
 *
 * @property \App\Model\Table\ClientFoldersTable|\Cake\ORM\Association\BelongsTo $ClientFolders
 *
 * @method \App\Model\Entity\ClientVideo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClientVideo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClientVideo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClientVideo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientVideo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientVideo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClientVideo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClientVideo findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientVideosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('client_videos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ClientFolders', [
            'foreignKey' => 'client_folders_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->allowEmpty('path');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_folders_id'], 'ClientFolders'));

        return $rules;
    }
}
