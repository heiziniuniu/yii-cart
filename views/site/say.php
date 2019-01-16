<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
// $request = Yii::$app->request; 
// $get = $request->get();
// $str = $request->get('message'); 
// print_r($str);
?>
<div>
    <h1><?=  Yii::$app->request->get('message')?></h1>
<div>
