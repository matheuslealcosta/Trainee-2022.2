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

    public function insert($table,$query)
    {
        $insertion = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($query)),
            ':' . implode(', :', array_keys($query))
        );
        
        try{
            $statement = $this->pdo->prepare($insertion);
            $statement->execute($query);
        }catch(Exception $exception){
            die($exception->getMessage());
        };
        
    }
    
    public function delete($table, $id){
        $delete = sprintf(
            'DELETE FROM %s WHERE id = :id',
            $table
        );
        try{
            $statement = $this->pdo->prepare($delete);
            $statement->bindValue(':id', $id);
            $statement->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function updateUsers($table, $query){

        $update = sprintf(
            'UPDATE %s SET name = :name,email = :email, password = :password WHERE id = :id',
            $table
        );

        try{
            $statement = $this->pdo->prepare($update);

            $statement->bindValue(':id', $query['id']);
            $statement->bindValue(':name', $query['name']);
            $statement->bindValue(':email', $query['email']);
            $statement->bindValue(':password', $query['password']);
        
            $statement->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function updatePosts($table,$query)
    {
        $update = sprintf(
            'UPDATE %s SET title = :title, content = :content, image = :image WHERE id = :id',
            $table
        );
        $statement = $this->pdo->prepare($update);
        $statement->bindValue(':title', $query['title'], PDO::PARAM_STR);
        $statement->bindValue(':content', $query['content'], PDO::PARAM_STR);
        $statement->bindValue(':image', $query['image'], PDO::PARAM_STR);
        $statement->bindValue(':id', $query['id'], PDO::PARAM_STR);

        
        $statement->execute();
    }

    public function postIndividual($id)
    {
        $postind = 'SELECT * FROM posts WHERE id = :id';

        $statement = $this->pdo->prepare($postind);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        $post = $statement->fetch();

       return $post;
    }

    public function pesquisaCategoria($nome)
    {
        try {
            $query = $this->pdo->prepare("SELECT * FROM posts WHERE title LIKE '%$nome%'");
    
            $query->execute();
    
            $categoria = $query->fetchAll(PDO::FETCH_ASSOC);
    
            return $categoria;
        } 
        catch(Exception $e) {
            die($e->getMessage());
        }
    }
}
