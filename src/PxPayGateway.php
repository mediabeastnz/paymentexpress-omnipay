<?php

namespace Omnipay\PaymentExpressCustom;

use Omnipay\Common\AbstractGateway;
use Omnipay\PaymentExpressCustom\Message\PxPayAuthorizeRequest;
use Omnipay\PaymentExpressCustom\Message\PxPayCompleteAuthorizeRequest;
use Omnipay\PaymentExpressCustom\Message\PxPayPurchaseRequest;

/**
 * DPS PaymentExpress PxPay Gateway
 */
class PxPayGateway extends AbstractGateway
{
    public function getName()
    {
        return 'PaymentExpress PxPay';
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
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPayAuthorizeRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPayCompleteAuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPayPurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->completeAuthorize($parameters);
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PaymentExpressCustom\Message\PxPayCreateCardRequest', $parameters);
    }

    public function completeCreateCard(array $parameters = array())
    {
        return $this->completeAuthorize($parameters);
    }
}
