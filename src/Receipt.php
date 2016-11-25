<?php

/**
 * A receipt
 */
abstract class Receipt implements Summable
{
	/**
	 * Items
	 * @var array 
	 */
	protected $items = array();

	/**
	 * Sum of all prices
	 * @var float
	 */
	protected $total = null;
	
	/**
	 * Add a pricable item. Force implementing method to use Pricable
	 */
	abstract public function addItem(Priceable $item);

	/**
	 * Get items
	 * @return array
	 */
	public function getItems()
	{
		return $this->items;
	}

	/**
	 * Calculate total
	 * @return float
	 */
	public function getTotal()
	{
		$this->total = 0.0;
		foreach ($this->items as $item){
			$this->total += $item->getPrice();
		}
		return $this->total;
	}
}
