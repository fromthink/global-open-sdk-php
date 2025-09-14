<?php

namespace Fromthink\Antom\Request\pay;

use \Fromthink\Antom\Model\AntomPathConstants;
use \Fromthink\Antom\Request\AlipayRequest;

class AlipaySyncArrearRequest extends  AlipayRequest
{
    public $paymentId;
    public $paymentRequestId;

    function __construct()
    {
        $this->setPath(AntomPathConstants::SYNC_ARREAR_PATH);
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




}