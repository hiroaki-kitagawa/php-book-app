<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Users Model
 */
class UsersTable extends Table
{
    /**
     * @ingeritdoc
     */
    public function initialize(array $config)
    {
        parent::intialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior()
    }
}
