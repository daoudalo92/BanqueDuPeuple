<html>
    <head>
        <title>Client</title>
        <link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeuple/public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeuple/public/css/style.css">
    </head>
    <body>
    <div class="top">
        <h2>BANQUE DU PEUPLE</h2>
    </div>

    <div class="nav navbar-primary">
        <ul class="nav navbar-nav">
            <li>
                <a href="comptes">GESTION COMPTES</a>
            </li>
            <li>
                <a href="clients">GESTION CLIENTS</a>
            </li>
        </ul>
    </div>

    <div class="container col-md-8">
        <div class="panel panel-primary">
           <div class="panel-heading">Listes des Clients</div>
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>ID</td>
                           <td>NOM</td>
                           <td>PRENOM</td>
                           <td>ADRESSE</td>
                           <td>TELEPHONE</td>
                           <td>ACTION1</td>
                           <td>ACTION2</td>
                       </tr>
                       <?php
                            require_once '\xampp\htdocs\mesprojets\BanqueDuPeuple\model\modelClient.php';
                            $clients = listeClient()->fetchAll();
                            foreach ($clients as $key => $value){
                                echo " <tr>
                                           <td>".$value[0]."</td>
                                           <td>$value[1]</td>
                                           <td>$value[2]</td>
                                           <td>$value[3]</td>
                                           <td>$value[4]</td>
                                       </tr>";
                            }
                       ?>
                   </table>
               </div>
           <div class="panel-footer">BanqueDuPeuple</div>
        </div>
    </div>

    <div class="container col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Formulaires de gestion des des Clients</div>
            <div class="panel-body">
                <form action="clientController" method="POST">

                    <div class="form-group">
                        <label class="control-label" for="nom">Nom</label>
                        <input class="form-control" type="text" name="nom" id="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="prenom">Prenom</label>
                        <input class="form-control" type="text" name="prenom" id="prenom">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="adresse">Adresse</label>
                        <input class="form-control" type="text" name="adresse" id="adresse">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="tel">Téléphone</label>
                        <input class="form-control" type="text" name="tel" id="tel">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Ajouter" id="Ajouter" value="Ajouter">
                        <input class="btn btn-danger" type="reset" name="annuer" id="annuler" value="Annuler">
                    </div>

                </form>
            </div>
            <div class="panel-footer">BanqueDuPeuple</div>
        </div>
    </div>

    </body>
</html>