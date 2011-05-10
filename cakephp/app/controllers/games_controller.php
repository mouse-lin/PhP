<?php
class GamesController extends AppController {
	public $name = 'Games';
  var $uses = array('Game');

  function beforeFilter(){ 
    #$this->checkSession();
    $this->getUser();
  }

  function  hot_game(){ 

  }


  function expert_game(){  }
  function other_game(){  }
}

