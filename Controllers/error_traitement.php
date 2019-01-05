<?php
switch($_GET['error'])

{

    case '400':

        $error_msg='La syntaxe de la requête est erronée.';

        break;

    case '401':

        $error_msg='Le pseudo ou le mot de passe n\'est pas correct !';

        break;

    case '402':

        $error_msg='Le client doit reformuler sa demande avec les bonnes données de paiement.';

        break;

    case '403':

        $error_msg='Vous n\'avez pas accès à cette ressource !';

        break;

    case '404':

        $error_msg='La page n\'existe pas ou plus !';

        break;

    case '405':

        $error_msg='Méthode non autorisée.';

        break;

    case '500':

        $error_msg='Erreur interne au serveur ou serveur saturé.';

        break;

    case '501':

        $error_msg='Le serveur ne supporte pas le service demandé.';

        break;

    case '502':

        $error_msg='Mauvaise passerelle.';

        break;

    case '503':

        $error_msg=' Service indisponible.';

        break;

    case '504':

        $error_msg='Trop de temps à la réponse.';

        break;

    case '505':

        $error_msg='Version HTTP non supportée.';

        break;

    default:

        $error_msg='Erreur !';

}