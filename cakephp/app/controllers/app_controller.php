<?php   
class AppController extends Controller   
{   
    var $uses = array('User');
    function checkSession()   
    {   
        // If the session info hasn't been set...   
        if (!$this->Session->check('User'))  
        {  
            // Force the user to login  
            $this->redirect('/homes');   
            exit();   
        }   
    }


    #提供给所有controller获取session中的当前user
    function getUser(){ 
       return $this->Session->read('User');
    }

    #获取当前在线的所有用户
    function getOnlineUser(){ 
      return $this->User->find("all",array("conditions" => array("User.online" => true)));
    }

    #所有controller中都必须经过的校验
    function beforeFilter(){ 
      $this->set('user',$this->getUser());
      $this->set('on_line_users', $this->getOnlineUser());
    }

}   
?>
