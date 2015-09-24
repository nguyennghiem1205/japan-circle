<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\Activity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ActivityCategories
 */
class ActivitiesTable extends Table
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

        $this->table('activities');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ActivityCategories', [
            'foreignKey' => 'activity_category_id',
            'joinType' => 'INNER',
            'className' => 'Admin.ActivityCategories'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name_vie', 'create')
            ->notEmpty('name_vie');

        $validator
            ->requirePresence('name_eng', 'create')
            ->notEmpty('name_eng');

        $validator
            ->requirePresence('name_jpn', 'create')
            ->notEmpty('name_jpn');

        $validator
            ->requirePresence('content_vie', 'create')
            ->notEmpty('content_vie');

        $validator
            ->requirePresence('content_eng', 'create')
            ->notEmpty('content_eng');

        $validator
            ->requirePresence('content_jpn', 'create')
            ->notEmpty('content_jpn');

        $validator
            ->requirePresence('activity_category_id', 'create')
            ->notEmpty('activity_category_id');

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
        $rules->add($rules->existsIn(['activity_category_id'], 'ActivityCategories'));
        return $rules;
    }
}
