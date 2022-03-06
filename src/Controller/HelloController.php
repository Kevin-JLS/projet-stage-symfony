<?php 

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

      protected $calculator;

      public function __construct(Calculator $calculator)
      {
            $this->calculator = $calculator;
      }

      /**
       * @Route("/hello/{name?world}", name="hello")
       */
      public function hello(Request $request, $name, LoggerInterface $logger, Slugify $slugify) {
            
            dump($slugify->slugify("Hello World"));
            
            $logger->error("Mon message de log");

            $tva = $this->calculator->calcul(56);
            dump($tva);

            return new Response("Hello $name");
      }
}