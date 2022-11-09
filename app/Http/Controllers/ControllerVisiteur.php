<?php

namespace App\Http\Controllers;

use App\dao\ServiceVisiteur;
use App\Exceptions\MonException;
use App\metier\Visiteur;
use App\metier\Etat;

class ControllerVisiteur
{
    public function getListeVisiteurVille($)
    {
        $listeFicheFrais = array();
        try {
            $unService = new ServiceVisiteur();
            $response = $unService->getListeVisiteur;
            return json_encode($response);
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return response()->json($erreur, 204);
        }
    }

}
