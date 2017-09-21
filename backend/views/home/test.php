<?php
use backend\models\Player;
foreach ($example as $obj){
	echo Player::getName($obj->_idplayer)['lname'];
}