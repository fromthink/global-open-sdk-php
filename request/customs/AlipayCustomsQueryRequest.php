<?php


namespace Fromthink\Antom\Request\customs;

use Fromthink\Antom\Model\AntomPathConstants;
use Fromthink\Antom\Request\AlipayRequest;

class AlipayCustomsQueryRequest extends AlipayRequest
{

    public $declarationRequestIds;


    function __construct()
    {
        $this->setPath(AntomPathConstants::INQUIRY_DECLARE_PATH);
    }


    /**
     * @return mixed
     */
    public function getDeclarationRequestIds()
    {
        return $this->declarationRequestIds;
    }

    /**
     * @param mixed $declarationRequestIds
     */
    public function setDeclarationRequestIds($declarationRequestIds) 
    {
        $this->declarationRequestIds = $declarationRequestIds;
    }


}