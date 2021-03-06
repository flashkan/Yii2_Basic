<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */

$this->title = 'Create Activity';
if (\Yii::$app->user->can('admin')) {
    $this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['index']];
} else {
    $this->params['breadcrumbs'][] = ['label' => 'Personal Account', 'url' => '\web\profile\index'];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
