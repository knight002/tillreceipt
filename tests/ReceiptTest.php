<?php

class ReceiptTest extends \PHPUnit_Framework_TestCase
{
	public function testReceiptTotals()
	{
		$receipt = new MyReceipt();
		$receipt->setItemsFromArray(Data::$data1);
		
		$this->assertEquals(4.27, $receipt->getSubTotal());
		$this->assertEquals(4.27, $receipt->getTotal());
		
		//apply a discount
		$receipt->setDiscount(0.50);
		
		$this->assertEquals(4.27, $receipt->getSubTotal());
		$this->assertEquals(3.77, $receipt->getTotal());
	}

	public function testSettingItemsFromArray()
	{
		$receipt = new MyReceipt();
		
		//let's try empty array
		$receipt->setItemsFromArray(array());		
	}
}
