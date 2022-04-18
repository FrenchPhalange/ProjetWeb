<h2 class="title-view">Gestion des membres</h2>
<?php 

if (isset($_POST['delete'])) {
    RemovePerson("members", $_POST['id']);
}

if (isset($_POST['submit_search'])) {
?>

<?php
    $search = $_POST['activity'];
    SearchForm();
    ?>

    <div class="cards card-members">
        <?php
    SearchBy("members", "activity='$search'");
    ?>
    </div>
    <?php
} else {

    SearchForm();
?>

    <div class="cards card-members">
        <?php

        CardClub("members", "members");
        ?>
    </div>
<?php
}
?>
</div>
