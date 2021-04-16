<?php

namespace Core;

class Entity
{

    public $table;
    public $fields;
    public $orm;

    public function __construct($table, array $array = [])
    {
        $this->table = $table;
        $this->orm = new ORM();

        if (!empty($array)) {

            foreach ($array as $k => $v) {
                $this->$k = $v;
            }

            $this->fields = $array;
        }
    }

    public function save()
    {
        if (!isset($this->fields['id'])) {
            return $this->orm->create($this->table, $this->fields);
        } else {
            return $this->orm->update($this->table, $this->id, $this->fields);
        }
    }

    public function create()
    {
        return $this->orm->create($this->table, $this->fields);
    }

    public function read()
    {
        return $this->orm->read($this->table, $this->id);
    }


    public function update()
    {
        return $this->orm->update($this->table, $this->id, $this->fields);
    }

    public function delete()
    {
        return $this->orm->delete($this->table, $this->id);
    }

    public function find()
    {
        return $this->orm->find($this->table);
    }
}
