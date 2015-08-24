<?php

namespace Omnipay\PaymentExpressCustom;

use Omnipay\Common\AbstractGateway;
use Omnipay\PaymentExpressCustom\Message\PxPostAuthorizeRequest;
use Omnipay\PaymentExpressCustom\Message\PxPostCaptureRequest;
use Omnipay\PaymentExpressCustom\Message\PxPostPurchaseRequest;
use Omnipay\PaymentExpressCustom\Message\PxPostRefundRequest;

/**
 * DPS PaymentExpress PxPost Gateway
 */
class PxPostGateway extends AbstractGateway
{
    public function getName()
    {
        return 'PaymentExpress PxPost';
    }

    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
        );
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPostAuthorizeRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPostCaptureRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPostPurchaseRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPostRefundRequest', $parameters);
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPostCreateCardRequest', $parameters);
    }
}
