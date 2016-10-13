<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 10/10/2016
 * Time: 19:29
 */

namespace app\modules\api\controllers;
use yii\rest\ActiveController;
use linslin\yii2\curl;

class DocumentController  extends ActiveController
{
    public $modelClass = 'app\models\Template';
}