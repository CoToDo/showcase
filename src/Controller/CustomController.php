<?php
/**
 * Created by PhpStorm.
 * User: sushi
 * Date: 3/27/18
 * Time: 4:15 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomController {

	/**
	 * Say hello to someone
	 *
	 * @param $name
	 * @return Response
	 *
	 * @Route("/hello/{name}", name="say_hello", defaults={"name" = "anonymous"})
	 */
	public function hello($name){
		return new Response("Hello, {$name}!");
	}

	/**
	 * Compute y=2x+10 for given x
	 *
	 * @param $x
	 * @return Response
	 *
	 * @Route("/compute/{x}", name="compute", requirements={"id" = "\d+"})
	 */
	public function compute($x){
		return new Response($x * 2 + 10);
	}
}