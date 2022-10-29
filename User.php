<?php

namespace ActiveRecord;

class User extends ActiveRecordModel
{
    protected string $user_email;
    protected string $user_name;
    protected string $dob;
    protected string $date_registered;

    public function get_email() : string
    {
        return $this->user_email;
    }

    public function get_name() : string
    {
        return $this->user_name;
    }

    public function get_dob() : string
    {
        return $this->dob;
    }

    public function get_registration_date() : string
    {
        return $this->date_registered;
    }

    protected static function get_table_name(): string
    {
        global $wpdb;

        return "{$wpdb->prefix}users";
    }
}