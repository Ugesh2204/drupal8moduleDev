<?php

namespace Drupal\module_hero;

/**
 * our hero article service class
 */

class HeroArticleService {

    /**
     * Method for getting  Articles, regarding Heroes
     */
    public function getHeroArticles() {
        $articles = ['Hulk is green!', 'Flash is red!'];
        
        return $articles;
    }
}