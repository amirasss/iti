<?php
class db {
  private $host="localhost";
  private $dbname="track_php";
  private $user="root";
  private $password="";
  private $dbtype="mysql";
  private $pdo;

  public function __construct()
  {
      $this->pdo=new pdo("$this->dbtype:
        host=$this->host;
        dbname=$this->dbname",
        $this->user,
        $this->password
    );
  }
  function get_connection(){
      return $this->pdo;
  }
  function select($col,$table,$condition=1){
    return $this->pdo->query("select $col from $table where $condition");
  }
  function delete($table,$condition){
    return $this->pdo->query("delete from $table where $condition");
  }
  function insert($table,$cols){
    return $this->pdo->query("insert into $table set $cols");
  }
  function update($table,$cols,$condition){
    return $this->pdo->query("update $table set $cols where $condition");
  }
}
