<?php
namespace backend\models;
use Yii;

class Team extends \yii\mongodb\ActiveRecord
{
  public static function collectionName()
   {
       return ['footballDB', 'team'];
   }
   public function attributes()
    {
        return [
            '_id',
            'name',
            'city',
            'stadium',
            'establish',
            'address',
            'website',
            'manager',
            'username',
        	  'password',

        ];
    }
    public function rules()
   {
       return [
           [['_id', 'name', 'city','stadium', 'address', 'website','manager', 'username','password'], 'safe']
       ];
   }
}
