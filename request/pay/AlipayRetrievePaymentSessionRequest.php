<?php

namespace \Fromthink\Antom\Request\pay;

use \Fromthink\Antom\Model\AntomPathConstants;
use \Fromthink\Antom\Request\AlipayRequest;

class AlipayRetrievePaymentSessionRequest extends AlipayRequest
{
    public $paymentRequestId;

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

    function __construct()
    {
        $this->setPath(AntomPathConstants::RETRIEVE_PATH);
    }
}