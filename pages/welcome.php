<?php

ob_start();
// php
$title = "Welcome";
// limite 400 Ko
$date_expire = time() + 60 * 60 * 24;
$users = [];
// $usersd
setcookie("user", "othmane", $date_expire);




$content_php = ob_get_clean();


ob_start(); ?>

<h1>Welcome page</h1>

<div class="alert alert-danger">
    <?php dd($_COOKIE) ?>
</div>

<?php $content_html = ob_get_clean(); ?>