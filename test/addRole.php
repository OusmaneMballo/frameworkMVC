<?php
require_once '../bootstrap.php';
$role=new Role();
$role->setNom("formateur");
$entityManager->persist($role);
$entityManager->flush();
echo $role->getId();
?>