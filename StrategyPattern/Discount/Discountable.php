<?php

namespace StrategyPattern\Discount;

/**
 * Interface Discountable
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface Discountable
{
    /**
     * Apply the discount to the subject.
     *
     * @param DiscountInterface $discount
     */
    public function applyDiscount(DiscountInterface $discount);
}