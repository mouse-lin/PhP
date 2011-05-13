<?php
class MessagesController extends AppController {
	public $name = 'Messages';
  var $uses = array('Message');
  var $components = array( 'RequestHandler' );

  #保存信息
  function  add(){ 
    $content = $_POST['content'];
    $user_id = $_POST['user_id'];
    $date_time = $_POST['date_time'];
    $send_name = $_POST['send_name'];
    $this->Message->save(array('content' => $content, 'user_id' => $user_id, 'date_time' => $date_time, 'send_name' => $send_name, 'new_type' => "new"));
  }


  #获取信息
  function get_message(){ 
    $user = $this->getUser();
    $messages = $this->Message->find("all",array('conditions' => array("user_id" => $user["id"] , "new_type" => "new"),'limit' => 4));
    if($messages){  
      foreach ( $messages as $message){  
        $this->Message->save(array("new_type" => false,"id" => $message["Message"]["id"]));
        echo "<div><font color=#ffcc00>";
        echo $message["Message"]["send_name"];
        echo "</font>(";
        echo $message["Message"]["date_time"];
        echo ")说:";
        echo $message["Message"]["content"];
        echo "</div>";
      }
    }
  }

  #保存群聊信息
  function all_message(){ 
    $content = $_POST['content'];
    $date_time = $_POST['date_time'];
    $send_name = $_POST['send_name'];
    $this->Message->save(array('content' => $content, 'date_time' => $date_time, 'send_name' => $send_name, 'new_type' => "new"));
  }

  #获取群聊所有信息
  function get_all_message(){ 
    $messages = $this->Message->find("all",array('conditions' => array('user_id' => null), 'limit' => 4,'order' => array('id DESC')));
    if($messages){  
      foreach ( $messages as $message){  
        echo "<div><font color=#ffcc00>";
        echo $message["Message"]["send_name"];
        echo "</font>(";
        echo $message["Message"]["date_time"];
        echo ")说:";
        echo $message["Message"]["content"];
        echo "</div>";
      }
    }
  }

}
