<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\News;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * News Model
 *
 * @property \Cake\ORM\Association\BelongsTo $NewsCategories
 * @property \Cake\ORM\Association\BelongsTo $Companies
 */
class NewsTable extends Table
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

        $this->table('news');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('NewsCategories', [
            'foreignKey' => 'news_category_id',
            'joinType' => 'INNER',
            'className' => 'Admin.NewsCategories'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Companies'
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
            ->notEmpty('name_vie',__('Please fill this field.'));

        $validator
            ->requirePresence('name_eng', 'create')
            ->notEmpty('name_eng',__('Please fill this field.'));

        $validator
            ->requirePresence('name_jpn', 'create')
            ->notEmpty('name_jpn',__('Please fill this field.'));

        $validator
            ->requirePresence('description_jpn', 'create')
            ->notEmpty('description_jpn',__('Please fill this field.'));

        $validator
            ->requirePresence('description_eng', 'create')
            ->notEmpty('description_eng',__('Please fill this field.'));

        $validator
            ->requirePresence('description_vie', 'create')
            ->notEmpty('description_vie',__('Please fill this field.'));

        $validator
            ->requirePresence('content_vie', 'create')
            ->notEmpty('content_vie',__('Please fill this field.'));

        $validator
            ->requirePresence('content_eng', 'create')
            ->notEmpty('content_eng',__('Please fill this field.'));

        $validator
            ->requirePresence('content_jpn', 'create')
            ->notEmpty('content_jpn',__('Please fill this field.'));

        $validator
            ->allowEmpty('image',__('Please fill this field.'));

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status',__('Please fill this field.'));

        $validator
            ->requirePresence('news_category_id', 'create')
            ->notEmpty('news_category_id');

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
        $rules->add($rules->existsIn(['news_category_id'], 'NewsCategories'));
        return $rules;
    }
}
