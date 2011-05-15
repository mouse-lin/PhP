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
            success : function(data) { 
                var temp = ($('<iframe frameborder="0" style="width:750px; height:200px;padding-left:23px;" src="/comments/get?id=' + data + '">'));
                $("#center").append($("<br>")).append(temp).append($("<br>"));
            }
        });
    });
});

$(document).ready(function () { 

    var faces = [];
    <?php foreach($dir as $fname): ?>
        faces.push("<?php echo $fname ?>");
    <?php endforeach ?>
    faces.shift();
    
    function inserImages(group_id) { 
        for(var i = 1 ; i < 13; i ++) { 
            $('<img class="face-image">').attr({ 
                'border' : 0,
                'align' : 'left',
                'src' : "../img/face/" + faces[(group_id - 1)*12 + i]
            }).appendTo("#face-img").click(function() { 
                $('#comment-wysiwyg')[0].wysiwyg.editorDoc.execCommand('insertImage', false, $(this)[0].src);
            });
        } 
    }
    inserImages(1);

    for(var i = 1; i < (faces.length/12 | 0)+2; i ++){ 
      $('<div class="face-group">').appendTo("#face-group").html(i).click(function () { 
          $("#face-img").empty();
          inserImages(Number($(this)[0].innerHTML));
      });
    }
});
</script>

<div id="center" style="margin-left:15%;margin-right:15%;padding:2.2%;">
    <iframe frameborder="0" src="get?id=<?php echo $article["Article"]["id"] ?>" tabindex=0 style="min-height: 1150px; width: 800px;">
    </iframe>
    <?php foreach($article["Comment"] as $comment): ?>
        <br />
        <iframe frameborder="0" style="width:750px; height:200px;padding-left:23px;" src="/comments/get?id=<?php echo $comment["id"]?>"></iframe>
        <br />
    <?php endforeach; ?>
</div>
<br />
<br />
<div id="face" style="left:55%;">
  <div id="face-img"></div>
  <div id="face-group"></div>
</div>
<div id="comment">
    <textarea name="wysiwyg" id="comment-wysiwyg"></textarea>
</div>
<br />
<br />
<div style="margin-left:20%;">
    <input style="width:75px;" type ="submit" id="publish" value="保存" />
</div>
<br />
<br />
