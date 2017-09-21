<?php
namespace backend\models;
use Yii;

class Log extends \yii\mongodb\ActiveRecord
{
  public static function collectionName()
   {
       return ['footballDB', 'log'];
   }
   public function attributes()
    {
        return [
            '_id',
            '_idplayer',
            '_idsend',
            '_idget',
            'price',
            'status',
        ];
    }
    public function rules()
   {
       return [
           [['_id', '_idplayer', '_idsend','_idget', 'price','status'], 'safe']
       ];
   }
}
