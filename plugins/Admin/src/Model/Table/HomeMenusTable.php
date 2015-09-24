<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\HomeMenu;
use Cake\Cache\Cache;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeMenus Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentHomeMenus
 * @property \Cake\ORM\Association\BelongsTo $Children
 * @property \Cake\ORM\Association\HasMany $ChildHomeMenus
 */
class HomeMenusTable extends Table
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

        $this->table('home_menus');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Pages', [
            'className' => 'Pages',
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
            ->add('type', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        return $rules;
    }

    public function afterSave() {
        Cache::delete('menuParents');
        Cache::delete('subMenu');
    }
}
