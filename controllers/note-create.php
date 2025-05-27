<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    die_dump($_POST);
}

$heading = 'Create Note';
require 'views/note-create.view.php';
