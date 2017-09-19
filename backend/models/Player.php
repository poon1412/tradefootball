<?php
namespace backend\models;
use Yii;

class Player extends \yii\mongodb\ActiveRecord
{
  public static function collectionName()
   {
       return ['footballDB', 'player'];
   }
   public function attributes()
    {
        return [
            '_id',
            'name',
            'lname',
            'age',
            'weight',
            'height',
            'D_M_Y',
            'team',
            'position',
        	  'number',
            'country',
            '_idteam',
        ];
    }
    public function rules()
   {
       return [
           [['_id', 'name', 'lname','age', 'weight', 'height','D_M_Y', 'team','position','number','country','_idteam'], 'safe']
       ];
   }
}
