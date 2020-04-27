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
    $statement = $this->pdo->prepare("select * from {$table}");

    try {
      $statement->execute();
    } catch (PDOException $e) {
      die($e->getMessage());
    }

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insertInto($table, $dataArray)
  {
    // 'title,descreption'
    $dataArray_keys_String = implode(",", array_keys($dataArray));

    // ['?', '?']
    $questionMarksArray = array_map(function ($item) {
      return '?';
    }, $dataArray);
    // '?,?'
    $dataArray_values_String = implode(",", $questionMarksArray);



    $sql = "insert into {$table} ({$dataArray_keys_String}) values ($dataArray_values_String);";
    $statement = $this->pdo->prepare($sql);

    try {
      $statement->execute(array_values($dataArray));
    } catch (PDOException $e) {
      echo 'Data : ';
      foreach ($dataArray as $dataItem)
        echo $dataItem . ' | ';
      die("<br> $sql <br> {$e->getMessage()}");
    }
  }
}
