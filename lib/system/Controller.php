<?php
namespace lib\system;
use lib\system\View;
class Controller
{
   protected $view;
    public function __construct()
    {
        $this->view=new View();
    }
}
?>