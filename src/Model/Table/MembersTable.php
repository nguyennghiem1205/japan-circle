<?php
namespace App\Model\Table;

use App\Model\Entity\Member;
use Cake\Cache\Cache;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TypeCompanies
 * @property \Cake\ORM\Association\BelongsTo $Cooperations
 * @property \Cake\ORM\Association\BelongsTo $Needs
 * @property \Cake\ORM\Association\HasMany $CompanyInquiries
 * @property \Cake\ORM\Association\HasMany $MemberCooperations
 * @property \Cake\ORM\Association\HasMany $MemberNeeds
 */
class MembersTable extends Table
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

        $this->table('members');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('TypeCompanies', [
            'foreignKey' => 'type_company_id',
            'joinType' => 'Left',
            'className' => 'TypeCompanies'
        ]);
        $this->belongsTo('TypeBusiness', [
            'foreignKey' => 'type_business_id',
            'joinType' => 'Left',
            'className' => 'TypeBusiness'
        ]);
        $this->hasMany('Productions', [
            'foreignKey' => 'member_id',
            'joinType' => 'Left',
            'className' => 'Productions'
        ]);
        $this->hasMany('CompanyInquiries', [
            'foreignKey' => 'member_id',
            'joinType' => 'Left',
            'className' => 'CompanyInquiries'
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
            ->requirePresence('password', 'create')
            ->add('password', 'length', ['rule' => ['minLength', 6]])
            ->notEmpty('password');

        $validator
            ->allowEmpty('com_trading_name_vie');

        $validator
            ->allowEmpty('com_short_name_vie');

        $validator
            ->requirePresence('industry_code', 'create')
            ->notEmpty('industry_code');

        $validator
            ->requirePresence('company', 'create')
            ->notEmpty('company');

        $validator
            ->requirePresence('city_code', 'create')
            ->notEmpty('city_code');

        $validator
            ->requirePresence('tel', 'create')
            ->notEmpty('tel');

//        $validator
//            ->requirePresence('business', 'create')
//            ->notEmpty('business');

//        $validator
//            ->requirePresence('want_to_get')
//            ->notEmpty('want_to_get');

        $validator
            ->requirePresence('email', 'create')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => __('E-mail must be valid')
            ])
            ->notEmpty('email');

        $validator
            ->allowEmpty('image');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('com_lang_chosen', 'create')
            ->notEmpty('com_lang_chosen');

        $validator
            ->requirePresence('division', 'create')
            ->notEmpty('division');

        $validator
            ->requirePresence('com_country', 'create')
            ->notEmpty('com_country');

        $validator
            ->requirePresence('address_vie', 'create')
            ->notEmpty('address_vie');

        $validator
            ->requirePresence('contact_email', 'create')
            ->add('contact_email', 'validFormat', [
                'rule' => 'email',
                'message' => __('E-mail must be valid')
            ])
            ->notEmpty('contact_email');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->requirePresence('address_vie', 'create')
            ->notEmpty('address_vie');

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
        $rules->add($rules->existsIn(['Member.type_companies_id'], 'TypeCompanies'));
//        $rules->add($rules->existsIn(['type_companies_id'], 'TypeCompanies'));
        return $rules;
    }

    public function afterSave() {
        array_map('unlink', glob(CACHE.'api_member/*'));
        array_map('unlink', glob(CACHE.'api/*'));
        array_map('unlink', glob(CACHE.'api_backend/*'));
    }


}
