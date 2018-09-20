<nav>
    <div class="nav">
        <ul>
            <?php if (!logged_in()) : ?>
                <li><a href="/">Home</a></li>
                <li style="float:right"><a href="/register">Register</a></li>
                <li style="float:right"><a href="/login">Login</a></li>
            <?php else : ?>
                <li><a href="/">Home</a></li>
                <li><a href="/exercises">Exercises</a></li>
                <li style="float:right"><a href="#" onclick="logout();return false">Logout</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>

