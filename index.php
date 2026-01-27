<!-- Sebastian Samaco 201711695 -->
<!-- Lihini Herath 201721155 -->
<?php 
include "functions.inc.php";
include "data.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>Group Tutorial 01</title>
</head>

<body>
    <!-- Page Content -->
    <main>     
                <!-- start post summaries -->
                <div>
                    <!-- replace each of these rows with a function call -->
                    <!--first row--> 
                    <?= outputPostRow($post1_link, $post1_userName, $post1_userLink, $post1_date, $post1_thumb, $post1_title, $post1_reviewsNum, $post1_reviewsRating, $post1_excerpt) ?>
                    
                    <hr>
                  
                    <!--second row-->
                    <?= outputPostRow($post2_link, $post2_userName, $post2_userLink, $post2_date, $post2_thumb, $post2_title, $post2_reviewsNum, $post2_reviewsRating, $post2_excerpt) ?>
                    
                    <hr>
                
                    <!--third row-->
                    <?= outputPostRow($post3_link, $post3_userName, $post3_userLink, $post3_date, $post3_thumb, $post3_title, $post3_reviewsNum, $post3_reviewsRating, $post3_excerpt) ?>
                </div>  <!-- end post list -->
           
    </main>
    
</body>

</html>