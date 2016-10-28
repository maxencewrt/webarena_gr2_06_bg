<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;

/**
 * Description of ArenasController
 *
 * @author Kevin
 */

class ArenasController extends AppController
{
    public function index()
    {
            // die('test');
        $this->set('myname', "Inconnu");

        //$this->loadModel('Fighters');
        //$figterlist=$this->Fighters->find('all');
        //pr($figterlist->toArray());
    }

    public function login()
    {

    }

    public function fighter()
    {
      //Afficher le meilleur combatant
      $this->loadModel('Fighters');
      //$combatantMax = $this -> Fighters -> getBestFighter();
      //$this->set('aaa', $combatantMax);

      //Affichage des données du combatant
      $infoNom = $this-> Fighters -> infosName();
      $this->set('NomCombatant', $infoNom);

    }

    public function sight()
    {

    }

    public function diary()
    {

    }

}
