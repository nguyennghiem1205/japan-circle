<?php
namespace App\Model\Table;

use App\Model\Entity\Advertisement;
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
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        $validator
            ->add('type', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        $validator
            ->add('position', 'valid', ['rule' => 'numeric'])
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        return $validator;
    }



    /**
     * get advertisements by position
     * @param $position
     * @return mixed
     */
    public function getAdvertisementsByPosition($position) {

        $conditions = array(
            'status' => true
        );
        if (is_array($position)) {
            $conditions['position IN'] = $position;
        } else {
            $conditions['position'] = $position;
        }
        $advertisements = $this->find('all', [
            'conditions' => $conditions,
            'order' => ['order' => 'asc']
        ])->toArray();

        return $advertisements;
    }
}
