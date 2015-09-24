<?php
namespace App\Model\Table;

use App\Model\Entity\Supporter;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supporters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CategorySupporters
 */
class SupportersTable extends Table
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

        $this->table('supporters');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CategorySupporters', [
            'foreignKey' => 'category_supporter_id',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('SupporterCities', [
            'foreignKey' => 'supporter_id',
            'className' => 'Admin.SupporterCities'
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
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->add('birthdate', 'valid', ['rule' => 'date'])
            ->requirePresence('birthdate', 'create')
            ->notEmpty('birthdate');

        $validator
            ->requirePresence('identity_card', 'create')
            ->notEmpty('identity_card');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');



        $validator
            ->requirePresence('city_code', 'create')
            ->notEmpty('city_code');

        $validator
            ->requirePresence('category_supporter_id', 'create')
            ->notEmpty('category_supporter_id');

        $validator
            ->requirePresence('experience', 'create')
            ->notEmpty('experience');

        $validator
            ->allowEmpty('district_code');

        $validator
            ->allowEmpty('url_facebook');

        $validator
            ->allowEmpty('site_url');

        $validator
            ->requirePresence('company_name', 'create')
            ->notEmpty('company_name');

        $validator
            ->requirePresence('company_address', 'create')
            ->notEmpty('company_address');

        $validator
            ->allowEmpty('company_site_url');

        $validator
            ->requirePresence('industry_code', 'create')
            ->notEmpty('industry_code');

        $validator
            ->add('com_staff', 'valid', ['rule' => 'numeric'])
            ->requirePresence('com_staff', 'create')
            ->notEmpty('com_staff');

        $validator
            ->requirePresence('com_lang_chosen', 'create')
            ->notEmpty('com_lang_chosen');

        $validator
            ->requirePresence('member_organize', 'create')
            ->notEmpty('member_organize');

        $validator
            ->allowEmpty('support_info');

        $validator
            ->add('phone', 'valid', [
                'rule' => 'validatePhone',
                'message' => __('Phone is not valid'),
                'provider' => 'table',
            ])
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['category_supporter_id'], 'CategorySupporters'));
        return $rules;
    }

    public function validatePhone($phone) {
        $phone = str_replace(' ', '', $phone);
        if(preg_match('/^[0-9\,\s\+\(\)\-]+$/',$phone)) {
            return true;
        }
        return false;
    }
}
