<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 */
class User extends Entity
{
    /**
     * @var array 各プロパティが一括代入できるかどうかの情報
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'nickname' => true,
        'created' => true,
        'modified' => true,
    ];

}
