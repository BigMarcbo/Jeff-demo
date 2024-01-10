<?php 

$config = require('config.php'); 

$db = new Database($config['database']);


$heading = 'Dingus Notes';

$notes = $db->query('select * from notes where user_id = 7')->get();


require "views/notes/index.view.php";
