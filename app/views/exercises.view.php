<?php require 'layouts/header.php';

use App\Core\Session;

Session::protectedPage();
require '../app/controllers/exercises.php';
?>

<script src="script.js"></script>
<h1>Exercise tracker</h1>
<div class="body">
    <form method="GET" action="/new">
        <button>New Exercise</button>
    </form>
    <div style="margin: 10px 0px 10px 0px;">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Length</th>
                <th>Date</th>
                <th>Remove</th>
                <th>Update</th>
            </tr>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?= $exercise['exercise'] ?></td>
                    <td><?= $exercise['length'] ?></td>
                    <td><?= $exercise['date'] ?></td>
                    <td align="center">
                        <!--                    <form method="GET" action="/remove">-->
                        <button id="remove<?= $exercise['id'] ?>" name="<?= $exercise['id'] ?>" onclick="remove(this)">
                            X
                        </button>
                        <!--                    </form>-->
                    </td>
                    <td align="center">
                        <form method="GET" action="/update">
                            <button name="<?= $exercise['id'] ?>">U</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php require 'layouts/pagination.php'; ?>
</div>
<?php require 'layouts/footer.php'; ?>
