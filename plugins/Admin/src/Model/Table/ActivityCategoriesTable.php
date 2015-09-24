<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\ActivityCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivityCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $Activities
 */
class ActivityCategoriesTable extends Table
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

        $this->table('activity_categories');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Activities', [
            'foreignKey' => 'activity_category_id',
            'className' => 'Admin.Activities'
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
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
