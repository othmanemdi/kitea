<?php

ob_start();
// php
$title = "Dashboard";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Dashboard page</h1>


<?php $content_html = ob_get_clean(); ?>