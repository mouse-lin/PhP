<table style="width:90%;">
    <tr>
        <td>游戏</td>
        <th>主题</th>
        <th>帖数</th>
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
        <td>
            <a ><?php echo $game["Game"]["name"] ?></a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>
