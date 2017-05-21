<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trainers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clubs
 * @property \Cake\ORM\Association\BelongsTo $Specialties
 * @property \Cake\ORM\Association\HasMany $Athletes
 *
 * @method \App\Model\Entity\Trainer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trainer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trainer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trainer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trainer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trainer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trainer findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainersTable extends Table
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

        $this->table('trainers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id'
        ]);
        $this->belongsTo('Specialties', [
            'foreignKey' => 'specialty_id'
        ]);
        $this->hasMany('Athletes', [
            'foreignKey' => 'trainer_id'
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
            ->notEmpty('id', 'create');

        $validator
            ->notEmpty('last_name');

        $validator
            ->notEmpty('first_name');

        $validator
            ->date('birth_date')
            ->notEmpty('birth_date');

        $validator
            ->notEmpty('sex');

        $validator
            ->boolean('old_athlete')
            ->notEmpty('old_athlete');
            
            

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
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));
        $rules->add($rules->existsIn(['specialty_id'], 'Specialties'));

        return $rules;
    }
}
