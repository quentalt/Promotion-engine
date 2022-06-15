<?php

namespace App\DTO;

class LowestPriceEnquiry implements LowestPriceEnquiry 
{
    private ?int $productId;
    private ?string $requestLocation;
    private ?string $voucherCode;
    private ?string $requestDate;
    private ?string $promotionName;
    private ?int $promotionId;
    private ?int $price;
    private ?int $discountedPrice;
    private ?int $quantity;

}