<?php

namespace Omnipay\PaymentExpressCustom\Message;

/**
 * PaymentExpress PxPay Purchase Request
 */
class PxPayPurchaseRequest extends PxPayAuthorizeRequest
{
    protected $action = 'Purchase';
}
