<?php
namespace app\controllers;
use yii\rest\ActiveController;
use linslin\yii2\curl;
/**
 * Class docExplorerController
 * @package app\controllers\rest
 *
 * http://budiirawan.com/setup-restful-api-yii2/
 * http://localhost/yii2/docxtemplater/web/doc-explorer
 * http://www.yiiframework.com/doc-2.0/guide-rest-quick-start.html
 *
 *
 *  GET /users: list all users page by page;
    HEAD /users: show the overview information of user listing;
    POST /users: create a new user;
    GET /users/123: return the details of the user 123;
    HEAD /users/123: show the overview information of user 123;
    PATCH /users/123 and PUT /users/123: update the user 123;
    DELETE /users/123: delete the user 123;
    OPTIONS /users: show the supported verbs regarding endpoint /users;
    OPTIONS /users/123: show the supported verbs regarding endpoint /users/123.
 */
class DocExplorerController extends ActiveController
{
    /**
     * @var string
     *
     */
    public $modelClass = 'app\models\Category';
    /*
    public function actionScheme()
    {
        return $this->render('scheme');
    }
    public function actionType()
    {
        return $this->render('type');
    }
    */
}
