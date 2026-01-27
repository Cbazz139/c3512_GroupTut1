<?php
require 'data.inc.php';

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
    echo generateLink($post_link, "<img src='images/". $post_thumb . "'>");
    // echo "<img src='images/". $post_thumb . "'>";

    
    // title 
    echo "<h2>". $post_title . "</h2>";

    // "Posted by" username and date
    echo "<p>Posted by ". generateLink($post_userLink, $post_userName) ." ". $post_date ."</p>";
    // echo "<p>Posted by <a href='". $post_userLink ."'>". $post_userName ."</a> ". $post_date ."</p>";
    
    // starOutput() and numbers/sum of reviews
    echo "<p>";
    echo starOutput($post_reviewsRating) . " " . $post_reviewsNum . " Reviews</p>";
    
    // description/excerpt
    echo "<p>". $post_excerpt ."</p>";
    
    // "Read more" link
    generateLink($post_link, "Read more");

    
}

function starOutput($post_reviewsRating) {

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $post_reviewsRating) {
            echo "<img src='images/star-gold.svg' width=16px; height=auto;>";
        } else {
            echo "<img src='images/star-outline.svg' width=16px; height=auto;>";
        }
    }
}

