<?php

/* @var $this yii\web\View */
use yii\helpers\Html;//前面是忘了加这句，报错。。。
$this->title = 'My Yii Application';
// $request = Yii::$app->request; 
// $get = $request->get();
// $str = $request->get('message'); 
// print_r($str);
?>
<div>
    <h1>通过URL请求参数获取的：<?=  Yii::$app->request->get('message')?></h1>
    <h2>通过URL返回的参数获取的：<?= Html::encode($message) ?></h2>
<div>
