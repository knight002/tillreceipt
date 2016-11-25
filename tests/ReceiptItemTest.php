<?php

class ReceiptItemTest extends \PHPUnit_Framework_TestCase
{
	public function testDifferentPrices()
	{		
		//test normal price
		$item = new ReceiptItem('name', 5.30, "GBP");
		$this->assertInstanceOf('ReceiptItem', $item);

		//test 0 price
		$item = new ReceiptItem('name', 0, "GBP");
		$this->assertInstanceOf('Item', $item);

		//test negative price
		$this->setExpectedException(InvalidArgumentException::class);
		$item = new ReceiptItem('name', -5.30, "GBP");
	}
}
