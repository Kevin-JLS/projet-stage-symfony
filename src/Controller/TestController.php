<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
    public function index() {
        dd("Ca fonctionne");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function test(Request $request, $age) {    
        // $age c'est le parametre qu'on a défini dans routes.yaml dans le path /test/{age}
        // dd($request) pour afficher le DumperDie et voir quelles infos peuvent être récup.
        return new Response("Vous avez $age ans");
    }
}