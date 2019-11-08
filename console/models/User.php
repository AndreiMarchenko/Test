<?php

namespace console\models;

use Yii;
use yii\base\Model;

class User extends Model {

    public static function GetList() {
        $sql = 'SELECT * FROM users';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}