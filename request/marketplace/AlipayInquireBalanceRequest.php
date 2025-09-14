<?php

namespace Fromthink\Antom\Request\marketplace;

use Fromthink\Antom\Model\AntomPathConstants;
use Fromthink\Antom\Request\AlipayRequest;

class AlipayInquireBalanceRequest extends AlipayRequest
{
    public $referenceMerchantId;

    function __construct()
    {
        $this->setPath(AntomPathConstants::MARKETPLACE_INQUIREBALANCE_PATH);
    }

    /**
     * @return mixed
     */
    public function getReferenceMerchantId()
    {
        return $this->referenceMerchantId;
    }

    /**
     * @param mixed $referenceMerchantId
     */
    public function setReferenceMerchantId($referenceMerchantId) 
    {
        $this->referenceMerchantId = $referenceMerchantId;
    }

}