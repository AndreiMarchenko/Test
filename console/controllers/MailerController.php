<?php

namespace console\controllers;

use Yii;

class MailerController extends \yii\console\Controller {

    public function actionSend() {
        Yii::$app->mailer->compose()
        ->setFrom('andreymarchanka4@gmail.com')
        ->setTo('andreymarchanka5@gmail.com')
        ->setSubject('Тема сообщения')
        ->setTextBody('Текст сообщения')
        ->setHtmlBody('<b>lox</b>')
        ->send();
    }
}