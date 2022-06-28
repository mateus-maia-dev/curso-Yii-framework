<?php

namespace app\behaviors;

use yii\db\ActiveRecord;
use yii\base\Behavior;
use yii\base\Event;

class GenerateClientCode extends Behavior
{
    public function events()
    {
        return [
            // eventos que serão executados após a ação de insert ou update
            ActiveRecord::EVENT_BEFORE_INSERT => 'run',
            ActiveRecord::EVENT_BEFORE_UPDATE => 'run'
        ];
    }

    public function run(Event $event)
    {
        $this->owner->code = 'Cód: ' . \Yii::$app->security->generateRandomString(10);
    }
}
