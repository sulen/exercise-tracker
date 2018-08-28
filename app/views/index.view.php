<?php require 'layouts/header.php';
?>

<script src="script.js"></script>
<h1>Exercise tracker</h1>
<div class="body">
    <?php if (!logged_in()) : ?>
        <p>Login to view exercises</p>
    <?php else : ?>
        <p>View exercises <a href="/exercises">here</a></p>
    <?php endif ?>
    <p>Example acccount:<br/>
        Login: <code>test</code><br/>
        Password: <code>test</code></p>
    <p>Source code available <a href="http://www.github.com/sulen/exercise-tracker">here</a></p>
</div>
<?php require 'layouts/footer.php'; ?>
