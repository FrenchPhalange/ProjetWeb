<?php get_header(); ?>
<br><br>
<?php
$title =  wp_get_document_title();

if(preg_match("/Home/", $title)){
    $title = "Home";
}
if(preg_match("/Fitness/", $title)){
    $title = "Fitness";
}
if(preg_match("/Piscine/", $title)){
    $title = "Piscine";
}   

echo "<title>$title</title>";

switch ($title) {
    case "Home":
        include  get_template_directory() ."/index.php";
        break;
    case "Fitness":
        echo "Super le fitness";
        break;
    case "Piscine":
        echo "Super la piscine";
        break;
}

?>
<?php get_footer(); ?>