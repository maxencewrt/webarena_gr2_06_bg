<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class FightersTable extends Table
{
     function test(){
        return "ok";
    }

    function getBestFighter(){
        $resultat = $this->find("list")->order(['level' => 'DESC']);
        echo($resultat->first());
    }
    function infosName(){
        $recupNom = $this->find("list")->order(['name' => 'DESC']);
        echo($recupNom->first());
    }
    function infosLevel(){
        $recupLevel = $this->find("list")->order(['level' => 'DESC']);
        echo($recupLevel->first());
    }
    function infosForce(){
        $recupForce = $this->find("list")->order(['force' => 'DESC']);
        echo($recupForce->first());
    }
    function infosVision(){
        $recupVision = $this->find("list")->order(['vision' => 'DESC']);
        echo($recupVision->first());
    }
}
