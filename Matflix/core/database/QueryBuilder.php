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

    public function update($table, $query){
        $update = sprintf(
            'UPDATE %s SET name = :name,email = :email, password = :password WHERE id = :id',
            $table
        );
        $statement = $this->pdo->prepare($update);
        $statement->bindValue(':id', $query['id']);
        $statement->bindValue(':name', $query['name']);
        $statement->bindValue(':email', $query['email']);
        $statement->bindValue(':password', $query['password']);
        
        $statement->execute();
    }

}
