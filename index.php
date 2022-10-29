<?php

require_once 'ActiveRecordModel.php';
require_once 'ActiveRecordController.php';

$controller = new \ActiveRecord\ActiveRecordController();
$post = $controller->get_post(12345);
$user = $controller->get_user($post->get_author_id());

?>

<h1><?= $post->get_title(); ?></h1>
<p><?= $post->get_content(); ?></p>
<hr>
<div>
    <span><?= $user->get_name(); ?></span>
    <span><?= $post->get_date(); ?></span>
</div>
