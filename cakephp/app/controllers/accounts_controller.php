<?php
class AccountsController extends AppController {

	public $name = 'Accounts';
  var $uses = array('Account','Article');

	public function index() {
		$this->Account->recursive = 0;
    $this->set('pageTitle',"nihao");
		$this->set('accounts', $this->paginate("Account"));
	}

	public function view($id = null) {
		$this->Account->id = $id;
		if (!$this->Account->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		$this->set('account', $this->Account->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Account->create();
			if ($this->Account->save($this->request->data)) {
				$this->flash(__('Account saved.'), array('action' => 'index'));
			} else {
			}
		}
	}

	public function edit($id = null) {
		$this->Account->id = $id;
		if (!$this->Account->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Account->save($this->request->data)) {
				$this->flash(__('The account has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->data = $this->Account->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Account->id = $id;
		if (!$this->Account->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		if ($this->Account->delete()) {
			$this->flash(__('Account deleted'), array('action' => 'index'));
		}
		$this->flash(__('Account was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
