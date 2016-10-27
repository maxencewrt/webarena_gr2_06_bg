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
}