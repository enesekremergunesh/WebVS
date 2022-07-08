<?php
require_once __DIR__. '/BaseDao.class.php';

class NoteDao extends BaseDao{

  //Constructor function
  public function __construct(){
    parent::__construct("notes");
  }

  

}

?>