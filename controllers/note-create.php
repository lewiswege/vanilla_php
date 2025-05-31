<?php

require 'validator.php';

$config = require 'config.php';
$db = new Database($config['Database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (! Validator::string($_POST['body'],1 ,1000)) {
        $errors['body'] = 'field should not be empty or have more than 1000 characters';
    }


    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}



require 'views/note-create.view.php';
