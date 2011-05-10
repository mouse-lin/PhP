<?php
class UsersController extends AppController {

	public $name = 'Users';
  var $uses = array('User');

  #用户登录与验证界面
  function  login(){ 
    $this->layout = "login_layout";
    $this->set('error',false);
    if(!empty($this->data)){ 
      #$this->redirect(array('action' => 'welcome'));
      $someone = $this->User->findByLogin($this->data['User']['login']);
      if(!empty($someone['User']['password']) && $someone['User']['password'] == $this->data['User']['password'])  
      { 
        $this->Session->write('User', $someone['User']);  
        $this->redirect('/users/welcome');  
      }else{ 
        $this->set('error', true); 
      }
    }
  }

  #用户注册界面
  function  signup(){ 
    $this->layout = "login_layout";
    if(!empty($this->data)){ 
      if($this->User->save($this->data)){ 
      }
    }
  }

  #用户登录校验
  function login_authenticate(){ 
    $this->redirect(array('controller' => 'users', 'action' => 'welcome'));
  }

  function welcome(){ 
    $this->layout = "login_layout";
  }


  #用户退出
  function logout(){ 
    $this->Session->delete('User');   
	  $this->redirect('/');   
  }

}
