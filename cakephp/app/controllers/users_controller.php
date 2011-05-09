<?php
class UsersController extends AppController {

	public $name = 'Users';
  var $uses = array('User');

  function  login(){ 
      $this->layout = "login_layout";
  }

}
