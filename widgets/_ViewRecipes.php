<h2 class="title-view">Gestion des recettes</h2>
<?php

if (isset($_POST['delete'])) {
    RemovePerson("recipes", $_POST['id']);
}
?>
    <div class="cards card-members">
        <?php

        CardClub("recipes", "recipes");
        ?>
    </div>
</div>