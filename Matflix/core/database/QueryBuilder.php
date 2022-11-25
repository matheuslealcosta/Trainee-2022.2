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

        $statement = $this->pdo->prepare($insertion);
    
        $statement->execute($query);
    }

    public function delete($table, $id)
    {
        $delete = sprintf(
            'DELETE FROM %s WHERE id = :id',
            $table
        );
        $statement = $this->pdo->prepare($delete);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    public function update($table,$query)
    {
        //UPDATE `posts` SET `title` = 'sadsd MUDADO novamente', `content` = 'asdasd kakakakak', `created_at` = NULL, `updated_at` = NULL WHERE `posts`.`id` = 15;
            $update = 'UPDATE %s SET title = :title, content = :content, image = :image WHERE id = :id';
            $statement = $this->pdo->prepare($update);
            $statement->bindValue(':title', $query['title'], PDO::PARAM_STR);
            $statement->bindValue(':content', $query['content'], PDO::PARAM_STR);
            $statement->bindValue(':image', $query['image'], PDO::PARAM_STR);
            $statement->bindValue(':id', $query['id'], PDO::PARAM_STR);

            $statement->execute();
    }
}
