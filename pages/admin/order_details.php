<?php

ob_start();
// php
$title = "Order Details";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Order Details page</h1>


<?php $content_html = ob_get_clean(); ?>