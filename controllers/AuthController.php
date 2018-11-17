<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class AuthController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 123;
    }
    public function actionTest() {
        //Yii::$app->user->
        $user = User::findOne(1);

        //print_r(Yii::$app->user->isGuest);
        Yii::$app->user->login($user);
        //Yii::$app->user->logout($user);
        if (Yii::$app->user->isGuest)
        {
            //var_dump('Вы гость');
            return 'Вы гость';
        }
        else {
            return 'Вы пользователь';
        }
    }
}
