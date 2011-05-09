<?php
class UsersController extends AppController {

	public $name = 'Users';
  var $uses = array('User');

  #用户登录界面
  function  login(){ 
      $this->layout = "login_layout";
  }

  #用户注册界面
  function  signup(){ 
      $this->layout = "login_layout";
  }

}
