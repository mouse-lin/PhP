<?php
class ArticlesController extends AppController { 
  public $name = 'Articles';
  var $uses = array('Game', 'Article', 'Comment', 'User');
  var $helpers = array('Html','Ajax','Javascript');

  function index(){
    $this->set("game", $this->Game->findById($this->params['url']['game_id']));
    $this->set("articles", $this->Article->find("all", array("conditions" => array("Article.game_id" => $this->params['url']['game_id']), "order" => array('Article.created_at DESC'))));
  }
  function create(){ 
    $this->set("dir", scandir("img/face"));
    $this->set("user", $this->getUser());
    $this->set("game", $this->Game->findById($this->params['url']['game_id']));
  }
  function save(){ 
    $user = $this->getUser();
    $article = array("user_id" => $user["id"], "game_id" => $this->params["url"]["game_id"], "created_at" => date("Y-m-d H:i:s"));
    $this->Article->save(array("Article" => ($_POST + $article)));
    $this->redirect('show?id='.$this->Article->id);
  }
  function show(){ 
    $this->set("dir", scandir("img/face"));
    $article = $this->Article->findById($this->params["url"]["id"]);
    $this->set("article", $article);
  }
  function get(){ 
    $this->layout = "article";
    $this->set("article", $this->Article->findById($this->params["url"]["id"]));
  }
}
?>
