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
      $message="</br> Veuillez vous connecter";
      if($this->request->is('post')){
        $data= $this->request->data;
        $this->loadModel('Players');
        $joueur=$this->Players->find('all')->where(['Players.email' => $data['userName']]);
        $joueur = $joueur->first();
        if($joueur['password'] == $data['password'] =! null AND $joueur['email'] == $data['userName'] =! null ){
          $message="Connexion réussie";
        }
        else{
            $message="Identifiants incorrects";
          }
        }
        $this->set('message',$message);
      }

      public function newlogin()
      {
        // Creation nouveau  joueur
        $this->loadModel('Players');
        $this->set('player_id', $this->request->session()->read('Players.id'));
        $player = $this->Players->newEntity();

        if ($this->request->is('post')) {
          $player = $this->Players->patchEntity($player, $this->request->data);
          if ($this->Players->save($player)) {
            $this->Flash->success(__('Nouveau compte crée'));
          }
          else{
          $this->Flash->error(__('Impossible de créer un compte'));
        }
        $this->set('player', $player);
      }
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
