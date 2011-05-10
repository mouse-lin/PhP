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
        $someone = $this->User->findByLogin($this->data['User']['login']);
        $this->Session->write('User', $someone['User']);  
        $this->redirect('/users/welcome_signup');  
      }
    }
  }

  #登录成功后返回的页面
  function welcome(){ 
    $this->layout = "login_layout";
  }

  #注册成功后登录界面
  function welcome_signup(){ 
    $this->layout = "login_layout";
  }

  #用户退出
  function logout(){ 
    $this->Session->delete('User');   
	  $this->redirect('/');   
  }

}
