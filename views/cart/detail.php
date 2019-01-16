<?php
use yii\helpers\Html;
// echo $data;
$arr = (array) json_decode($data,true);
echo '商品名称:'. $arr['reault']['name'];
?>
<div>
    <h1>详情页</h1>
    <input id="code" value="<?=  Yii::$app->request->get('code')?>" hidden/ >
    <div class="border-wraper" >
        当前数量是：<span id="currentNum"><?= Html::encode("{$currNum}")?></span>   
    </div>
    <div class="btn btn-lg" id="add">添加</div>
    <div class="btn btn-lg" id="del">删除</div>
</div>

