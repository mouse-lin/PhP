<?php
class Article extends AppModel {

	var $name = 'Article';

  var $belongsTo = array("Game", "User");

  var $hasMany = "Comment";

}
?>
