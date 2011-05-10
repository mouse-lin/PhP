<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/login_default.css">
  </head>
  <script type="text/javascript">
    function deleteDatas(){ 
        document.getElementById("UserLogin").value = "";
        document.getElementById("UserPassword").value = "";
    }
  </script>

  <?php echo $scripts_for_layout ?>
  <body>
    <?php echo $content_for_layout ?>
  </body>
</html>
