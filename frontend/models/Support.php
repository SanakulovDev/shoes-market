<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $phone
 */
class Support extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'phone'], 'required'],
            [['name', 'email', 'subject', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'subject' => Yii::t('app', 'Subject'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['senderEmail'])
            ->setFrom([$email => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->phone)
            ->setTextBody($this->subject."Aloq uchun ".$this->phone)
            ->send();
    }
}
