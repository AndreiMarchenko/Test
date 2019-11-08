<?php 

namespace console\models;

use Yii;
use yii\base\Model;

class Mailer extends Model {

    public static function Send($users, $news) {
        foreach($users as $user) {
            Yii::$app->mailer->compose('/mailer/newslist', [
                'news' => $news, 
             ])
             ->setFrom('andreymarchanka4@gmail.com')
             ->setTo($user['email'])
             ->setSubject('site')
             ->send();
        }
    }
}