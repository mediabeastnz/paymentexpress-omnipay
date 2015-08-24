<?php

namespace Omnipay\PaymentExpressCustom\Message;

/**
 * PaymentExpress PxPost Refund Request
 */
class PxPostRefundRequest extends PxPostCaptureRequest
{
    protected $action = 'Refund';
}
