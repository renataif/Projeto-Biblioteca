<?php

namespace app\controllers;

use yii\web\Controller;


/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class Pguser extends Controller
{
    /**
     * @inheritDoc
     */

    public function actionAlterarDados($message='Hello')
    {
        return $this->render('aterar-dados', [
            'message'=> $message
        ]);
    }
}