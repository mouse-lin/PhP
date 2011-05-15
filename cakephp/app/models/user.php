<?php
class User extends AppModel {
  var $name = "User";

  #用户注册数据校验
	var $validate = array(
		'password' => array( 
      'rule' => '/^.{6,40}$/',
      'message' => '密码不能为空/且至少为6个字符'
     ),
    'name' => array(
      'rule' => '/^.{2,40}$/',
      'message' => '姓名不能为空/且至少为2个字符'
    ),
		'email' => array(
      'emailRule-1' => array(
        'rule' => 'email',
        'message' => '邮箱格式不正确',
        'last' => true
      ),
      'emailRule-2' => array(
        'rule' => 'isUnique',
        'message' => '邮箱已经存在'
      )
     ),
     'login' => array(
        'loginRule-2' => array(
          'rule' => '/^.{6,40}$/',
          'message' => '帐号不能为空/且至少6个字符',
          'last' => true
        ),
        'loginRule-1' => array(
          'rule' => 'isUnique',
          'message' => '帐号已经存在',
        )
     ),
     'password_confirmation' => array(
       'rule' => array('equalto'),
       'message' => '密码确认与密码不一致'
     )
  	);

  
  #Mouse
  #自定义校验，用于校验密码与密码确认是否一致
  function equalto($data){ 
    return $this->data['User']['password'] == $this->data['User']['password_confirmation'];
  }
}
?>
