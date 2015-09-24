<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\Advertisement;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Advertisements Model
 *
 */
class AdvertisementsTable extends Table
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

        $this->table('advertisements');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->add('position', 'valid', ['rule' => 'numeric'])
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->requirePresence('name_vie', 'create')
            ->notEmpty('name_vie');

        $validator
            ->requirePresence('content', 'create')
            ->notEmpty('content');

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
