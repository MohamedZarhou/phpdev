<?php

namespace Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        try {
            $statement->execute();
        } catch (\PDOException $e) {
            die($e->getMessage());
        }

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertInto($table, $dataArray)
    {
        $sql = sprintf(
            "insert into %s (%s) values (%s);",
            $table,
            implode(",", array_keys($dataArray)),
            ':' . implode(',:', array_keys($dataArray))
        );

        $statement = $this->pdo->prepare($sql);

        try {
            $statement->execute($dataArray);
        } catch (\PDOException $e) {
            die("$sql <br> {$e->getMessage()}");
        }
    }
}
