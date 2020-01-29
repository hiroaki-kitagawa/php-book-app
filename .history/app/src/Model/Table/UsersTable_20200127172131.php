<?php

namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{
    /**
     * {@inheritdoc}
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * バリデーションルールの定義
     *
     * @param \Cake\Validation\Validator $validator バリデーションインスタンス
     * @return \Cake\Validation\Validator バリデーションインスタンス
     */
    public function validationDefault(Validator $validator)
   
}
