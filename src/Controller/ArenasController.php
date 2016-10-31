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

    public function fighter(){
      //Afficher le meilleur combatant
      $this->loadModel('Fighters');
      //$combatantMax = $this -> Fighters -> getBestFighter();
      //$this->set('aaa', $combatantMax);

      //Affichage des données du combatant
      //$infoNom = $this-> Fighters -> infosName();
      //$this->set('NomCombatant', $infoNom);

      if ($this->request->is('post')){
        if(isset($this->request->data['createFighter'])){
          $this->Fighter->createCharacter($this->request->data['createFighter']['nom']);
        }
      }

      if ($this->request->is('post')) {
          if(isset($this->request->data['NewLevel'])) {
              $this->Fighter->level_up(1, $this->request->data['NewLevel']['improve']);
          }
      }

      //$this->set('strength', $this->Fighter->get_carac(1, 'skill_strength'));
      //$this->set('sight', $this->Fighter->get_carac(1, 'skill_sight'));
      //$this->set('health', $this->Fighter->get_carac(1, 'skill_health'));
      //$this->set('lvl', $this->Fighter->get_carac(1, 'level'));
      //$this->set('exp', $this->Fighter->get_carac(1, 'xp'));
      //$this->set('raw',$this->Fighter->findById(1));

    }

    public function sight()
    {

    }

    public function diary()
    {
        $this -> loadModel('Events');
        $lastEvents = $this -> Events -> displayEvents();
        $this -> set('lastEventsDisplay', $lastEvents);
    }
  }
