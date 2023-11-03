<?php

namespace Pizza\Pizza\Controller;//\UserController;//App\Controller;

use Pizza\Pizza\Entity\Order;

class UserController
{
    public function index()
    {
        $orders = new Order();
		return $this->render('base.html.twig');
    }
		
}
