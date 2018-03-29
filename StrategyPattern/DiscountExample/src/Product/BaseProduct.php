<?php

namespace StrategyPattern\DiscountExample\Product;

use StrategyPattern\DiscountExample\Discount\{
    AbstractDiscount, DiscountableInterface
};

/**
 * Class BaseProduct
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class BaseProduct implements SaleableInterface, DiscountableInterface
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
    public function applyDiscount(AbstractDiscount $discount)
    {
        $this->price -= $discount->calculate($this->price);
    }
}
