
<?php
class EditController extends AppController {
	public $name = 'Edit';
  var $uses = array('Edit');

  function pwd(){ }
  function basic(){ 

        }
  function img(){  }
 
}


#echo $_POST[reg];  //显示前一页单选按钮传过来的值
//以下是写入数据库操作
#$db=mysql_connect("localhost","root","hzu");  //连接数据库服务器
#mysql_select_db("php",$db);   //选择具体的数据库


#$myinsert="replace into users (sex,birthday,address,email,qq,msn,phone) values ('$_POST[gender]')";  //构造插入语句
#$myresult=mysql_query($myinsert,$db);   //执行插入操作
