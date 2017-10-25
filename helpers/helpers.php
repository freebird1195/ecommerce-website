<?php
function display_errors($errors){
    $display = '<ul class = "bg-danger">';
    foreach ($errors as $error){
        $display .= '<li class="text-danger">'.$error.'</li>';
    }
    $display .= '</ul>';
    echo $display;
}

function errors_html($errors){
    $display = '<ul class = "bg-danger">';
    foreach ($errors as $error){
        $display .= '<li class="text-danger">'.$error.'</li>';
    }
    $display .= '</ul>';
    return $display;
}

function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES, "UTF-8");
}

?>
