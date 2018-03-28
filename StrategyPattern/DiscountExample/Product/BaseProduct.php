<?php

namespace StrategyPattern\DiscountExample\Product;

use StrategyPattern\DiscountExample\Discount\{
    Discountable,
    Discount
};

/**
 * Class BaseProduct
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class BaseProduct implements Saleable, Discountable
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
    public function applyDiscount(Discount $discount)
    {
        $this->price -= $discount->calculate($this->price);
    }
}