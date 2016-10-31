<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class EventsTable extends Table
{
    function displayEvents(){
        $resultat = $this -> find("all");
        echo($resultat -> first());
    } 
}

