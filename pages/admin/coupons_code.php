<?php

ob_start();
// php
$title = "Coupons Code";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Coupons Code page</h1>


<?php $content_html = ob_get_clean(); ?>