<link rel="stylesheet" type="text/css" href="../../css/jquery.wysiwyg.css" />
<link rel="stylesheet" type="text/css" href="../../css/article.css" />
<script type="text/javascript" src="../../js/jquery.wysiwyg.js"></script>
<script type="text/javascript">
$(function()
{
    $('#wysiwyg').wysiwyg();
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
                $('#wysiwyg')[0].wysiwyg.editorDoc.execCommand('insertImage', false, $(this)[0].src);
            });
        } 
    }
    inserImages(1);

    //<img border="0" align="left" alt="" src="<?php echo $game["Game"]["image_url"] ?>.jpg" style="margin-right: 10px"></img>
    for(var i = 1; i < (faces.length/12 | 0)+2; i ++){ 
      $('<div class="face-group">').appendTo("#face-group").html(i).click(function () { 
          $("#face-img").empty();
          inserImages(Number($(this)[0].innerHTML));
      });
    }
});
</script>
<br />
<div id="face">
  <div id="face-img"></div>
  <div id="face-group"></div>
</div>
<form action ="save?game_id=<?php echo $game["Game"]["id"] ?>" method ="post">
    <div id="title">
        标题:&nbsp<input name="title" type="text" id="title-content" />
    </div>
    <br />
    <div id="editor">
        <textarea name="content" id="wysiwyg"></textarea>
    </div>
    <br />
    <br />
    <div style="margin-left:20%;">
        <input type ="submit" value="保存" />
    </div>
</form>
<br />
<br />
