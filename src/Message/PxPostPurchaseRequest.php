<?php

namespace Omnipay\PaymentExpressCustom\Message;

/**
 * PaymentExpress PxPost Purchase Request
 */
class PxPostPurchaseRequest extends PxPostAuthorizeRequest
{
    protected $action = 'Purchase';
}
