<?php
class User extends AppModel {
  var $name = "User";

  #数据校验
	var $validate = array(
		'login' => array(
        'required' => true,
        'message' => '帐号不能为空'
     ),
		'password' => '/^.{6,40}$/',
		'email' => 'email'
  	);

}
?>
