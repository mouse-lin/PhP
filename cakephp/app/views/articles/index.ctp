<style>
</style>
<script type="text/javascript">
    $(document).ready(function () { 
        $("#newArticle").click(function () { 
            <?php if($user === null): ?>
                alert("请先登录!");
            <?php else: ?>
                window.location.href="../articles/create?game_id=<?php echo $game["Game"]['id'] ?>";
            <?php endif ?>

        });
        $(".articles").hover(function () { 
            $(".articles").each(function () { 
                $(this)[0].style.background = "#ffffff";
            });
            $(this)[0].style.background = "#d2e9ff";
        });
    })
</script>
<div class="mainbox forumlist">
<div class="hd">
    <h3 style="padding-left:27px;padding-bottom:5px;"><?php echo $game["Game"]["name"] ?></h3>
    <div style="padding-right:27px;" id="newArticle"><a style="float:right;cursor:pointer;">发表文章</a></div>
</div>
</div>
<table style="width:100%;">
    <tr>
        <th style="width:5%"></th>
        <th style="width:80%;">标题</th>
        <th>作者</th>
        <th>回复</th>
        <th style="width:5%"></th>
    </tr>
  <?php foreach ($articles as $article): ?>
    <tr class="articles">
        <td><img style="padding-left:50%" src="../img/folder.gif"></td>
        <td><a href="show?id=<?php echo $article["Article"]["id"] ?>"><?php echo $article["Article"]["title"] ?></a></td>
        <td><?php echo $article["User"]["name"] ?></td>
        <td><?php echo count($article["Comment"]) ?></td>
        <td></td>
    </tr>
  <?php endforeach; ?>
</table>
