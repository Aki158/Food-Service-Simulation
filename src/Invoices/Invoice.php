<?php
namespace Invoices;

class Invoice{
    protected float $finalPrice;
    protected string $orderTime;

    public function __construct(float $finalPrice){
        $this->finalPrice = $finalPrice;
        $this->orderTime = date("D M d,Y G:i");
    }

    public function getFinalPrice(): float{
        return $this->finalPrice;
    }

    public function getOrderTime(): float{
        return $this->orderTime;
    }

    public function printInvoice(){
        echo "----------------------------------\n";
        echo "Date: ".$this->orderTime."\n";
        echo "Final Price:  $".$this->finalPrice."\n";
        echo "----------------------------------\n";
    }
}
