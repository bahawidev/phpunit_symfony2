<?php

namespace phpunit_symfony\testBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use phpunit_symfony\testBundle\Controller\DefaultController;

class DefaultControllerTest extends WebTestCase {

    public function testIndex() {
        $var = new DefaultController();
        $this->assertEquals(23, $var->somme(10, 13));
        $this->assertEquals(26, $var->somme(10, 13));
    }

}
