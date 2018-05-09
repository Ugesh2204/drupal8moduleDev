<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * This is our hero controller
 */
class HeroController extends ControllerBase{

    public function heroList() {
        /*Turn into array */
        $heroes = [

            ['name' => 'Hulk'],
            ['name' => 'Thor'],
            ['name' => 'Iron Man'],
            ['name' => 'Wolverine'],
            ['name' => 'Captain America']
            
        ];

        /*Let concatonate them so that we could print */

        $ourHeroes = '';
        foreach($heroes as $hero) {
            $ourHeroes .= '<li>' .$hero['name'] . '</li>';
        }

        /* Render an Array */

        return [
            '#type' => 'markup',
            '#markup' => '<h4>' . $this->t('These are the best voted heroes') .'<h4><ol>'. $ourHeroes . '</ol>',

        ];
    }
}