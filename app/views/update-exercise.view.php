<?php require('layouts/header.php');
require '../app/config.php';

$id = key($_GET);

try {
    $exercises = $database->connection->prepare("select * from exercise where id = {$id}");
    $exercises->execute();
    if (!($exercise = $exercises->fetch())) {
        require '../app/views/not-found-view.php';
        die();
    }
} catch (Exception $exception) {
    require '../app/views/not-found-view.php';
    die();
}
?>

<h1>Exercise tracker</h1>

<div class="body">
    <form action="/update?id=<?=$id ?>" method="post">
        <?= csrf() ?>
        <div>
            <label>Exercise:
                <input type="text" name="exercise" value="<?= $exercise['exercise']; ?>">
            </label>
        </div>
        <div>
            <label>Length:
                <input type="text" id="timepicker" name="length" value="<?= $exercise['length']; ?>">
            </label>
        </div>
        <div>
            <label>Date:
                <input type="text" id="datepicker" name="date" value="<?= $exercise['date']; ?>">
            </label>
        </div>
        <button>Update</button>
    </form>
</div>
<?php require('layouts/datetimepicker.php'); ?>
<?php require('layouts/footer.php'); ?>
