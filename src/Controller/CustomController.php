<?php
/**
 * Created by PhpStorm.
 * User: sushi
 * Date: 3/27/18
 * Time: 4:15 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class CustomController {

	public function hello($name){
		return new Response("Hello, {$name}!");
	}
}