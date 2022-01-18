<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $text;
    public $topic;

    public function rules()
    {
        return [
          [['name', 'email', 'text'], 'required'],
          ['email', 'email'],
            ['topic', 'valid', 'skipOnEmpty' => false]
            /*['topic', 'length' => [3,5] ]*/
            /*['topic', 'string', 'min' => 3],
            ['topic', 'string', 'max' => 5]*/
        ];
    }

    public function valid($attribute, $params) {
        if (!in_array($this->$attribute, ['USA', 'RUSSIA'])) {
            $this->addError($attribute, 'oops');
        }
    }

    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'email' => 'E-mail',
          'text' => 'Текст',
          'topic' => 'Тема'
        ];
    }
}