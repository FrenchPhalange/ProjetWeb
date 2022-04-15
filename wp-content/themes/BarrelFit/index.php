<?php get_header();

if (is_active_sidebar('header')) {
    dynamic_sidebar('header');
}

$pdo = new PDO('mysql:host=database;dbname=wordpress', 'root', '');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = "SELECT * FROM wp_barrelfit_members;";

$querystatement = $pdo->prepare($query);

$querystatement->execute();


while ($ligne = $querystatement->fetch()) {
    echo $ligne['id'] . "</br>";
    echo $ligne['nom'] . "</br>";
    echo $ligne['activity'] . "</br>";
    $nbr++;
}
$nbr;
$id = $nbr;
$id++;
$id_piscine;

$coach = ['Jeff','Julie'];

$resultcoach = $coach[0]; 

$json = file_get_contents(get_template_directory() . "/datas/members_piscine.json", true);

$json = json_decode($json);


foreach($json as $row => $val) {
    var_dump($row);
}

/* if ($_POST['submit-member-add'] == "true") {
    
    if ($_POST['activity'] != "piscine") {
        echo "pas piscine";
        $query2 = "INSERT INTO wp_barrelfit_members VALUES($id,'" . $_POST['name'] . "','" . $_POST['activity'] . "');";
        
        $querystatement2 = $pdo->prepare($query2);
        $querystatement2->execute();
    } else {
        $query2 = "select count(*) from wp_barrelfit_members where activity = 'piscine';";
        
        $row_piscine = $pdo->prepare($query2);
        $row_piscine->execute();
        $row_piscine = $row_piscine->fetch();
        if ($row_piscine['count(*)'] >= 15) {
            $resultcoach = $coach[1]; 
            echo "<br>Trop de monde";
        } else {
            $query2 = "INSERT INTO wp_barrelfit_members VALUES($id,'" . $_POST['name'] . "','" . $_POST['activity'] . "');";

            $querystatement2 = $pdo->prepare($query2);
            $querystatement2->execute();
        }
    }
} */
?>
<title>Home | Barrel & Fit</title>
<main>
    <h3>Elements du home</h3>


</main>
<?php get_footer(); ?>