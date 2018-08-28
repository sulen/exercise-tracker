<?php require 'layouts/header.php'; ?>

<h1>Login</h1>

<div class="body">
    <form action="/login" method="post"><div>
            <?= csrf() ?>
            <label>Login:
                <input type="text" name="login" >
            </label>
        </div>
        <div>
            <label>Password:
                <input type="password" name="password">
            </label>
        </div>
        <button>Login</button>
    </form>
</div>
<?php require 'layouts/footer.php'; ?>
