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
            'img',
        ];
    }
    public function rules()
   {
       return [
           [['_id', 'name', 'lname','age', 'weight', 'height','D_M_Y', 'team','position','number','country','_idteam','img'], 'safe']
       ];
   }

   public function getPlayer($id){
   		$model = Player::findOne($id);
   		return $model;
   }
}
