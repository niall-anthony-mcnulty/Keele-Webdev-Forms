<?php



var_dump($_GET);


if(isset($_GET['socialmedia']))
    {
        if(in_array('facebook', $_GET['socialmedia']))
        {
            echo "facebook was checked!";
        }};
    
    
if(isset($_GET['socialmedia']))
{
        if(in_array('twitter', $_GET['socialmedia'])){
            echo "twitter was checked!";
        }};
    
    
if(isset($_GET['socialmedia'])) {


        if(in_array('tiktok', $_GET['socialmedia'])){
            echo "tiktok was checked!";
        }};
if(isset($_GET['socialmedia']))  
{
        if(in_array('instagram', $_GET['socialmedia'])){
            echo "instagram was checked!";
      }};


header("location: thankyou.html");
?>