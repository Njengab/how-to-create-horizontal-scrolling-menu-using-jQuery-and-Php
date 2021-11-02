<!-- linking connection.php file with index.php file-->
<?php include "connection.php"?>
<!--  Basic html code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--page title -->
    <title> horizontal scrolling menu</title>
    <!--linkig page with css file -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
</body>
</html>
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
        <h1>Dummy text</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas harum nam? Dolorum nam, ad ducimus impedit consectetur necessitatibus doloremque? Nemo ullam velit est, nostrum minus fugiat praesentium aliquam harum voluptatum qui tenetur provident porro adipisci quaerat quas repellat voluptatem, perferendis officia, earum amet expedita? Nihil blanditiis provident doloremque natus nostrum voluptas corrupti, molestias accusamus cum! Doloremque accusantium sint totam sed beatae dolorem a labore eligendi? Cumque maiores, earum minus possimus porro blanditiis aperiam unde. Eligendi ipsa aliquid in incidunt quasi nostrum molestias voluptates praesentium, repellendus corporis beatae, libero debitis tempore adipisci maiores, dolor architecto accusamus voluptatem laudantium ab! Nostrum, voluptas ducimus! Ipsam natus aliquid, odio in voluptatem, porro sapiente quibusdam, molestiae velit error saepe necessitatibus quaerat ipsa? Sunt eligendi ipsam consectetur earum deserunt architecto, tenetur accusamus doloribus officia culpa sit esse cumque. Dolore veritatis voluptatum sed, obcaecati et minima nobis commodi porro expedita,
   <h1>Dummy text</h1> quo optio illum hic quia incidunt deleniti! Vitae ut rerum soluta excepturi iusto error, minima facere magnam ipsam repudiandae nesciunt reprehenderit voluptate. Fuga aliquid voluptate nesciunt deserunt! Voluptatibus dicta quae soluta distinctio laudantium ut voluptatem id optio, neque laboriosam inventore, iure dolore quas consequuntur recusandae quasi ex beatae nobis cupiditate! Perspiciatis delectus quos quo assumenda et nobis? In ea voluptas quo accusamus totam nobis, ut tenetur magnam neque commodi ex laudantium at, quas possimus debitis, corrupti dolorem? Laboriosam voluptas, quam cum consequatur, iure reprehenderit eligendi exercitationem ex animi, magni placeat! Quidem libero quas eligendi, exercitationem illo quia. Nam ipsam a ratione quae, delectus autem similique! Voluptatibus quidem aut delectus magnam voluptate eum qui cupiditate voluptas earum. Inventore dolore nulla ut eveniet ullam repellendus necessitatibus in explicabo architecto, sequi magni dolores eius excepturi natus accusamus a est dignissimos sed modi cupiditate aspernatur ipsum, veniam itaque vero. Dicta adipisci dignissimos, consectetur doloribus fugit quae iste repudiandae molestias tempora?</p>
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
        let nav = document.getElementById("mnu-wrap")
        nav.style.position = "sticky"

    </script>

</body>
</html>