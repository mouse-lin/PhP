<?php
class MessagesController extends AppController {
	public $name = 'Messages';
  var $uses = array('Message');

  #保存信息
  function  add(){ 
    #$GB2312string = iconv('UTF-8','gb2312//|GNORE',$RequestAjaxString);
    $data = $this->params->$column;
    $this->Message->save(array('user_id' => $data));
  }
}
