<?php

/**
 * A receipt with discount functionality
 */
class MyReceipt extends Receipt implements Discountable
{
	/**
	 * Discount price
	 * @var float 
	 */
	private $discount = 0.0;

	/**
	 * Add item to receipt
	 * @param Priceable $item
	 */
	public function addItem(Priceable $item)
	{
		$this->items[] = $item;
	}

	/**
	 * Set discount price
	 * @param float $amount
	 */
	public function setDiscount($amount)
	{
		$this->discount = $amount;
	}
	
	/**
	 * Get discount
	 * @return float
	 */
	public function getDiscount()
	{
		return $this->discount;
	}
	
	/**
	 * Get discounted price if discount is applied
	 * @return float
	 * @throws Exception
	 */
	public function getDiscounted()
	{
		if($this->discount <= 0){
			throw new Exception('Discount not applied');
		}

		return parent::getTotal() - $this->discount;
	}

	/**
	 * Get total without the discount
	 * @return float Total
	 */
	public function getSubTotal()
	{
		return parent::getTotal();
	}
	
	/**
	 * Get total depending if the discount is applied or not
	 * @return float Total
	 */
	public function getTotal()
	{
		return $this->discount > 0 ? $this->getDiscounted() : parent::getTotal();
	}

	/**
	 * Set items from array
	 * @param array $items
	 */
	public function setItemsFromArray(array $items)
	{
		foreach($items as $item){
			list($name, $currency, $price) = $item;
			$this->addItem (new ReceiptItem($name, $price, $currency));
		}
	}
}
