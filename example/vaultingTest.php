<?php

require '../init.php';
use \Fromthink\Antom\Client\DefaultAlipayClient;

const clientId = "";
const merchantPrivateKey = "";
const alipayPublicKey = "";
const gatewayUrl = "";

function createVaultingSession()
{
    $alipayVaultingSessionRequest = new \Fromthink\Antom\Request\vaulting\AlipayVaultingSessionRequest();
    $alipayVaultingSessionRequest->setVaultingRequestId('createSession' . round(microtime(true) * 1000));
    $alipayVaultingSessionRequest->setPaymentMethodType('CARD');
    $alipayVaultingSessionRequest->setVaultingNotificationUrl('http://www.alipay.com');
    $alipayVaultingSessionRequest->setRedirectUrl('http://www.alipay.com');
    $alipayVaultingSessionRequest->setMerchantRegion("BR");

    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipayVaultingSessionRequest);

    echo json_encode($alipayResponse);


}

function vaultPaymentMethod()
{
    $alipayVaultingPaymentMethodRequest = new \Fromthink\Antom\Request\vaulting\AlipayVaultingPaymentMethodRequest();
    $alipayVaultingPaymentMethodRequest->setVaultingRequestId('vaultPaymentMethod' . round(microtime(true) * 1000));
    $alipayVaultingPaymentMethodRequest->setVaultingNotificationUrl('http://www.alipay.com');
    $alipayVaultingPaymentMethodRequest->setRedirectUrl('http://www.alipay.com');
    $alipayVaultingPaymentMethodRequest->setMerchantRegion("BR");

    $paymentMethodDetail = new \Fromthink\Antom\Model\PaymentMethodDetail();
    $paymentMethodDetail->setPaymentMethodType("CARD");

    $cardPaymentMethodDetail = new \Fromthink\Antom\Model\CardPaymentMethodDetail();
    $cardPaymentMethodDetail->setCardNo("4111111111111111");
    $cardPaymentMethodDetail->setBrand(\Model\CardBrand::VISA);
    $address = new \Fromthink\Antom\Model\Address();
    $address->setAddress1("address1");
    $address->setAddress2("address2");
    $address->setCity("zhengzhou");
    $address->setRegion("CN");
    $address->setZipCode("31000");
    $cardPaymentMethodDetail->setBillingAddress($address);
    $userName = new \Fromthink\Antom\Model\UserName();
    $userName->setFirstName("firstName");
    $userName->setLastName("lastName");
    $cardPaymentMethodDetail->setCardholderName($userName);
    $cardPaymentMethodDetail->setExpiryYear("2026");
    $cardPaymentMethodDetail->setExpiryMonth("06");
    $cardPaymentMethodDetail->setCvv("123");

    $paymentMethodDetail->setCard($cardPaymentMethodDetail);
    $alipayVaultingPaymentMethodRequest->setPaymentMethodDetail($paymentMethodDetail);

    $env = new \Fromthink\Antom\Model\Env();
    $env->setTerminalType(\Model\TerminalType::APP);
    $alipayVaultingPaymentMethodRequest->setEnv($env);

    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipayVaultingPaymentMethodRequest);

    echo json_encode($alipayResponse);


}

function inquireVaulting($vaultingRequestId)
{

    $alipayVaultingQueryRequest = new \Fromthink\Antom\Request\vaulting\AlipayVaultingQueryRequest();
    $alipayVaultingQueryRequest->setVaultingRequestId($vaultingRequestId);

    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipayVaultingQueryRequest);

    echo json_encode($alipayResponse);

}

//createVaultingSession();

//vaultPaymentMethod();

inquireVaulting("vaultPaymentMethod1727232429222");

