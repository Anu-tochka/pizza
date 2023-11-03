<?php

namespace Pizza\Pizza\Controller;//\UserController;//App\Controller;

//use Pizza\Pizza\Entity\Order;

class UserController extends AbstractController
{
    public function index()
    {
     //   $order = new Order();
		return $this->renderTemplate( __DIR__ . '\..\public\user.html');
    }
		
}
