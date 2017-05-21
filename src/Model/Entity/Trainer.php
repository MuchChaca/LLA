<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trainer Entity
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property \Cake\I18n\Time $birth_date
 * @property string $sex
 * @property bool $old_athlete
 * @property string $club_id
 * @property int $specialty_id
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Specialty $specialty
 * @property \App\Model\Entity\Athlete[] $athletes
 */
class Trainer extends Entity
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
