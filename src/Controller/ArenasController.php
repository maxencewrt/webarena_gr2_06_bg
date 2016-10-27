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
        $this->set('myname', "Julien Falconnet");
        
        //$this->loadModel('Fighters');
        //$figterlist=$this->Fighters->find('all');
        //pr($figterlist->toArray());
    }
        
    public function login()
    {
        $this->loadModel('Fighters');
        $combatantMax = $this -> Fighters -> getBestFighter();
        $this->set('aaa', $combatantMax);
        //$figterlistLevel=$this->Fighters->order('level');
    }
    
    public function fighter()
    {
 
    }
    
    public function sight()
    {
 
    }
    
    public function diary()
    {
 
    }
    
}