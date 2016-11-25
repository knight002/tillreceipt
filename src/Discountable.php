<?php

/**
 * Discountable interface
 */
interface Discountable
{
	public function setDiscount($amount);
	
	public function getDiscounted();
}
