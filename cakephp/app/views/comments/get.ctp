<div style="float:left;width:27%;border-right:solid 1px;">
<div>
    <div style="display:inline;color:#743a3a;">姓名:</div>
    <div style="display:inline;"><?php echo $comment["User"]["name"]?></div>
</div>
<br />
<br />
<div>
    <div style="display:inline;color:#743a3a;">时间:</div>
    <div style="display:inline;"><?php echo substr($comment["Comment"]["created_at"], 0, 10) ?></div>
</div>
</div>
<div style="float:left;">
<div style="margin:10px;">
    <div style="display:inline;"><?php echo $comment["Comment"]["content"] ?></div>
</div>
</div>
