<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Page;
use app\models\Portfolio;
use app\models\Services;
use app\models\Form;

class PageController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $page = Page::find()->where(['alias'=>'about'])->one();
        $portfolio = Portfolio::find()->all();
        $services = Services::find()->all();
        $model = new Form();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('index',[
                    'page' => $page,
                    'portfolio' => $portfolio,
                    'services' => $services,
                    'model' => $model,
                ]
            );
        }
        else {
            return $this->render('index',[
                    'page' => $page,
                    'portfolio' => $portfolio,
                    'services' => $services,
                    'model' => $model,
                ]
            );
        }



    }
    public function actionFormCreate ()
    {
        $model = new Form();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['page']);
        }
        else {
            return $this->render('page',['model' => $model]);
        }
    }
}
