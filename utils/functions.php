<?php

/**
 * Connect to pdo
 *
 * @return void
 */
function Pdo()
{
    $pdo = new PDO('mysql:host=database;dbname=lamp', 'root', '');
    // $pdo = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

/**
 * Is admin ??
 *
 * @param [type] $admin
 * @return boolean
 */
function is_admin($admin)
{
    if (isset($admin) && $admin == "sudo") {
        return true;
    } else {
        header('Location: /pages/home.php');
        return false;
    }
}

/**
 * Find a column in table
 *
 * @param array $what
 * @param string $table
 * @param string $where
 * @return void
 */
function findAll(array $what = [], string $table = "", string $where = "")
{
    $pdo = Pdo();

    if ($where) {
        $query = "SELECT COUNT(*) FROM " . $table . " WHERE $where;";
        $querystatement = $pdo->prepare($query);
        $querystatement->execute();
        $ligne = $querystatement->fetch();
        return $ligne;
    } else {
        $query = "SELECT * FROM " . $table . ";";
        $querystatement = $pdo->prepare($query);
        $querystatement->execute();
        while ($ligne = $querystatement->fetch()) {
            echo "<br>";
            foreach ($what as $key) {
                echo $ligne->$key . " ";
            }
        }
    }
}

/**
 * Insert into table, don't put id in values
 *
 * @param string $table
 * @param string $values
 * @return void
 */
function insertTable(string $table = "", string $values = "")
{
    $pdo = Pdo();
    $test = findAll(["fullname"], "members", "fullname = '" . $_POST['fullname'] . "' and age = '" . $_POST['age'] . "' and activity = '" . $_POST['activity'] . "' ");
    foreach ($test as $t) {
    }
    if ($t == 1) {
        echo "<h3>Vous êtes deja inscrit à cette activité</h3>";
        return false;
    } else {

        $query2 = "SELECT * FROM " . $table . ";";

        $querystatement2 = $pdo->prepare($query2);

        $querystatement2->execute();
        $id = 0;
        while ($ligne = $querystatement2->fetch()) {
            $id++;
        }
        $id++;
        $query = "INSERT INTO " . $table . " VALUES ($id,$values);";

        $querystatement = $pdo->prepare($query);

        $querystatement->execute();

        echo "<h3>Super vous faites maintenant parti des membres de Barrel & Fit</h3>";
        return true;
    }
}

/**
 * Creation table
 *
 * @param string $table_name
 * @param array $columns
 * @return void
 */
function CreateTable(string $table_name = "", array $columns = [["NAME" => "", "TYPE" => ""]])
{

    $pdo = Pdo();

    $query = "IF EXIST CREATE TABLE " . $table_name . "(";
    foreach ($columns as $column) {
        $query .= $column['NAME'] . " ";
        $query .= $column['TYPE'] . "";
    }
    $query .= ");";

    $querystatement = $pdo->prepare($query);

    $querystatement->execute();
}
/**
 * Clear table
 *
 * @param string $table
 * @return void
 */
function TruncateTable(string $table = "")
{

    $pdo = Pdo();

    $query = "TRUNCATE TABLE " . $table . "";
    $querystatement = $pdo->prepare($query);

    $querystatement->execute();
}

function RemovePerson($table = "", $id)
{
    $pdo = Pdo();

    $query = "DELETE FROM  " . $table . "  WHERE id = " . $id . ";";
    $querystatement = $pdo->prepare($query);

    $querystatement->execute();
}

/**
 *  Create a card with element of table
 *
 * @param string $table
 * @param [type] $cardname
 * @return void
 */
function CardClub($table = "", $cardname)
{
    $pdo = Pdo();
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $query = "SELECT * FROM " . $table . ";";
    $querystatement = $pdo->prepare($query);
    $querystatement->execute();
    while ($ligne = $querystatement->fetch()) {
?>
        <div class="card card-<?php echo $cardname ?>">
            <?php
            if ($table == "coachs") {
                echo "<h3>" . $ligne->fullname . "</h3>";
                echo "<h4>" . $ligne->activity . " teacher</h4>";
                echo "<h5> Registration date : " . $ligne->date . "</h5>";
            } else if ($table == "recipes") {
                $url = "https://www.themealdb.com/api/json/v1/1/lookup.php?i=" . $ligne->id_api . "";
                $themeal = file_get_contents($url);
                $themeal = json_decode($themeal, true);
                echo "<h3>" . $themeal["meals"][0]['strMeal'] . "</h3>";
                echo "<img src='" . $themeal["meals"][0]['strMealThumb'] . "' width='250px'>";
            } else {
                echo "<h3>" . $ligne->fullname . "</h3>";
                echo "<h4> Coach :  " . $ligne->coach . "</h4>";
                echo "<h4> Registration for :  " . $ligne->activity . "</h4>";
                echo "<h4>" . $ligne->age . " ans</h4>";
                echo "<h5> Registration date : " . $ligne->date . "</h5>";
            }
            ?>
            <form action="" method="POST">
                <input name="id" type="hidden" value="<?php echo $ligne->id ?>">
                <button name="delete" class="btn-delete">Delete</button>
            </form>
        </div>
    <?php
    }
}
/**
 * Search By [params]
 *
 * @param string $table
 * @param string $search
 * @return void
 */
function SearchBy($table = "", $search = "")
{
    $pdo = Pdo();
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $query = "SELECT * FROM " . $table . " WHERE $search;";
    $querystatement = $pdo->prepare($query);
    $querystatement->execute();

    while ($ligne = $querystatement->fetch()) {
    ?>
        <div class="card card-<?php echo $table; ?>">
            <?php
            if ($table == "coachs") {
                echo "<h3>" . $ligne->fullname . "</h3>";
                echo "<h4>" . $ligne->activity . " teacher</h4>";
                echo "<h5> Registration date : " . $ligne->date . "</h5>";
            } else if ($table == "recipes") {
                echo "<h3>" . $ligne->id_api . "</h3>";
            } else {
                echo "<h3>" . $ligne->fullname . "</h3>";
                echo "<h4> Registration for :  " . $ligne->activity . "</h4>";
                echo "<h4>" . $ligne->age . " ans</h4>";
                echo "<h5> Registration date : " . $ligne->date . "</h5>";
            }
            ?>
            <form action="" method="POST">
                <input name="id" type="hidden" value="<?php echo $ligne->id ?>">
                <button name="delete" class="btn-delete">Delete</button>
            </form>
        </div>
    <?php
    }
}

/**
 * Search form
 *
 * @return void
 */
function SearchForm()
{
    ?>
    <form action="" method="POST" class="search-form">
        <select name="activity" id="" class="form-control">
            <option value="fitness">Fitness</option>
            <option value="piscine">Piscine</option>
            <option value="machines">Machines</option>
        </select>
        <button name="submit_search" class="btn-search">Search</button>
    </form>
<?php
}

function NumberActivityHere(string $activity = "", int $limit)
{
    $findactivity = findAll(["activity"], "members", "activity = '" . $activity . "';");
    foreach ($findactivity as $nbrappear) {
        if ($nbrappear >= $limit) {
            echo "<h3 class='phrase hidden'>Le cour de " . $activity . " est complet</h3>";
        }
    }
}
function NumberPersonHere(string $person = "", int $limit)
{
    $findactivity = findAll(["coach"], "members", "coach = '" . $person . "';");
    foreach ($findactivity as $nbrappear) {
        if ($nbrappear >= $limit) {
            echo "<h3 class='phrase hidden'>Le cour de " . $person . " est complet</h3>";
        }
    }
}
function TestLog($login = false)
{
    if ($login != null && $login != false) {

        $log = "<a href='/pages/home.php' class='btn-logout'>Logout</a>";
        $log .=  "<div class='btns-log-sign hidden'><button class='btn-signin'><span class='text'>Sign in</span> <span class='right-signin'><i class='fa-solid fa-right-to-bracket'></i></span></button>";
        $log .=  "<button class='btn-login'><span class='text'>Login</span> <span class='right-login'><i class='fa-solid fa-right-to-bracket'></i></span></button></div>";
    } else {
        $log =  "<div class='btns-log-sign'><button class='btn-signin'><span class='text'>Sign in</span> <span class='right-signin'><i class='fa-solid fa-right-to-bracket'></i></span></button>";
        $log .=  "<button class='btn-login'><span class='text'>Login</span> <span class='right-login'><i class='fa-solid fa-right-to-bracket'></i></span></button></div>";
    }
    echo $log;
}
function FindApi()
{
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $themeal = file_get_contents($url);
    $themeal = json_decode($themeal, true);
?>
    <img src="<?php echo $themeal['meals'][0]["strMealThumb"] ?>" alt="" />
    <div class="left-section-2ab">
        <p class="title-section-2ab"><i><?php echo $themeal['meals'][0]["strMeal"] ?></i></p>
        <p class="subtitle-section-2ab">
            <i>Recettes & Ingrédients : <a href="<?php echo $themeal['meals'][0]["strYoutube"] ?>" target="_blank">ici</a></i>
        </p>
        <button class="read-more generator-recipe"><a href="#recipes" style="color:var(--color-primary);">Générer un autre plat</a></button>
    </div>
<?php
}

function RestPlace($activity, $coach, $limit)
{

    $findactivity = findAll(['coach'], "members", "activity = '".$activity."' and coach = '".$coach."'");
    foreach ($findactivity as $nbr){
        $result =  $limit - $nbr;
    }

    echo $coach . " : " . $result . " / 20 <br>";

}
