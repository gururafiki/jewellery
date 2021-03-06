<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;
use app\modules\admin\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = 'adminLayout';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model=$this->findModel($id);
        $arrMetals=json_decode($model->weight_metals);
        $model->weight_metals='';
        foreach ($arrMetals as $key => $value) {
            $model->weight_metals.="Вес ".$key." ".$value." грамм . ";
        }
        $arrinserts=json_decode($model->weight_inserts);
        $model->weight_inserts='';
        foreach ($arrinserts as $key => $value) {
            $model->weight_inserts.="Вес ".$key." ".$value." грамм . ";
        }
        $arrcarats=json_decode($model->carat_inserts);
        $model->carat_inserts='';
        foreach ($arrcarats as $key => $value) {
            $model->carat_inserts.="Карат ".$key." ".$value." . ";
        }
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $categories = Category::find()->all();
        foreach ($categories as $value) {
            $arrCategories[$value->name]=$value->name;
        }
        $arrCategories['custom']='Ввести свой вариант';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrCategories' => $arrCategories,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionList($value)
    {
        if($value=='custom')
            echo    '<label class="control-label" for="product-type">Категория</label>
                    <input type="text" id="product-type" placeholder="Введите тип(Кольца, Серьги, Комплекты и т.п.)" class="form-control" name="Product[type]" maxlength="191">
                    <div class="help-block"></div>';
        else
            echo 'false';
    }
    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
