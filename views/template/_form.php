<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Template */
/* @var $form yii\widgets\ActiveForm */
$categories = ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name');
//$this->registerJs('js/jsoneditor.min.js', \yii\base\View::EVENT_END_PAGE);
//$this->registerJs('$().ready(function() { alert("hello"); });', \yii\web\VIEW::EVENT_END_BODY);
?>
<div class="template-form">
    <?php $form = ActiveForm::begin([
        'id' => 'template-form'
    ]); ?>
    <?= $form->field($model, 'author_id')->hiddenInput(['value' => 1])->label(false) ?>
    <?= $form->field($model, 'category_id')->dropDownList($categories) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'abstract')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'content')->hiddenInput(['rows' => 6]) ?>
    <div id='editor_holder'></div>
    <?php
    // $form->field($model, 'author_id')->textInput()
    /*= $form->field($model, 'update_time')->textInput() ?>
    <?= $form->field($model, 'create_time')->textInput() */
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <script type="application/javascript">
        $(function () {
            // Initialize the editor with a JSON schema
            JSONEditor.defaults.theme = 'bootstrap3';

            var currentInfo = JSON.parse('<?=$model->content?>');
            console.log("load:"+currentInfo);
            var editor = new JSONEditor(document.getElementById('editor_holder'), {
                ajax: true,
                schema: {
                    $ref: "../programacion.json"
                    //format: "grid"
                },
                startval: currentInfo,
                disable_edit_json:false
            });
            editor.on('change',function() {
                var txtValue = JSON.stringify(editor.getValue());
                console.log(txtValue);
                $("#<?= Html::getInputId($model, 'content'); ?>").val(txtValue);
            });
        });
    </script>
</div>
