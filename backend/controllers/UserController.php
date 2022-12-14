<?php

namespace backend\controllers;

use backend\models\SearchUser;
use common\models\User;
use yii\web\NotFoundHttpException;
use Yii;

class UserController extends \yii\web\Controller
{
    public function actionAllUsers()
    {
        $searchModel = new SearchUser();
        $dataProvider = $searchModel->search($this->request->queryParams);
        return $this->render('all-users',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     /**
     * Displays a single User model.
     * @param string $id Id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $id = Yii::$app->user->identity;
        if($id == null)
        {
            Yii::$app->session->setFlash('error', "Please sign in to View Users.");
            return $this->redirect(['site/login']);
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

     /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $id = Yii::$app->user->identity;
        if($id == null)
        {
            Yii::$app->session->setFlash('error', "Please sign in to create Users.");
            return $this->redirect(['site/login']);
        }
        $model = new User();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

     /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $code Code
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $id = Yii::$app->user->identity;
        if($id == null)
        {
            Yii::$app->session->setFlash('error', "Please sign in to update Users.");
            return $this->redirect(['site/login']);
        }

        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

     /**
     * Deletes an existing user model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $code Code
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $id = Yii::$app->user->identity;
        if($id == null)
        {
            Yii::$app->session->setFlash('error', "Please sign in to delete Users.");
            return $this->redirect(['site/login']);
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

     /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $code Code
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
