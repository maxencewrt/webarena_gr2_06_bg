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

    public function forgottenpassword() {
    if ($this->request->is('post')) {
        if (isset($this->request->data['ForgottenPassword'])) {
            if ($this->Player->sendPassword($this->request->data['ForgottenPassword']['email'])) {
                $this->Session->setFlash("An email has been sent", 'notif');
                $this->redirect(array('action' => 'login'));
                } else {
                   // $this->Flash->set("Wrong email adress");
                }
            }
        }
      }

    public function changepassword() {
        $messagechangemdp="</br> Aucun changement effectué";
        if($this->request->is('post')){
        $data= $this->request->data;
        $this->loadModel('Players');
        $user = $this->Players->find('all')->where(['Players.email' => $data['userName']]);
        $user = $user->first();
        $this->set('email', $user);
          if ($user['password']==$data['ancienMDP']){
            $user['password']==$data['newMPD'];
            $messagechangemdp="mot de passe modifié";
          }
          else {
            $messagechangemdp="Le nouveau mot de passe doit être différent de l'ancien";
          }
        }
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

    public function newfighter()
    {
      // Creation nouveau combatant
      $this->loadModel('Fighters');
      $this->set('fighter_id', $this->request->session()->read('Fighters.id'));
      $fighter = $this->Fighters->newEntity();

      if ($this->request->is('post')) {
        $fighter = $this->Fighters->patchEntity($fighter, $this->request->data);
        if ($this->Fighters->save($fighter)) {
          $this->Flash->success(__('Nouveau combatant crée'));
        }
        else{
        $this->Flash->error(__('Impossible de créer un nouveau combatant'));
      }
      $this->set('fighter', $fighter);
    }
    }

    public function newGuilde()
    {
    // Creation d'un nouvelle Guilde
    $messageGuilde="null";
    $this->loadModel('Guilds');
    $this->set('id', $this->request->session()->read('Guilds.id'));
    $guild = $this->Guilds->newEntity();

    if ($this->request->is('post')) {
      $guild = $this->Guilds->patchEntity($guild, $this->request->data);
      if ($this->Guilds->save($guild)) {
        $messageGuilde="Nouvelle guilde crée";
      }
      else{
        $messageGuilde="Impossible de créer une nouvelle Guilde";
    }
    $this->set('Guilds', $guild);
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
