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

    public function createCharacter($name){
        $coordinate_x = rand(0,14);
        $coordinate_y = rand(0,10);

        while($this->isFighterAlreadyInCase($coordinate_x,$coordinate_y)){
          $coordinate_x = rand(0,14);
          $coordinate_y = rand(0,10);
        }

        $newFighter = array(
                        'Fighter' => array(
                        'name' => $name,
                        'coordinate_x' => $coordinate_x,
                        'coordinate_y' => $coordinate_y,
                        'level' => 0,
                        'xp' => 0,
                        'skill_sight' => 0,
                        'skill_strength' => 1,
                        'current_health' => 3
                        )
      );
      $this->save($newFighter);
    }

    public function get_carac($fighterId, $carac) {
        $datas = $this->read(null, $fighterId);

        switch($carac) {
            case 'skill_health':
                $carac_value = $datas['Fighter']['skill_health'];
                break;
            case 'skill_sight':
                $carac_value = $datas['Fighter']['skill_sight'];
                break;
            case 'skill_strength':
                $carac_value = $datas['Fighter']['skill_strength'];
                break;
            case 'xp':
                $carac_value = $datas['Fighter']['xp'];
                break;
            case 'level':
                $carac_value = $datas['Fighter']['level'];
                break;
            case 'current_health':
                $carac_value = $datas['Fighter']['current_health'];
                break;
            case 'coordinate_x':
                $carac_value = $datas['Fighter']['coordinate_x'];
                break;
            case 'coordinate_y':
                $carac_value = $datas['Fighter']['coordinate_y'];
                break;
            case 'name':
                $carac_value = $datas['Fighter']['name'];
                break;
            default:
                return -1;
        }
        return $carac_value;
    }

}
