<?php
class Employe
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM employes');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close($db);
        $stmt = null;
    }
    static public function getEmploye($data)
    {
        $id = $data['id'];
        try {

            $query = 'SELECT * FROM employes WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO employes (
            nom,prenom,matricule,depart,poste,date_emb,statut)
            VALUES(:nom,:prenom,:matricule,:depart,:poste,:date_emb,:statut)');
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':matricule', $data['matricule']);
        $stmt->bindParam(':depart', $data['depart']);
        $stmt->bindParam(':poste', $data['poste']);
        $stmt->bindParam(':date_emb', $data['date_emb']);
        $stmt->bindParam(':statut', $data['statut']);

        if ($stmt->execute()) :
            return 'ok';
        else :
            return 'error';
        endif;
        $stmt = null;
    }
}
