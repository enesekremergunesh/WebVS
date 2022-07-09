<?php
require_once __DIR__ . '/BaseDao.class.php';

class AdminAuthorDao extends BaseDao
{

  //Constructor function
  public function __construct()
  {
    parent::__construct("authors");
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
    $query = "INSERT INTO ".$this->table_name." (name, bio, cover, user_id) 
    VALUES (
      \"".$entity["name"]."\", 
      \"".$entity["bio"]."\", 
      \"".$entity["cover"]."\", 
      \"".$entity["user_id"]."\");";
  
    $this->query($query, null);
  }

  public function update($entity)
  {
    $query = "UPDATE ".$this->table_name." SET
    name = \"".$entity["name"]."\", 
    bio = \"".$entity["bio"]."\", 
    cover = \"".$entity["cover"]."\", 
    user_id = \"".$entity["user_id"]."\"
    WHERE id = (\"".$entity["id"]."\");";
  
    $this->query($query, null);
  }



}
