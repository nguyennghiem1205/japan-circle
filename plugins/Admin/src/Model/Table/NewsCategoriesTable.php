<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\NewsCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NewsCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $News
 */
class NewsCategoriesTable extends Table
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

        $this->table('news_categories');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('News', [
            'foreignKey' => 'news_category_id',
            'className' => 'Admin.News'
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

        return $validator;
    }
}
