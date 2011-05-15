<?php
class GamesController extends AppController {
	public $name = 'Games';
  var $uses = array('Game');

  //查看所有游戏
	function index() {
		$this->Game->recursive = 0;
    #$this->set('pageTitle',"1");
		$this->set('games', $this->paginate("Game"));
	}

  //添加游戏
  function add() {
		if ($this->request->is('post')) {
			$this->Game->create();
			if ($this->Game->save($this->request->data)) {
        $this->redirect('/games');  
			} else {
			}
		}
	}

  //游戏编辑
	public function edit($id = null) {
		$this->Game->id = $id;
		if (!$this->Game->exists()) {
			throw new NotFoundException(__('错误的游戏'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Game->save($this->request->data)) {
        $this->redirect('/games');  
			} else {
			}
		} else {
			$this->data = $this->Game->read(null, $id);
		}
	}

  //游戏删除
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Game->id = $id;
		if (!$this->Game->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		if ($this->Game->delete()) {
        $this->redirect('/games');  
		}
		$this->flash(__('Game was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}


  function  hot_game(){ 
  }


  function expert_game(){  }
  function other_game(){  }
}
