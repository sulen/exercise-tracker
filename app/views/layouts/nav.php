<nav>
    <ul>
        <?php if (!logged_in()) : ?>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        <?php else : ?>
            <li><a href="/">Home</a></li>
            <li><a href="/exercises">Exercises</a></li>
            <li><a href="#" onclick="logout();return false">Logout</a></li>
        <?php endif ?>
    </ul>
</nav>

