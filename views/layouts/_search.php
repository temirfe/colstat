<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;

Modal::begin([
    'id' => 'search-modal',
    'header' => 'Search through website',
]);
?>
<div class="row">
    <?= Html::beginForm(['site/search'], 'post') ?>
        <div class="form-group col-md-10">
            <!--type, input name, input value, options-->
            <?= Html::input('text', 'search', '', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group col-md-2">
            <?= Html::button('Search', ['class' => 'btn btn-primary', 'type'=>'submit']) ?>
        </div>
    <?= Html::endForm() ?>
</div>


<?php
Modal::end();
?>