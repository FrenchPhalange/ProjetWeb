<?php get_header(); ?>
<?php
$title =  wp_get_document_title();

if (preg_match("/Home/", $title)) {
    $title = "Home";
}
if (preg_match("/Fitness/", $title)) {
    $title = "Fitness";
}
if (preg_match("/Piscine/", $title)) {
    $title = "Piscine";
}

?>
<?php
if(is_user_logged_in()){
    echo "connect";
}else{
    
    echo "no connect";
}
echo "<title>$title | Barrel & Fit</title>";

switch ($title) {

    case "Fitness":
        include  get_template_directory() . "/pages/fitness.php";
        break;

    case "Piscine":
        include  get_template_directory() . "/pages/piscine.php";
        break;
}

?>
<?php get_footer(); ?>