<div><a href="../articles/new">发表文章</a></div>
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
        <th>回复数</th>
    </tr>
  <?php foreach ($articles as $article): ?>
    <tr>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td>&nbsp&nbsp</td>
        <td><?php echo $article ?></td>
        <td><?php echo $article ?></td>
    </tr>
  <?php endforeach; ?>
</table>
