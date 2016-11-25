<?php

/**
 * A pricable item
 */
abstract class Item implements Priceable
{
	/**
	 * Name of the item
	 * @var String 
	 */
	private $name = null;
	
	/**
	 * Price
	 * @var float 
	 */
	private $price = null;
	
	/**
	 * Currency
	 * @var mixed. String or a complex type 
	 */
	private $currency = null;

	public function __construct($name, $price, $currency)
	{
		//make sure price isn't negative
		if($price < 0){
			throw new InvalidArgumentException('price must be positive');
		}
		$this->name = $name;
		$this->price = $price;
		$this->currency = $currency;
	}
	
	/**
	 * Price
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
	}
	
	/**
	 * Currency
	 * @return mixed
	 */
	public function getCurrency()
	{
		return $this->currency;
	}
	
	/**
	 * Name
	 * @return string
	 */
	protected function getName()
	{
		return $this->name;
	}
}
