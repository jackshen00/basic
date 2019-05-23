<?php
/**
 * Created by PhpStorm.
 * User: jacks
 * Date: 2019/5/23
 * Time: 16:00
 */
namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class StatController extends Controller{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public $layout = 'new_main';


    public function actionIndex()
    {

        return $this->render('index');
    }
}
?>