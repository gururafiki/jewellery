<?php

namespace app\controllers;
use Yii;
use yii\data\Pagination;
use yii\helpers\Url;

class InitController extends AppController {
    public function actionIndex(){
        $shit=0;
        return $this->render('init',compact('shit'));
    }
}