<table>
    <tr>
        <th>游戏</th>
        <th>主题</th>
        <th>帖数</th>
    </tr>
  <?php foreach ($games as $game): ?>
    <tr>
        <th><?php echo $game["Game"]["name"] ?></th>
    </tr>
  <?php endforeach; ?>
</table>
