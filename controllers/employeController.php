<?php

class EmployesController{
    public function getAllEmployes(){
        $employes = Employe::getAll();
        return $employes;
    }
}

?>