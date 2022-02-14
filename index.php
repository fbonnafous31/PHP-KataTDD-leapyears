<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php

use App\LeapYears;

require_once ('src/LeapYears.php');

    if (isset ($_POST['input_leapyear'])) {
        $year = $_POST['input_leapyear'];
        $leapyear = new LeapYears();
        $result = $leapyear->checkYear($year);
    }

?>

<div class="container">
    <form action="index.php" method="POST">
        <div class="form-group">
            <input type="number" name="input_leapyear" id="input_fizzbuzz" class="form-control" placeholder="Entrer une valeur" value="<?= $year ?>">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>  

    <?php if (!is_null($result)): ?>
        <?php if ($result): ?>
            <div class="alert alert-success">
                Année bissextile
            </div>
        <?php else: ?>
            <div class="alert alert-warning">
                Année non bissextile
            </div>
        <?php endif ?>    
    <?php endif ?>
</div>