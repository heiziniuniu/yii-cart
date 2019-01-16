<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>列表页</h1>
<table>
    <thead>
        <th>名称</th>
        <th>数量</th>
        <th>操作</th>
    </thead>
    <tbody>
        <?php foreach ($list as $country): ?>
            <tr>
                <td><?= $country->name ?></td>
                <td><?= $country->name ?></td>
                <td>
                    <a href="http://localhost:8080/index.php?r=cart/detail&code=<?= $country->code ?>">详情</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
