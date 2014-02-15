<?php

namespace phpunit_symfony\testBundle\Controller;

require 'C:\wamp\www\phpunit_symfony\app\autoload.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Process\Process;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {

        return $this->render('testBundle:Default:index.html.twig');
    }

    public function ajaxAction() {

        $file = sys_get_temp_dir() . '/output.txt';
        header('Content-Type: application/json');
        $handle = fopen($file, 'w+');
        defined('RACINE_PATH') || define('RACINE_PATH', realpath(dirname(__FILE__) . '/../../../../'));

        $process = new Process('phpunit -c ' . RACINE_PATH . '\app\phpunit.xml ' . RACINE_PATH . '\src\phpunit_symfony\testBundle');
        $process->run(function ($type, $buffer) use($handle) {
            fwrite($handle, nl2br($buffer));
        });

        fclose($handle);
        return new Response(json_encode(file_get_contents($file)));
    }

    public function somme($a, $b) {
        return $a + $b;
    }

}
