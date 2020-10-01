<?php
    if (isset($_POST['submit'])) :
        $newEmploye = new EmployesController();
        $newEmploye->addEmploye();
    endif;
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un employé</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="post">
                        <div class="form-group">
                            <label for="nom">Nom*</label>
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom*</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <label for="mat">Matricule*</label>
                            <input type="text" name="mat" class="form-control" placeholder="Matricule">
                        </div>
                        <div class="form-group">
                            <label for="depart">Département*</label>
                            <input type="text" name="depart" class="form-control" placeholder="Département">
                        </div>
                        <div class="form-group">
                            <label for="poste">Poste*</label>
                            <input type="text" name="poste" class="form-control" placeholder="poste">
                        </div>
                        <div class="form-group">
                            <label for="date_emb">Date Embauche*</label>
                            <input type="date" name="date_emb" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="statut" id="">
                                <option value="1">Active</option>
                                <option value="0">Résilité</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit">valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>