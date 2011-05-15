<link rel="stylesheet" type="text/css" href="../../css/jquery.wysiwyg.css" />
<link rel="stylesheet" type="text/css" href="../../css/article.css" />
<script type="text/javascript" src="../../js/jquery.wysiwyg.js"></script>
<script type="text/javascript">
$(function()
{
    $('#wysiwyg').wysiwyg();
});
$(document).ready(function() { 
    $('#publish').click(function(event) { 
        $.ajax({ 
            type : 'post',
            url : "save",
            data : { 
                content : $('#wysiwyg')[0].wysiwyg.getContent(), 
                title : $('#title')[0].value,
                game_id : <?php echo $game["Game"]["id"]; ?>
            },
            success : function(data) { 
                alert("success!");
            }
        });
    });
});
</script>
<div>
    标题:&nbsp<input type="text" id="title" />
</div>
<div id="editor">
    <textarea name="wysiwyg" id="wysiwyg"></textarea>
</div>
<br />
<br />
<div style="margin-left:20%;">
    <div id="publish">发表文章</div>
</div>
<br />
<br />
