<?php
namespace backend\models;
use Yii;

class Transfer extends \yii\mongodb\ActiveRecord
{
  public static function collectionName()
   {
       return ['footballDB', 'transfer'];
   }
   public function attributes()
    {
        return [
            '_id',
            '_idplayer',
            '_idold',
            '_idnew',
            'price',
        ];
    }
    public function rules()
   {
       return [
           [['_id', '_idplayer', '_idold','_idnew', 'price'], 'safe']
       ];
   }
}
