<?php

namespace Fromthink\Antom\Request\pay;

use Fromthink\Antom\Model\AntomPathConstants;
use Fromthink\Antom\Request\AlipayRequest;

class AlipayDeviceCertificateRequest extends AlipayRequest
{

    public $devicePublicKey;

    public $deviceRequestId;


    function __construct()
    {
        $this->setPath(AntomPathConstants::CREATE_DEVICE_CERTIFICATE_PATH);
    }

    /**
     * @return mixed
     */
    public function getDevicePublicKey()
    {
        return $this->devicePublicKey;
    }

    /**
     * @param mixed $devicePublicKey
     */
    public function setDevicePublicKey($devicePublicKey) 
    {
        $this->devicePublicKey = $devicePublicKey;
    }

    /**
     * @return mixed
     */
    public function getDeviceRequestId()
    {
        return $this->deviceRequestId;
    }

    /**
     * @param mixed $deviceRequestId
     */
    public function setDeviceRequestId($deviceRequestId) 
    {
        $this->deviceRequestId = $deviceRequestId;
    }


}