<?php
class CommentsController extends AppController { 
  public $name = "Comments";
  var $uses = array('Comment', 'Article', 'User');
  var $helpers = array('Html', 'Ajax', 'Javascript');
  var $components = array('RequestHandler');

  function create(){ 
    $this->layout = "comment";
    $comment = $this->Comment->save(array("Comment" => $_POST));
  }
}
?>
