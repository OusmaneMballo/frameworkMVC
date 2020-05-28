<?php
namespace lib\system;
class View
{
    public function __construct()
    {
        
    }
    public function load()
    {
        $num=func_num_args();
        $arg=func_get_args();
        switch($num)
        {
            case 1:
                $file='src/view/'.$arg[0].'.php';
                if(file_exists($file))
                {
                    require_once $file;
                }
                else{
                    die("Oups!... ".$file." n'existe pas comme view!");
                }
            break;
            case 2:
                $file='src/view/'.$arg[0].'.php';
                if(file_exists($file))
                {
                    $data=$arg[1];
                    require_once $file;
                }
                else{
                    die("Oups!... ".$file." n'existe pas comme view!");
                }
            break;
            default:
            die("La fonction load() ne peut recevoir plus de 2 arguments!");
        }
    }
}
?>