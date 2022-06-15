<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends AbstractController
{
    
    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: 'POST')]

     
    public function lowestPrice(Request $request, int $id): Response
    {
    
        if($request->headers->has('force_fails')) {
            
            return new JsonResponse(['error' => 'forced failure'],
        $request->headers->get('force_fails'));
        }

        

        return new JsonResponse([
            "quality" => 5,
            "request_location" => "UK",
            "voucher_code" => "OU812",
            "request_date" => "2022-04-04",
            "product_id"=> $id,
            "price" => 100,
            "promotion_price" => 50,
            "promotion_id"  => 3,
            "promotion_name" => "Fucking Promotion",

    ],200);
    }

    #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]

    public function promotions() {
        
    }
}
