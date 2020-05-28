<?php
//namespace src\controller;
use lib\system\Controller;
use src\model\RoleDB;
class RoleController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }

    public function getAll()
    {
        $role=array("ROLES_USER,ROLES_FORMATEUR");
        return $this->view->load("roles/getAll",$role);
    }
    public function findAll()
    {
        $roledao=new RoleDB();
        $role=$roledao->findAll();
        return $this->view->load("roles/getAll",$role);
    }
     public function delete($id)
    {
        echo $id;
        //return $this->view->load("roles/add");
    }
}
?>