<?php
///Jobayed Rana
class Product{
    private $id;
    private $name;
    private $price;
    private $formatted; // Optional
    public function __construct($idNumber=1,$fullNmae="Jobayed Rana",$totalPrice=98.473992){
        $this->id=$idNumber;
        $this->name=$fullNmae;
        $this->price=$totalPrice;
    }
    public function getFormattedAmount(){
      
        // first Option 
        return "$".number_format($this->price,2,".",",");

        //  // second Option
        //  // $this->formatted=number_format($this->price,2,".",",");
        //  // return $this->formatted;
    }
    public function showDetails(){
        echo "Product Details \n";
        echo "Id : ".$this->id."\n";
        echo "Name : {$this->name} \n";
        echo "Price : {$this->getFormattedAmount()}\n";
    }
}
$productDetails=new Product(1, 'T-shirt', 19.99);
$productDetails->showDetails();




?>