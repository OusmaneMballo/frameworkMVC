<?php
namespace src\model;
use lib\system\Model;
class RoleDB extends Model
{
    public function add()
    {
        echo 2;
    }
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery('SELECT r FROM Role r')
                    ->getResult();
        //return array("ROLE_FINANCE,ROLE_COMPTAT");
    }
}
?>