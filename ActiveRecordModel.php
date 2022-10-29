<?php

namespace ActiveRecord;

abstract class ActiveRecordModel
{
    public int $item_id;

    public function get_item_id() : int
    {
        return $this->item_id;
    }

    public static function get_all_items() : array
    {
        global $wpdb;

        $items = [];

        $items_data = $wpdb->get_results("SELECT * FROM " . self::get_table_name());

        foreach ($items_data as $item_data) {
            $item = new static();

            foreach ($item_data as $field => $value) {
                $item->$field = $value;
            }

            $items[] = $item;
        }

        return $items;
    }

    public static function get_item_by_id(int $item_id) : object
    {
        global $wpdb;

        $item_data = $wpdb->get_row("SELECT * FROM " . static::get_table_name() . " WHERE ID = {$item_id}");

        $item = new static();

        foreach ($item_data as $field => $value) {
            $item->$field = $value;
        }

        return $item;
    }

    protected static function get_table_name() : string
    {
    }
}