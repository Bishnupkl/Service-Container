<?php


namespace App\OrderDeails;


use App\Billing\BankPaymentGateway;

class OrderDetails
{

    private $paymentGateway;

    public function __construct(BankPaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(2000);
        return [
            'name' => "bishnu",
            "address"=>"butwal"
        ];

    }

}