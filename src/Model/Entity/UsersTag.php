<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersTag Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $tag_id
 * @property int $metatag_id
 * @property int $level
 * @property int $community_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Tag $tag
 * @property \App\Model\Entity\Community $community
 */
class UsersTag extends Entity
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
        '*' => true,
        'id' => false
    ];
}
