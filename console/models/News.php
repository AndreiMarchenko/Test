<?php

namespace console\models;

use Yii;
use yii\base\Model;

class News extends Model {

   public static function GetList() {
    $sql = 'SELECT * FROM news';
    return Yii::$app->db->createCommand($sql)->queryAll();
   }
    
}