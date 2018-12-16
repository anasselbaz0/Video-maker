<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientFolder Entity
 *
 * @property int $id
 * @property int $clients_id
 *
 * @property \App\Model\Entity\Client $client
 */
class ClientFolder extends Entity
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
        'clients_id' => true,
        'client' => true,
        'title' => true
    ];
}
