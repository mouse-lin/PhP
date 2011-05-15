<?php
class ArticlesController extends AppController { 
  public $name = 'Articles';
  var $uses = array('Game', 'Article', 'Comment');
  var $helpers = array('Html','Ajax','Javascript');

  function index(){
    $this->set("game", $this->Game->findById($this->params['url']['game_id']));
    $this->set("articles", $this->Article->find("all", array("conditions" => array("Article.game_id" => $this->params['url']['game_id']))));
  }
  function create(){ 
    $this->set("game", $this->Game->findById($this->params['url']['game_id']));
  }
  function save(){ 
    $this->Article->save(array("Article" => $_POST));
  }
  function show(){ 
    $article = $this->Article->findById($this->params["url"]["id"]);
    $this->set("article", $article);
  }
  function get(){ 
    $this->layout = "article";
    $this->set("article", $this->Article->findById($this->params["url"]["id"]));
  }
}
?>
