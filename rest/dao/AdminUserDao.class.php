<?php
require_once __DIR__ . '/BaseDao.class.php';

class AdminUserDao extends BaseDao
{

  //Constructor function
  public function __construct()
  {
    parent::__construct("users");
  }

  public function get_all()
  {
    $query = "SELECT * FROM ".$this->table_name."";
    return $this->query($query, null);
  }

  public function get_by_id($id)
  {
    $query = "SELECT * FROM ".$this->table_name." WHERE id = :id";
    return $this->query_unique($query, ['id' => $id]);
  }

  public function delete($id)
  {
    $query = "DELETE FROM ".$this->table_name." WHERE id = :id";
    return $this->query_unique($query, ['id' => $id]);
  }

  public function add($entity)
  {
    $query = "INSERT INTO ".$this->table_name." (email, password, first_name, last_name, avatar_id, admin) 
    VALUES (
      \"".$entity["email"]."\", 
      \"".$entity["password"]."\", 
      \"".$entity["first_name"]."\", 
      \"".$entity["last_name"]."\", 
      \"".$entity["avatar_id"]."\", 
      \"".$entity["admin"]."\");";
  
    $this->query($query, null);
  }

  public function update($entity)
  {
    $query = "UPDATE ".$this->table_name." SET
    email = \"".$entity["email"]."\", 
    password = \"".$entity["password"]."\", 
    first_name = \"".$entity["first_name"]."\", 
    last_name = \"".$entity["last_name"]."\", 
    avatar_id = \"".$entity["avatar_id"]."\", 
    admin = \"".$entity["admin"]."\"
    WHERE id = \"".$entity["id"]."\";";
  
    $this->query($query, null);
  }



}
