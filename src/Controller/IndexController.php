<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): JsonResponse
    {
        return $this->json(['Hello']);
    }
}