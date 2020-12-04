
<?php
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\grid\GridView;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZCustomPaginationWidget;

$query      = new User();
$query      = User::find();
$countQuery = clone $query;
$pages = new Pagination(['totalCount' => $countQuery->count()]);
$dataProvider = new ActiveDataProvider(['query' => $query]);
?>





<div class="report-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'layout' => "{summary}\n{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'role',
            'password',
            'name',
            //'created_on',
            // 'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <div id="custom-pagination">
        <?php
        echo ZCustomPaginationWidget::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>
</div>
