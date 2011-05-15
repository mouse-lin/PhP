<div><a style="float:right;"href="../articles/create?game_id=<?php echo $game["Game"]['id'] ?>">发表文章</a></div>
<table>
    <tr>
        <th>&nbsp&nbsp</th>
        <th>&nbsp&nbsp</th>
        <th>&nbsp&nbsp</th>
        <th>&nbsp&nbsp</th>
        <th>&nbsp&nbsp</th>
        <th>&nbsp&nbsp</th>
        <th>标题</th>
        <th>作者</th>
        <th>回复</th>
    </tr>
  <?php foreach ($articles as $article): ?>
    <tr>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td><a href="show?id=<?php echo $article["Article"]["id"] ?>"><?php echo $article["Article"]["title"] ?></a></td>
        <td></td>
        <td></td>
    </tr>
  <?php endforeach; ?>
</table>
