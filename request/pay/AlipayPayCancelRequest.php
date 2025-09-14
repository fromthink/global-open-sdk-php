<?php

namespace \Fromthink\Antom\Request\pay;

use \Fromthink\Antom\Model\AntomPathConstants;
use \Fromthink\Antom\Request\AlipayRequest;

class AlipayPayCancelRequest extends AlipayRequest
{

    public $paymentId;
    public $paymentRequestId;

    public $merchantAccountId;


    function __construct()
    {
        $this->setPath(AntomPathConstants::CANCEL_PATH);
    }


    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestId()
    {
        return $this->paymentRequestId;
    }

    /**
     * @param mixed $paymentRequestId
     */
    public function setPaymentRequestId($paymentRequestId)
    {
        $this->paymentRequestId = $paymentRequestId;
    }

    /**
     * @return mixed
     */
    public function getMerchantAccountId()
    {
        return $this->merchantAccountId;
    }

    /**
     * @param mixed $merchantAccountId
     */
    public function setMerchantAccountId($merchantAccountId)
    {
        $this->merchantAccountId = $merchantAccountId;
    }

}