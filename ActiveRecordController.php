<?php

namespace ActiveRecord;

class ActiveRecordController
{
    public function get_post(int $post_id) : object
    {
        return Post::get_item_by_id($post_id);
    }

    public function get_user(int $user_id) : object
    {
        return User::get_item_by_id($user_id);
    }
}