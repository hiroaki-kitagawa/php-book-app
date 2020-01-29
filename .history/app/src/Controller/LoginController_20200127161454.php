<?php

namespace App\Controller;

/**
 * Login Controller
 */
class LoginController extends AppController
{
    /**
     * ログイン画面/ログイン処理
     *
     * @return \Cake\Http\Response|null ログイン成功後にログインTOPに遷移する
     */
    public function index()
    {
        if ($this->Auth->isAuthorized()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->requrest->is('post'))
    }
}
