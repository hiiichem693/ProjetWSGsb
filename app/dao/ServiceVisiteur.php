<?php

namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;

class ServiceVisiteur
{
    public static function getListeVisiteurVille($villeVisiteur)
    {
        try {
            $response = DB::table('visiteur')
                ->select('id_visiteur', 'nom_visiteur')
                ->join('etat', 'frais.id_etat', '=', 'etat.id_etat')
                ->where('ville_visiteur', '=', $villeVisiteur)
                ->orderBy('id_frais')
                ->get();
            return $response;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }
}
