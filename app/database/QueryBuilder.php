<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare('select * from todos');

    try {
      $statement->execute();
    } catch (PDOException $e) {
      die($e->getMessage());
    }

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}