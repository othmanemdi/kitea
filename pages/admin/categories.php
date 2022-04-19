<?php

ob_start();
// php
$title = "Categories";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Categories page</h1>


<?php $content_html = ob_get_clean(); ?>