<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV EBA Ralph PHP</title>
    <link rel="stylesheet" href="css/finalCV.css">
    <link rel="stylesheet" href="css/finalCVSmall.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css">
</head>

<body style="background-color:#E8E9E9;">
    <div class="contentAll" id="contentAll">
       <?php
            include ("php/generalInfo.php") ;
            include ("php/detailProject.php");
        ?>
       <div class="rigthBigOne" id="rigthBigOne"> 
           <?php
                 include ("php/allContentScroll.php");
                 include ("php/doubleDiv.php");
                 include ("php/allContentScrollTwo.php");
            ?>
       </div>
    </div>
</body>

</html>