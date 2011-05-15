<div class="hd">
    <h3 style="padding-left:27px;padding-bottom:5px;"><?php echo $gameType ?>专区</h3>
</div>
</div>
<table style="width:90%;">
    <tr>
        <td style="padding-left:152px;">游戏</td>
        <th style="text-align:center;">主题</th>
    </tr>
  <?php foreach ($games as $game): ?>
    <tr>
        <th>
            <a href="../articles/index?game_id=<?php echo $game["Game"]["id"] ?>">
                <img border="0" align="left" alt="" src="<?php echo $game["Game"]["image_url"] ?>.jpg" style="margin-right: 10px"></img>
            </a>
            <h2 style="display:inline;"><a href="../articles/index?game_id=<?php echo $game["Game"]["id"] ?>"><?php echo $game["Game"]["name"] ?></a></h2>
            <p><?php echo $game["Game"]["introduce"] ?> | <a href="../articles/index?game_id=<?php echo $game["Game"]["id"] ?>" style="color:blue;">进入专区</a></p>
        </th>
        <td style="text-align:center;">
            <?php echo count($game["Article"]) ?>
        </td>
    </tr>
  <?php endforeach; ?>
</table>
