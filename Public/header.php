<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" type = "text/css" href = "css/headerStyles.css">

  <script
    src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
</head>
<body>
  <div class = "wrapper">
    <nav>
      <div class = "logo">
        My LOGO
      </div>
      <ul class = "categories">
        <script>
          //The animation for hovering over a tab
          $(document).ready(function(){
            $(".categories li").hover(function(){
              $(this).css({borderBottom: '0 solid yellow'}).animate({
                borderBottomWidth: 5
              }, 200);
            },
            function(){

              $(this).animate({
                borderBottomWidth: 0
              }, 200);
            });
          });
        </script>
        <li><a class = "active" href = "index.php">Blog</a></li>
        <li><a href = "About.php">About</a></li>
        <li><a href = "FindSongPage.php">Find a Song</a></li>
        <li><a href = "Login.php">Login</a></li>
      </ul>
    </nav>
  </div>
</body>
</html>