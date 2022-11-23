<?php

namespace App\Core\Database;

use DateTime;
use PDO, Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($table,$query){
        $insertion = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($query)),
            ':' . implode(', :', array_keys($query))
        );

        $statement = $this->pdo->prepare($insertion);
    
        $statement->execute($query);
    }
    
    public function delete($table, $id){
        $delete = sprintf(
            'DELETE FROM %s WHERE id = :id',
            $table
        );
        $statement = $this->pdo->prepare($delete);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}
