<?php

ob_start();
// php
$title = "Mot de pass oublié?";

$content_php = ob_get_clean();


ob_start(); ?>


<div class="row justify-content-md-center ">
    <div class="col-6">
        <div class="bg-light p-5 rounded-pilla rounded-3">
            <h2 class="text-center mb-5">MOT DE PASSE OUBLIÉ?</h2>

            <p class="text-center">
                Veuillez entrer votre adresse email ci-dessous pour recevoir un lien de réinitialisation de mot de passe.
            </p>

            <form method="post" autocomplete="off" class="row g-3">
                <div class="form-group mb-3">
                    <label class="form-label" for="email">Adresse mail: (<span class="text-kitea">*</span>)</label>

                    <input name="email" type="email" class="form-control" id="email" placeholder="Veuillez saisir votre email SVP !">
                </div>


                <div class="mt-3">
                    <button type="submit" name="ajt_compte" class="btn bg-kitea text-white">Rénitialiser mon mot de pass</button>
                    <a href="login" class="btn btn-secondary">Retour</a>
                </div>


            </form>



        </div>
    </div>
</div>

<?php $content_html = ob_get_clean(); ?>