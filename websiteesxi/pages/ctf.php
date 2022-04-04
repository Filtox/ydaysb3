<!DOCTYPE html>
<html>

<head>
    <?php include("head.php"); ?>
    <title>Capture the Flag</title>
    <style>
        .selectmachine {
            padding: 5px;
            background: #f2f4f7;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="espace"></div>
    <div class="container">
        <form name="formulaire_ctf_alltheday_affiche_partie" method="post" action="script2.php" class="noajax hasajax"><input type="hidden" name="var_ajax" value="form">
            <span class="form-hidden"><input name="lang" value="fr" type="hidden"><input name="page" value="ctf_alltheday" type="hidden"><input name="formulaire_action" type="hidden" value="ctf_alltheday_affiche_partie"><input name="formulaire_action_args" type="hidden" value="YehOQ+SaJfFeBXavTocB3164zoPfb0iMoV2HXSWU+DzxUcT1wcf8Ox5FkwPcCqTk0ZBM/juEQFBDburKWtDJUG3dHAvdLSC+0nji"><input name="formulaire_action_sign" type="hidden" value="eb9bd7feb883429bf7ca6dc0a617085c82c9dbec"></span>
            <h1><b class="color1">Capture the flag</b></h1>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <p>Choisissez l'environnement virtuel que vous souhaitez attaquer</p>
                </div>
                <div class="small-12 medium-6 columns">
                    <select class="selectmachine" id="id_environnement_virtuel" name="id_environnement_virtuel" onchange="$('.vm_description').hide(); $('#id_environnement_virtuel'+$('#id_environnement_virtuel option:selected').val()).show();">
                        <option value="">Sélectionner un environnement virtuel</option>
                        <option value="1">Hacklab 1</option>
                        <!--<option value="2">Metasploitable 2</option>-->
                        <!--<option value="3">A bittersweet shellfony</option>-->
                    </select>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="small-12 columns">
                    <div class="vm_description" id="id_environnement_virtuel1" style="display: none;">
                        <h4>Description</h4>
                        <p></p>
                        <p>Cette machine est la plus facile d'accès que vous retrouverez, elle est attaquable via une méthode très commune de connexion à distance.</p>
                        <p>Le mot de passe à récupérer est dans le fichier flag.txt</p>
                        <h4>Durée de la partie</h4>
                        <p>60 min.</p><br>
                    </div>
                    <div class="vm_description" id="id_environnement_virtuel2" style="display: none;">
                        <h4>Description</h4>
                        <p></p>
                        <p>Windows-XP-pro-01 est une station de travail fonctionnant avec le système d’exploitation Microsoft Windows XP SP2.</p>
                        <p></p>
                        <h4>Durée de la partie</h4>
                        <p>90 min.</p><br>
                    </div>
                    <div class="vm_description" id="id_environnement_virtuel3" style="display: none;">
                        <h4>Description</h4>
                        <p></p>
                        <p>Machine virtuelle construite par nightrang3r. Aucun indice.</p>
                        <p></p>
                        <h4>Durée de la partie</h4>
                        <p>240 min.</p><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <h4>Attention !</h4>
                    <p>Une fois votre environnement choisi, veuillez ne pas quitter la page en cours sous peine de suppression totale de votre environnement de travail.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <h3>Enregistrer votre choix</h3>
                </div>
                <div class="small-12 medium-6 columns">
                    <input type="hidden" name="action_partie" value="enregistrer_choix">
                    <input type="submit" class="submit" name="enregistrer_choix" value="Enregistrer">
                </div>
            </div>
        </form>

    </div>

</body>
<script>
    sessionStorage.clear();
    localStorage.clear();
</script>
<?php include("bottom.php"); ?>

</html>