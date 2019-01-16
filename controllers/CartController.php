<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Cart;

class CartController extends Controller
{
    public function actionIndex()
    {
        $query = Cart::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);   
        $list = $query->orderBy('num')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index', [
            'list' => $list,
            'pagination' => $pagination,
        ]);
        // return $this->render('index');
    }
    // 详情
    public function actionDetail($code = '')
    {
        $query = Cart::find()->where(['code' => $code])->one();
        $arr = array('name' => $query->name, 'num' => $query->num);
        $result = array("errocode"=>0,"reault"=>$arr);
        // json_encode($result, JSON_UNESCAPED_UNICODE);
        return $this->render('detail', ['data'=> json_encode($result, JSON_UNESCAPED_UNICODE)]);
    }
    public function actionAdd($code = '')
    {
        $query = Cart::find()->where(['code' => $code])->one();
        $query -> num += 1;
        $query ->save();
        $arr = array('name' => $query->name, 'num' => $query->num);
        // return $this->render('detail', ['code' => $code, 'currNum'=>$currNum]);
        $result = array("errocode"=>0,"reault"=>$arr);
        return json_encode($result, JSON_UNESCAPED_UNICODE);//
    }
    public function actionDel($code = '')
    {
        $query = Cart::find()->where(['code' => $code])->one();
        $query -> num -= 1;
        $query ->save();
        $arr = array('name' => $query->name, 'num' => $query->num);
        $result = array("errocode"=>0,"reault"=>$arr);
        return json_encode($result, JSON_UNESCAPED_UNICODE);//
    }
}