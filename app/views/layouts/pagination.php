<?php
require '../app/controllers/pagination.php'; ?>

<button id="prev">Previous page</button>
<button id="next">Next page</button>

<script>
    var prevButton = document.getElementById('prev');
    var nextButton = document.getElementById('next');
    var page = '<?= $page ?>';
    var isLast = <?= $isLast ?>;
    console.log(page);

    if (page == 1 && isLast) {
        prevButton.disabled = true;
        nextButton.disabled = true;
    } else if (page == 1) {
        prevButton.disabled = true;
        nextButton.addEventListener('click', function () {
            document.location.href = 'exercises?page=' + (++page);
        });
    } else if (isLast) {
        nextButton.disabled = true;
        prevButton.addEventListener('click', function () {
            document.location.href = 'exercises?page=' + (--page);
        });
    } else {
        prevButton.addEventListener('click', function () {
            document.location.href = 'exercises?page=' + (--page);
        });
        nextButton.addEventListener('click', function () {
            document.location.href = 'exercises?page=' + (++page);
        });
    }
</script>
