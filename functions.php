<?php
function die_dump($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorise($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}