<!-- linking connection.php file with index.php file-->
<?php include "connection.php"?>
<!--  Basic html code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> horizontal scrolling menu</title>
    <!--linkig page with css file -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
    <body>
        <!-- creating navigation menu -->
        <nav id="mnu-wrap" class="black">
        <div id="prior-items">&#8669;</div>
         <div id="next-items">&#8668;</div>  
             <div class="inner-contents">
                 <div class="menu">
                     <!--fetching menu items from the database and diplaying them as list-->
                    <?php foreach($result as $res){ ?>
                        <a class="mnu-items" href="#"><?php echo $res['table_data']; ?></a>
                        <?php  } ?>
                    </div>
                </div>        
        </nav>
        <div class="content">
            <h1>Creative Designs KE.</h1>
        </div>
         <!--integrating jquery source file jquery-3.6..min.js-->
        <script src="./jquery-3.6.0.min.js"></script>
        <!--jquery functions to manupulate the direction off menu items-->
    <script>
        $('#prior-items').click(function(){
            $(".inner-contents").animate({scrollLeft: "-=300px"});
        });
        
        $('#next-items').click(function(){
            $(".inner-contents").animate({scrollLeft: "+=300px"});
        });
   
     </script>
</body>
</html>