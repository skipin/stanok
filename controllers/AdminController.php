<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Page;
use app\models\Portfolio;
use app\models\Form;
use yii\web\UploadedFile;

class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        //'actions' => ['page'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //return $this->render('index');
        return $this->redirect(['page']);
    }

    //************************************Методы Page*****************************************
    public function actionPage()
    {
        $pages = Page::find()->all();
        return $this->render('page',['pages' => $pages]);
    }

    public function actionCreate ()
    {
        $model = new Page();

        if($model->load(Yii::$app->request->post())){
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->upload();
            //return;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //var_dump(Yii::$app->request->post());
            //die();

            /*$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->imageFile) {
                $model->upload();
            }*/

            return $this->redirect(['page']);
        }
        else {
            return $this->render('page-create',['model' => $model]);
        }
    }

    public function actionEdit ($id)
    {
        if(($model = Page::findOne($id)) !== null) {
            if($model->load(Yii::$app->request->post())){
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->upload();
                //return;
            }

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['page']);
            }
            else {
                return $this->render('page-edit',['model' => $model]);
            }
        }
        else {
            throw new NotFoundHttpException('Oooooooops!');
        }

    }

    public function actionDelete ($id)
    {
        if(($model = Page::findOne($id)) !== null) {

            $model->delete();

            return  $this->redirect(['page']);

        }
        else {
            throw new NotFoundHttpException('Oooooooops!');
        }

    }

    //************************************Методы Portfolio************************************
    public function actionPortfolio()
    {
        $portfolios = Portfolio::find()->all();
        return $this->render('portfolios',['portfolios' => $portfolios]);
    }
    public function actionPortfolioEdit ($id)
    {
        if(($model = Portfolio::findOne($id)) !== null) {
            if($model->load(Yii::$app->request->post())){
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->upload();
                //return;
            }

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['portfolio']);
            }
            else {
                return $this->render('portfolio-edit',['model' => $model]);
            }
        }
        else {
            throw new NotFoundHttpException('Oooooooops!');
        }

    }


    //************************************Методы Form*****************************************

    public function actionForm() {
        $model = Form::find()->all();
        return $this->render('form',['model' => $model]);
    }

    public function actionFormCreate ()
    {
        $model = new Form();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['form']);
        }
        else {
            return $this->render('form-create',['model' => $model]);
        }
    }
    public function actionFormDelete ($id)
    {
        if(($model = Form::findOne($id)) !== null) {

            $model->delete();

            return  $this->redirect(['form']);

        }
        else {
            throw new NotFoundHttpException('Oooooooops!');
        }

    }
}
