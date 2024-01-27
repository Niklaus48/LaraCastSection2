<?php

require 'Functions.php';

//require 'route.php';

require 'DataBase.php';

$config = require 'config.php';

$db = new DataBase($config['database']);

$posts = $db->query('select * from posts');

foreach ($posts as $post){
    echo "<li>". $post['title']."</li>  ";
}
