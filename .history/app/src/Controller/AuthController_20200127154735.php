<?php

namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 */
class AppController extends Controller
{
    /**
     * 初期化処理
     *
     * @return void
     * @throws \Exception
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('flash')
    }

}
