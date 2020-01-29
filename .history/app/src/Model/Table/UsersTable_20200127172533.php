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
    {
        $validator
            ->nonNegativeInteger('id', 'IDが不正です')
            ->allowEmpty('id', 'crete', 'IDが不正です');

        $validator
            ->requirePresence('username', 'create', 'ユーザー名が不正です')
            ->notEmpty('username', 'ユーザー名は必ず入力してください')
            ->maxLength('username', 10, 'ユーザー名は10文字以内で入力してください')
            ->add('username', 'alphaNumeric', [
                'rule' => function ($value) {
                    $pattern = '/\A[a-zA-Z0-9]+\z/';
                    return (bool)preg_match($pattern, $value);
                },
                'message'
            ])
    }

}
