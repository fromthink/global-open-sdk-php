<?php

namespace Fromthink\Antom\Request\dispute;

use Fromthink\Antom\Model\AntomPathConstants;
use Fromthink\Antom\Request\AlipayRequest;

class AlipaySupplyDefenseDocumentRequest extends AlipayRequest
{

    public $disputeId;
    public $disputeEvidence;


    function __construct()
    {
        $this->setPath(AntomPathConstants::SUPPLY_DEFENCE_DOC_PATH);
    }

    /**
     * @return mixed
     */
    public function getDisputeEvidence()
    {
        return $this->disputeEvidence;
    }

    /**
     * @param mixed $disputeEvidence
     */
    public function setDisputeEvidence($disputeEvidence) 
    {
        $this->disputeEvidence = $disputeEvidence;
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