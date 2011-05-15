<?php
class Game extends AppModel {
  var $name = "Game";

  var $hasMany = "Article";

  public function gameTypeCn($type)
  {
      switch($type){ 
          case "hot_game":
            return "热门游戏";
          case "expert_game":
            return "最期待游戏";
          case "other_game":
            return "其他";
          default:
            return "不存在这个类型";
      }
  }
}
?>
