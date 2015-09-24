<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\Inquiry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inquiries Model
 *
 */
class InquiriesTable extends Table
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

        $this->table('inquiries');
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
            ->requirePresence('industry_code', 'create')
            ->notEmpty('industry_code');


        $validator
            ->requirePresence('title_vie', 'create')
            ->notEmpty('title_vie');

        $validator
            ->requirePresence('title_eng', 'create')
            ->notEmpty('title_eng');

        $validator
            ->requirePresence('title_jpn', 'create')
            ->notEmpty('title_jpn');

        return $validator;
    }
}
