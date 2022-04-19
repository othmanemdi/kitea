<?php

ob_start();
// php
$title = "Products";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Products page</h1>


<?php $content_html = ob_get_clean(); ?>