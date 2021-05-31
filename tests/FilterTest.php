<?php

namespace App\Test;

use App\Manager\FilterManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FilterTest extends KernelTestCase
{


    public function testSimple() {


        $input = 'whatwedo GmbH';



        $filterManager = new FilterManager();

        // optional: Tokenizer hinzufügen

        // Filter Chain erstellen

        /**
         * filter hinzufügen welche den input verarbeiten
         * - remover
         * - replacer
         * - stemmer
         * - synoyme
         * - booster
         *
         * - Jeder filter hat kann eine Prioriät haben
         * - jeder filter kann konfiguriert werden Array/Object
        */


        $output = $filterManager->process($input);



        $this->assertEquals('whatwedo gmbh', $output);
    }
}