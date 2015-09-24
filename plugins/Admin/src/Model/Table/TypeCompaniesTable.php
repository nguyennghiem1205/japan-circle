<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\TypeCompany;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeCompanies Model
 *
 */
class TypeCompaniesTable extends Table
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

        $this->table('type_companies');
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
            ->requirePresence('type_name_vie', 'create')
            ->notEmpty('type_name_vie');

        $validator
            ->requirePresence('type_name_eng', 'create')
            ->notEmpty('type_name_eng');

        $validator
            ->requirePresence('type_name_jpn', 'create')
            ->notEmpty('type_name_jpn');

        $validator
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        return $validator;
    }
}
