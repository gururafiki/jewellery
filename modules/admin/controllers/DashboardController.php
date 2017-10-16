<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Buy;
use app\modules\admin\models\BuySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BuyController implements the CRUD actions for Buy model.
 */
class DashboardController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'goalLayout';
        $shit='sad';
        return $this->render('goals',compact('shit'));
    }

    public function actionGoals()
    {
    	$this->layout = 'goalLayout';
        $shit='sad';
        return $this->render('goals',compact('shit'));
    }

    public function actionUsers()
    {
    	$this->layout = 'statisticLayout';
        $shit='sad';
        return $this->render('users',compact('shit'));
    }
    public function actionMoney()
    {
    	$this->layout = 'moneyLayout';
        $shit='sad';
        return $this->render('money',compact('shit'));
    }

}
