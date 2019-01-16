<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

// use backend\assets\AppAsset;
// AppAsset::register($this);
// $this->registerJsFile('@web/js/test.js');
echo "ddd";
?>
<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->name} ({$country->code})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>
<div class="btn btn-lg" id="del">删除</div>
<?= Html::script('var num=0; document.getElementById("del").onclick=function(){
    
    console.log(num++)
}', ['defer' => true]);?>
<!-- <script>
    <?php $this->beginBlock('js_end') ?> 
    // jQuery(document).ready(function(){
    //     console.log("hello");
    // });
    jQuery("#del").click(function(){debugger})
    <?php $this->endBlock() ?>
</script> -->
<?= LinkPager::widget(['pagination' => $pagination]) ?>