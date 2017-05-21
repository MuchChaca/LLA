<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Athlete Entity
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property \Cake\I18n\Time $birth_date
 * @property string $sex
 * @property string $club_id
 * @property string $category_id
 * @property int $trainer_id
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Trainer $trainer
 */
class Athlete extends Entity
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
