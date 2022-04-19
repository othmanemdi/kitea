<?php

// diff("WEBROOT",di)
$WEBROOT = dirname(__DIR__) . DIRECTORY_SEPARATOR;

function dd($array = "")
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    // die();
}

function lordicon($array = "")
{
echo "
    <lord-icon 
    src='https://cdn.lordicon.com/tdrtiskw.json' 
    trigger='loop' 
    colors='primary:#121331,secondary:#ed1c24' 
    stroke='75' 
    scale='40' 
    style='width:50px;height:50px'></lord-icon>
    ";
//     return <<<HTML
//  <lord-icon 
//  src="https://cdn.lordicon.com/tdrtiskw.json" 
//  trigger="loop" 
//  colors="primary:#121331,secondary:#ed1c24" 
//  stroke="75" 
//  scale="40" 
//  style="width:50px;height:50px"></lord-icon>
// HTML;

}


if (!function_exists('_date_format')) {
    function _date_format($format = "d/m/Y", $date): string
    {
        return date($format, strtotime($date));
    }
}

/*
function _get_order_status(int $id): array|bool
{
    $status = [];

    switch ($id) {
        case 1:
            $status["status_name"] = "waiting";
            $status["color"] = "secondary";
            $status["icon"] = "hourglass-start";
            return $status;
            break;

        case 2:
            $status["status_name"] = "in Progress";
            $status["color"] = "info";
            $status["icon"] = "tasks";
            return $status;
            break;

        case 3:
            $status["status_name"] = "delivered";
            $status["color"] = "success";
            $status["icon"] = "truck";
            return $status;
            break;

        case 4:
            $status["status_name"] = "canceled";
            $status["color"] = "danger";
            $status["icon"] = "window-close";
            return $status;
            break;

        case 5:
            $status["status_name"] = "Refunded";
            $status["color"] = "warning";
            $status["icon"] = "undo";
            return $status;
            break;

        default:
            return false;
            break;
    }
}
*/
