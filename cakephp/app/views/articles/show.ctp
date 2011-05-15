<link rel="stylesheet" type="text/css" href="../../css/jquery.wysiwyg.css" />
<link rel="stylesheet" type="text/css" href="../../css/article.css" />
<script type="text/javascript" src="../../js/jquery.wysiwyg.js"></script>
<script type="text/javascript">
$(function()
{
    $('#comment-wysiwyg').wysiwyg();
});

$(document).ready(function() { 
    $('#publish').click(function(event) { 
        $.ajax({ 
            type : 'post',
            url : "/comments/create",
            data : { 
                content : $('#comment-wysiwyg')[0].wysiwyg.getContent(), 
                article_id : <?php echo $article["Article"]["id"]; ?>
            },
            success : function() { 
                var data = $('#comment-wysiwyg')[0].wysiwyg.getContent();
                var $frame = $('<iframe style="width:100%; height:300px;">');
                $("#center").append($frame);
                setTimeout(function(){ $frame[0].contentWindow.document.body.innerHTML = data}, 30);
            }
        });
    });
});

$(document).ready(function(){ 
    var frames = [];
    <?php foreach($article["Comment"] as $comment): ?>
        var temp = ($('<iframe style="width:100%; height:300px;">'));
        $("#center").append($("<br>")).append($("<br>")).append(temp);
        frames.push(temp);
    <?php endforeach; ?>

    setTimeout(function(){
        var i = 0;
        <?php foreach($article["Comment"] as $comment): ?>
            frames[i][0].contentWindow.document.body.innerHTML = "<?php echo $comment["content"] ?>";
            i++;
        <?php endforeach ?>
    }, 1000);
})
</script>
<div id="center" style="margin-left:15%;margin-right:15%;padding:2.2%;">
    <iframe frameborder="0" src="get?id=<?php echo $article["Article"]["id"] ?>" tabindex=0 style="min-height: 1150px; width: 800px;">
    </iframe>
</div>
<br />
<br />
<div id="comment">
    <textarea name="wysiwyg" id="comment-wysiwyg"></textarea>
</div>
<br />
<br />
<div style="margin-left:20%;">
    <div id="publish">发送</div>
</div>
<br />
<br />
