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
           [['_id', 'name', 'city','stadium', 'address', 'website','manager', 'username','password','img'], 'safe']
       ];
   }
   public function attributeLabels()
   {
       return [
           '_id' => 'ID',
           'name' => 'Name',
           'dob' => 'Dob',
           'gender' => 'Gender',
           'degree' => 'Degree',
           'address' => 'Address',
           'email' => 'Email',
           'phone_number' => 'Phone Number',

           '_id' => 'ID',
           'name' => 'Name',
           'city' => 'City',
           'stadium' => 'Stadium',
           'establish' => 'Establish',
           'address' => 'Address',
           'website' => 'Website',
           'manager' => 'Manager',
           'username' => 'Username',
           'password' => 'Password',
           'img' => 'Img',
       ];
   }
}
