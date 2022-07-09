<?php
require_once __DIR__ . '/BaseDao.class.php';

class AdminBookDao extends BaseDao
{

  //Constructor function
  public function __construct()
  {
    parent::__construct("books");
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
    $query = "INSERT INTO ".$this->table_name." (name, author_id, language, cover, source, release_date, user_id, activity) 
    VALUES (\"".$entity["name"]."\", \"".$entity["author_id"]."\", \"".$entity["language"]."\", \"".$entity["cover"]."\", \"".$entity["source"]."\", \"".$entity["release_date"]."\", \"".$entity["user_id"]."\", \"".$entity["activity"]."\");";
  
    $this->query($query, null);
  }

  public function update($entity)
  {
    $query = "UPDATE ".$this->table_name." SET
    name = \"".$entity["name"]."\", 
    author_id = \"".$entity["author_id"]."\", 
    language = \"".$entity["language"]."\", 
    cover = \"".$entity["cover"]."\", 
    source = \"".$entity["source"]."\", 
    release_date = \"".$entity["release_date"]."\", 
    user_id = \"".$entity["user_id"]."\", 
    activity = \"".$entity["activity"]."\"
    WHERE id = \"".$entity["id"]."\";";
  
    $this->query($query, null);
  }



}
