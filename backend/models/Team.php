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
            'img',
        ];
    }
    public function rules()
   {
       return [
           [['_id', 'name', 'city','stadium', 'establish','address', 'website','manager', 'username','password','img'], 'safe']
       ];
   }
   public function getTeam($id){
       $model = Team::findOne($id);
       return $model;
   }
}
