<?php

namespace Fromthink\Antom\Request\dispute;

use Fromthink\Antom\Model\AntomPathConstants;
use Fromthink\Antom\Request\AlipayRequest;

class AlipayAcceptDisputeRequest extends  AlipayRequest
{
    public $disputeId;


    function __construct()
    {
        $this->setPath(AntomPathConstants::ACCEPT_DISPUTE_PATH);
    }

    /**
     * @return mixed
     */
    public function getDisputeId()
    {
        return $this->disputeId;
    }

    /**
     * @param mixed $disputeId
     */
    public function setDisputeId($disputeId) 
    {
        $this->disputeId = $disputeId;
    }



}