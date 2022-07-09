<?php
require_once __DIR__ . '/BaseService.class.php';
require_once __DIR__ . '/../dao/AdminBookDao.class.php';

class AdminBookService extends BaseService
{

  public function __construct()
  {
    parent::__construct(new AdminBookDao());
  }

  public function get_all()
  {
    return $this->dao->get_all();
  }

  public function get_by_id($id)
  {
    return $this->dao->get_by_id($id);
  }

  public function delete($id)
  {
    return $this->dao->delete($id);
  }

  public function add($entity)
  {
    return $this->dao->add($entity);
  }

  public function update($entity)
  {
    return $this->dao->update($entity);
  }
}
