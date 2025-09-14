<?php

namespace Fromthink\Antom\Request\auth;

use \Fromthink\Antom\Model\AntomPathConstants;
use \Fromthink\Antom\Request\AlipayRequest;

class AlipayAuthQueryTokenRequest extends AlipayRequest
{
    public $accessToken;

    function __construct()
    {
        $this->setPath(AntomPathConstants::AUTH_QUERY_PATH);
    }


    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

}