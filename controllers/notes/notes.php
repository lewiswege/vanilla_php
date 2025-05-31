<?php

$config = require('config.php');
$db = new Database($config['Database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes')->fetch();
require "views/notes.view.php";