<?php

namespace StrategyPattern\Discount;

/**
 * Class AbstractDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
abstract class AbstractDiscount implements DiscountInterface
{
    /**
     * Size of the discount.
     *
     * @var float
     */
    protected $size;

    public function __construct(float $size)
    {
        $this->size = $size;
    }

    /**
     * @inheritdoc
     */
    abstract public function calculate(float $amount): float;
}