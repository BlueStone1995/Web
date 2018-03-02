<?php session_start(); ?>

<br><br><br>
<div class="formulaireModification center">

    <h5 class="header light">Modification article</h5>

    <br><br><br>
    <?php
    $article = unserialize($_SESSION["article"]);

    echo "<form name='formModification' id='formModification' action=\"../Gestionnaire/gestionModification.php\" method='post'>
        <div class='row container'>
            <div class='col s12'> 
               <div class='row'>
                    <div class='input-field col s6'>
                        <i class='material-icons prefix'>image</i>
                        <input id='image' name='image' type='text' class='validate' value='$article->imageURL'>
                        <label for='image'>URL de l'image</label>
                    </div>

                    <div class='input-field col s6'>
                        <i class='material-icons prefix'>title</i>
                        <input id='titre' name='titre' type='text' class='validate' value='$article->titre'>
                        <label for='titre'>Titre de l'article</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s12'>
                        <i class='material-icons prefix'>text_fields</i>
                        <textarea id='corps' class='materialize-textarea validate' name='corps'>$article->corps</textarea>
                        <label for='corps'>Description de l'article</label>
                    </div>
                </div>           
            </div>
        </div>
        <br>
        <div class='center'>
            <bouton class=\"waves-effect waves-light btn light\">
                <input type=\"submit\" value='Modifier article'>
                <i class=\"material-icons right\">send</i>
            </bouton>
        </div>
    </form>";

    $_SESSION["article"] = serialize($article);
    ?>
</div>
<br><br><br><br><br><br>