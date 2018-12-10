<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientMusic Entity
 *
 * @property int $id
 * @property string|null $path
 * @property int $client_folders_id
 *
 * @property \App\Model\Entity\ClientFolder $client_folder
 */
class ClientMusic extends Entity
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
        'path' => true,
        'client_folders_id' => true,
        'client_folder' => true
    ];
}
