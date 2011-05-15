<br />
<div style="height:10px;"></div>
<div style="font:18px/21px Tahoma,sans-serif;color:#3D7878;">
    <div style="display:inline;color:#743A3A;">标题:&nbsp</div>
    <?php echo $article["Article"]["title"]?>
</div>
<br />
<div style="font:18px/21px tahoma,sans-serif;color:#3d7878;">
    <div style="display:inline;color:#743a3a;">作者:&nbsp</div>
    <?php echo $article["User"]["name"]?>
</div>
<div style="font:18px/21px tahoma,sans-serif;color:#3d7878;">
    <div style="display:inline;color:#743a3a;">时间:&nbsp</div>
    <?php echo $article["Article"]["created_at"]?>
</div>
<br />
<?php echo $article["Article"]["content"]; ?>
<br />
<br />

<div id="comment-center">
<div>
