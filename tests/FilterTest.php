<?php

namespace App\Test;

use App\Manager\FilterManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FilterTest extends KernelTestCase
{


    public function testSimple() {


        $input = 'whatwedo GmbH';



        $filterManager = new FilterManager();

        // Tokenizer hinzufügen

        // Filter Chain erstellen


        /**
         * filter hinzufügen welche den input verarbeiten
         *
         * Bsp:
         * https://solr.apache.org/guide/6_6/filter-descriptions.html
         *
         * - case insensitive
         * - remover
         * - replacer
         * - deduplicator
         * - stemmer
         * - synoyme
         * - booster
         *
         * - Jeder Filter keiner bestimmten liste hinzugefügt wreden
         * - Jeder filter hat kann eine Prioriät haben
         * - jeder filter kann konfiguriert werden Array/Object
         *   - bsp. liste mit search/replace
         *   - case insensitive
         *   - path's
         *   - url's
        */


        $output = $filterManager->process($input, 'Liste1');

        $output = $filterManager->process($output, 'Liste2');



        $this->assertEquals('whatwedo gmbh', $output);
    }
}