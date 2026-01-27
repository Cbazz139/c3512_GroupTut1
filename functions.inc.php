<?php
$numbers = [0, 1, 2, 3, 4, 5];

function generateLink($url, $label) {
    echo '<a href="'. $url . '">' . $label .'</a>';
}

function outputPostRow(
    $post_link, 
    $post_userName, 
    $post_userLink, 
    $post_date, 
    $post_thumb,
    $post_title, 
    $post_reviewsNum, 
    $post_reviewsRating, 
    $post_excerpt) {
    
    // image 
    echo "<img src='images/". $post_thumb . "'>";
    
    // title 
    echo "<h2>". $post_title . "</h2>";

    // "Posted by" username and date
    echo "<p>Posted by <a href='". $post_userLink ."'>". $post_userName ."</a>". $post_date ."</p>";
    
    // starOutput() and numbers/sum of reviews

    echo " <p>(" . $post_reviewsNum . " reviews)</p";
    
    // description/excerpt
    echo "<p>". $post_excerpt ."</p>";
    
    // "Read more" link
    generateLink($post_link, "Read more");
    
}

function starOutput($post_reviewsRating) {
    

}