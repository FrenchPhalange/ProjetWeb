<?php
function AddMember()
{
?>
    <h2>S'inscrire à une activité : </h2>
    <?php
    if (isset($_POST['submit'])) {
        $values = "";
        foreach ($_POST as $field => $val) {
            if ($field == 'submit') {
            } else {
                if ($field == "date") {

                    $values .= "'$val'";
                } else {

                    $values .= "'$val'" . ",";
                }
            }
        }
        if (insertTable("members", "$values")) {
        } else {
            echo "pas bien";
        }
        echo  "<script>
            let count = 5;
            setInterval(function() {
                count--;
                if (count == 0) {
                    window.location = '/pages/home.php';
                }
            }, 500);
        </script>";
    }

    ?>
    <?php
    $activities = [['piscine', 30], ['fitness', 20], ['machines', 300]];
    foreach ($activities as $activity) {
        NumberActivityHere($activity[0], $activity[1]);
    }
    $people = [['Melanie Carred', 15], ['Stephane Marin', 15]];
    foreach ($people as $person) {
        NumberPersonHere($person[0], $person[1]);
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="fullname" required placeholder="Full Name" pattern="[^\d]{3,100}">
        <input type="number" name="age" min="18" max="99" placeholder="Age" required>
        <select name="activity" class="select_all">
            <option value="default" selected disabled>Choisir une activité</option>
            <option value='piscine'>Piscine</option>
            <option value="fitness">Fitness</option>
            <option value="machines">Machines</option>
        </select>

        <select name="coach" class="select_piscine hidden">
            <option value="default" selected disabled>Choisissez votre coach</option>
            <option value="Melanie Carred">Melanie Carred</option>
            <option value="Stephane Marin">Stephane Marin</option>

        </select>
        <select name="coach" class="select_fitness hidden">
            <option value="default" selected disabled>Choisissez votre coach</option>
            <option value="Julien Stephan">Julien Stephan</option>
            <option value="Celia Cazo">Celia Cazo</option>
            <option value="Priscillia Coven">Priscillia Coven</option>
        </select>

        <input type="date" min="">
        <select name="coach" class="select_machines hidden">
            <option value="default" selected disabled>Choisissez votre coach</option>
            <option value="Rose Mariet">Rose Mariet</option>
            <option value="John Advance">John Advance</option>
            <option value="Steve Abrel">Steve Abrel</option>
            <option value="Juliette Stamina">Juliette Stamina</option>
        </select>
        <input type="hidden" name="date" value="<?php echo date('l jS \of F Y h:i:s A'); ?>">
        <button name="submit">S'inscrire</button>
    </form>
<?php
}

?>