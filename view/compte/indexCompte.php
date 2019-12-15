<html>
<head>
    <title>Compte</title>
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
        <div class="panel-heading">Listes des Comptes</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>NUMERO</td>
                    <td>DATE DE CREATION</td>
                    <td>IdCLIENT</td>
                    <td>SOLDE</td>
                    <td>ACTION1</td>
                    <td>ACTION2</td>
                </tr>
                <?php
                require_once '\xampp\htdocs\mesprojets\BanqueDuPeuple\model\modelCompte.php';
                $comptes = listeCompte()->fetchAll();
                foreach ($comptes as $key => $value){
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
        <div class="panel-heading">Formulaires de gestion des des Compte</div>
        <div class="panel-body">
            <form action="compteController" method="POST">
                <div class="form-group">
                    <label class="control-label" for="id">Numero Compte</label>
                    <input class="form-control" type="number" name="id" id="id">
                </div>

                <div class="form-group">
                    <label class="control-label" for="date">Date de creation</label>
                    <input class="form-control" type="date" name="date" id="date">
                </div>

                <div class="form-group">
                    <label class="control-label" for="nom">Solde</label>
                    <input class="form-control" type="number" name="nom" id="nom">
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