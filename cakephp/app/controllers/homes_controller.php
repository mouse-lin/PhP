<?php
class HomesController extends AppController {
	public $name = 'Homes';
  var $uses = array('Game');


  #获取所有游戏种类显示在首页
  function  index(){ 
    $hot_game = array("conditions" => array("Game.game_type" => "hot_game"));
    $expert_game = array("conditions" => array("Game.game_type" => "expert_game"));
    $other_game = array("conditions" => array("Game.game_type" => "other_game"));
    $this->set('hot_games', $this->Game->find("all",$hot_game));
    $this->set('expert_games', $this->Game->find("all",$expert_game));
    $this->set('other_games', $this->Game->find("all",$other_game));
  }
}
