<?php
class CommentsController extends AppController { 
  public $name = "Comments";
  var $uses = array('Comment', 'Article', 'User');
  var $helpers = array('Html', 'Ajax', 'Javascript');
  var $components = array('RequestHandler');

  function create(){ 
    $user = $this->getUser();
    $comment = array("user_id" => $user["id"], "created_at" => date("Y-m-d H:i:s"));
    $this->Comment->save(array("Comment" => $_POST + $comment));
    echo $this->Comment->id;
  }
  function get(){ 
    $this->layout = "comment";
    $this->set("comment", $this->Comment->findById($this->params["url"]["id"]));
  }
}
?>
