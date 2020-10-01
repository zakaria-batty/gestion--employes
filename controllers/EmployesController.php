<?php

class EmployesController
{
    // function for recover employes
    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }
    // function for recover One employe
    public function getOneEmploye()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $employe = Employe::getEmploye($data);
            return $employe;
        }
    }
    // function send employees to database
    public function addEmploye()
    {
        if (isset($_POST['submit'])) :
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'matricule' => $_POST['mat'],
                'depart' => $_POST['depart'],
                'poste' => $_POST['poste'],
                'date_emb' => $_POST['date_emb'],
                'statut' => $_POST['statut']
            );
            $result = Employe::add($data);
            if ($result === 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        endif;
    }
}
