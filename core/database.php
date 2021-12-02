<?php
abstract class database{
    abstract public function get($limit=10,$offset = 0);
    abstract public function insert($data);
    abstract public function update();
    abstract public function delete();
    abstract public function table($table);
}

