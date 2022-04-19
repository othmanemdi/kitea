<?php

ob_start();
// php
$title = "Orders";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Orders page</h1>


<?php $content_html = ob_get_clean(); ?>