<?php

namespace StrategyPattern\Product;

use StrategyPattern\Discount\DiscountInterface;

/**
 * Class Product
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Product implements ProductInterface
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $price;

    public function __construct(string $title, float $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @inheritdoc
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * @inheritdoc
     */
    public function price(): float
    {
        return $this->price;
    }

    /**
     * @inheritdoc
     */
    public function applyDiscount(DiscountInterface $discount)
    {
        $this->price -= $discount->calculate($this->price);
    }
}