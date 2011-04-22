<?php
class AccountsController extends AppController {
    var $name = 'Accounts';

    #Mouse
    #显示测试的初始化页面
    #----------------------------------------------
    function index() {
        $this->set('accounts', $this->Account->find('all'));
    }

    function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->Post->save($this->data)) {
                $this->flash('Your post has been saved.', '/posts');
            }
        }
    }

    function delete($id) {
        $this->Post->del($id);
        $this->flash('The post with id: '.$id.' has been deleted.', '/posts');
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->data)) {
                $this->flash('Your post has been updated.','/posts');
            }
        }
    }
}
?>
