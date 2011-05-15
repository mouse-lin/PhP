<?php
class Article extends AppModel {

	var $name = 'Article';

  var $belongsTo = "Game";

  var $hasMany = "Comment";

}
?>
