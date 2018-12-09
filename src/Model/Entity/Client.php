<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int $users_id
 * @property \Cake\I18n\FrozenTime|null $start_abonement
 * @property \Cake\I18n\FrozenTime|null $duration_abonement
 *
 * @property \App\Model\Entity\User $user
 */
class Client extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'users_id' => true,
        'start_abonement' => true,
        'duration_abonement' => true,
        'user' => true
    ];
}
