<?php

namespace console\controllers;

//use Yii;
use console\models\Mailer;
use console\models\User;
use console\models\News;

class MailerController extends \yii\console\Controller {

    public static function actionSend() {
        $users = User::GetList();    
        $news = News::GetList();
        Mailer::Send($users, $news);
    }
    
}