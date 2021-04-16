<?php

namespace Core;
use Core;

class ORM
{
    private $conn;
    private $bdd;

    public function __construct()
    {
         $this->conn = new Core\Database();
         $this->bdd = $this->conn->getDB();

    }

    public function create($table, $fields)
    {
         $statement =  $this->bdd->prepare("INSERT INTO $table (". implode(", ", array_flip($fields)) . ") VALUES (\"" . implode("\", \"", array_values($fields)) ."\")");
         $statement->execute();
         return $this->bdd->lastInsertId();
    }


    public function read($table, $id)
    {

        $statement = $this->bdd->prepare("SELECT * FROM $table WHERE id = ?");
        $statement->execute(array($table, $id));
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }


    public function update($table, $id, $fields)
    {

        $ArrayOfFields = array();

        foreach ($fields as $k => $v) {

            $ArrayOfFields[] = $v;
        }

        $update = implode(", ", $ArrayOfFields);
        $query = "UPDATE $table SET ? WHERE id = ?";
        $statement = $this->bdd->prepare($query);
        $statement->execute(array($update, $id));
        if ($this->statement->execute(array($update, $id))) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($table, $id)
    {

        $statement = $this->bdd->prepare("DELETE FROM $table WHERE id = ?");
        $statement->execute($id);
        if ($this->statement->execute($id)) {
            return true;
        } else {
            return false;
        }
    }


    public  function find($table, $params = array('WHERE' => '', 'ORDER BY' => '', 'LIMIT' => ''))
    {
        if (isset($params)) {
			$stringParams = '';
			foreach ($params as $key => $value) {
				if ($value != null) {
					$stringParams .= $key . ' ' . $value . ' ';
                }	
            }
        }
        $query = $this->bdd->prepare("SELECT * FROM $table ?");
        $query->execute(array($stringParams));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }   
}


