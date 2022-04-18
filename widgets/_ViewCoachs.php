<h2 class="title-view">Gestion des coachs</h2>
<?php

if (isset($_POST['delete'])) {
    RemovePerson("coachs", $_POST['id']);
}

if (isset($_POST['submit_search'])) {
?>

    <?php
    $search = $_POST['activity'];

    SearchForm();
    ?>

    <div class="cards card-coachs">
        <?php
        SearchBy("coachs", "activity='$search'");
        ?>
    </div>
<?php
} else {

    SearchForm();
?>

    <div class="cards card-coachs">
        <?php

        CardClub("coachs", "coachs");
        ?>
    </div>
<?php
}
?>