<?php

namespace App\DTO;

interface PromotionEnquiryInterface
{
    public function getProductId(): int;
    public function getForceFails(): int;
}