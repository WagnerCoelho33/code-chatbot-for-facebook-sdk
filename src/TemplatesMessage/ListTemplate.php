<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\ElementInterface;

class ListTemplate implements TemplateInterface
{
    protected $products = [];
    protected $recipientId;
    protected $orderInfo;
    protected $address;
    protected $summary;
    protected $adjustments;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->buttons[] = $element->get();
    }

    public function setOrderInfo(string $recipient_name, string $order_number, string $currency, string $payment_method, string $order_url, string $timestamp)
    {
        $this->orderInfo = [
            '$recipient_name' => $recipient_name,
            '$order_number' => $order_number,
            '$currency' => $currency,
            '$payment_method' => $payment_method,
            '$order_url' => $order_url,
            '$timestamp' => $timestamp,
        ];
    }

    public function setAddress (string $street_1, string $street_2, string $city, string $postal_code, string $state, string $country)
    {
        $this->address = [
            'street_1' => $street_1,
            'street_2' => $street_2,
            'city' => $city,
            'postal_code' => $postal_code,
            'state' => $state,
            'country' => $country
        ];
    }

    public function setAdjustments (string $name, float $amount)
    {
        $this->adjustments = [
            'name' => $name,
            'amount' => $amount
        ];
    }

    public function setSummary (float $total_cost, float $subtotal = null, float $shipping_cost = null, float $total_tax)
    {
        $this->summary = [
            'subtotal' => $subtotal,
            'shipping_cost' => $shipping_cost,
            'total_tax' => $total_tax,
            'total_cost' => $total_cost
        ];
    }


    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId 
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'elements' => $this->buttons
                    ]
                ]
            ]
        ];

    }

}