<?php
namespace Services;

class ProductManage{
    private $products;

    public function __contruct(){
        $this->products=[];
    }

    public function add($product){
        $this->products[]=$product;
    }

    public function getProducts(){
        return $this->products;
    }


}
