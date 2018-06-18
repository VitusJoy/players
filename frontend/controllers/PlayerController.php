<?php

namespace frontend\controllers;

use Yii;
use app\models\Players;
use app\models\PlayerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;

/**
 * PlayerController implements the CRUD actions for Players model.
 */
class PlayerController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Players models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlayerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Players model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Players model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Players();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Players model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Players model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Players model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Players the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Players::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    protected function findUser($id)
    {
        if (($model = User::findOne($id)) !== null) 
        {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




    public function actionStatus($pid)
    {
        $model = $this->findModel($pid);
        $player_id = $model->id;
        $user_id = Yii::$app->user->id;
        $user = $this->findUser($user_id);



        if ($model->p_status == 0 && $user->status_active == 0) {
            $model->updateCounters(['p_status' => 1]);
            $user->updateCounters(['status_active' => 1]);
            $user->updateCounters(['p_id' => $model->id]);
            // $user->updateCounters(['p_name' => $model->p_name]);
            // $user->updateCounters(['p_added_time' => date('Y-m-d H:i:s')]);
            // \Yii::$app->db->createCommand("UPDATE user SET p_id = ".$model->id.",p_name = ".$model->p_name.", WHERE id = ".$user_id."")->queryAll();

            
            return $this->render('selected_player', ['model' => $model, 'user'=>$user]);        
        }else{
            
            $this->redirect(array('player/selected')); 
        }
    }

    public function actionSelected(){


        $user_id = Yii::$app->user->id;
        $user = $this->findUser($user_id);
        $pid = $user->p_id;
        $player = $this->findModel($pid);
        
        return $this->render('selected_player', ['model' => $player, 'user'=>$user]);        
    }

}
