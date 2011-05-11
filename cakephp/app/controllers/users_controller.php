<?php
class UsersController extends AppController {

	public $name = 'Users';
  var $uses = array('User');

  #注意
  #用户登录与验证界面,进行密码比较时候必须使用 === ,使用 == 会出现数值比较,类似 "00" == "000", 返回true;
  function  login(){ 
    $this->layout = "login_layout";
    $this->set('error',false);
    if(!empty($this->data) ){ 
      $someone = $this->User->findByLogin($this->data['User']['login']); 
      if(!empty($someone['User']['password']) && $someone['User']['password'] === $this->data['User']['password'])  
      { 
        $this->User->save(array("online" => true, "id" => $someone['User']['id'] ));
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
        $this->User->save(array("online" => true, "id" => $someone['User']['id'] ));
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
    $user = $this->Session->read("User");
    $this->User->save(array("online" => false, "id" => $user["id"] ));
    $this->Session->delete('User');   
	  $this->redirect('/');   
  }

}
