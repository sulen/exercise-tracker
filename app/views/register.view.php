<?php require 'layouts/header.php'; ?>

<h1>Login</h1>

<div class="body">
    <p><?= $error ?? '' ?></p>
    <form action="/register" method="post">
        <?= csrf() ?>
        <div>
            <label>Login:
                <input type="text" name="login" >
            </label>
        </div>
        <div>
            <label>Email:
                <input type="email" name="email" >
            </label>
        </div>
        <div>
            <label>Password:
                <input type="password" name="password">
            </label>
        </div>
        <button>Register</button>
    </form>
</div>
<?php require 'layouts/footer.php'; ?>
