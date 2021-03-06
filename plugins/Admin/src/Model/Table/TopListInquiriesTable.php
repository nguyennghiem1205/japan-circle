<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\TopListInquiry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TopListInquiries Model
 *
 */
class TopListInquiriesTable extends Table
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

        $this->table('top_list_inquiries');
        $this->displayField('title');
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
            ->requirePresence('title_vie', 'create')
            ->notEmpty('title_vie');
        $validator
            ->requirePresence('title_eng', 'create')
            ->notEmpty('title_eng');
        $validator
            ->requirePresence('title_jpn', 'create')
            ->notEmpty('title_jpn');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
