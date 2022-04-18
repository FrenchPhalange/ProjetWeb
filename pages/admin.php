<link rel="stylesheet" href="../css/admin.css">
<?php
$title = "Admin Page";

$_GLOBALS['login'] = true;
include_once "../template/header.php";

?>
<main>
    <div class="menu_admin">

        <a href="?view=members&admin=sudo">Members</a>
        <a href="?view=coachs&admin=sudo">Coachs</a>
        <a href="?view=recipes&admin=sudo">Recipes</a>
    </div>
    <?php

    is_admin($_GET['admin']);

    if (isset($_GET['view'])) {

        switch ($_GET['view']) {
            case "members":
                include_once "../widgets/_ViewMembers.php";
                break;
            case "coachs":
                include_once "../widgets/_ViewCoachs.php";
                break;
            case "recipes":
                include_once "../widgets/_ViewRecipes.php";
                break;
        }
    }
    ?>
</main>
