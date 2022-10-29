<?php

namespace ActiveRecord;

class Post extends ActiveRecordModel
{
    protected string $post_title;
    protected string $post_content;
    protected string $post_date;
    protected string $post_type;
    protected string $post_status;
    protected int $post_author;

    public function get_title() : string
    {
        return $this->post_title;
    }

    public function get_content() : string
    {
        return $this->post_content;
    }

    public function get_date() : string
    {
        return $this->post_date;
    }

    public function get_author_id() : string
    {
        return $this->post_author;
    }

    protected static function get_table_name(): string
    {
        global $wpdb;

        return "{$wpdb->prefix}posts";
    }
}