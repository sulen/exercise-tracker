<?php require('layouts/header.php'); ?>

<h1>Exercise tracker</h1>

<div class="body">
    <form action="/new" method="post"><div>
            <?= csrf(); ?>
            <label>Exercise:
                <input type="text" name="exercise" >
            </label>
        </div>
        <div>
            <label>Length:
                <input type="text" id="timepicker" name="length" value="00:00:00">
            </label>
        </div>
        <div>
            <label>Date:
                <input type="text" id="datepicker" name="date" value="<?= date('Y-m-d') ?>">
            </label>
        </div>
        <button>Add</button>
    </form>
</div>
<?php require('layouts/datetimepicker.php'); ?>
<?php require('layouts/footer.php'); ?>
