<?php

require '../init.php';
use Fromthink\Antom\Client\DefaultAlipayClient;

const clientId = "";
const merchantPrivateKey = "";
const alipayPublicKey = "";
const gatewayUrl = "";

function SubscriptionsCreate()
{
    $alipaySubscriptionCreateRequest = new Fromthink\Antom\Request\subscription\AlipaySubscriptionCreateRequest();
    $alipaySubscriptionCreateRequest->setSubscriptionRequestId('SubscriptionCreate_' . round(microtime(true) * 1000));
    $env = new Fromthink\Antom\Model\Env();
    $env->setClientIp("1.*.*.*");
    $env->setTerminalType(\Model\TerminalType::WEB);
    $env->setOsType(\Model\OsType::ANDROID);
    $alipaySubscriptionCreateRequest->setEnv($env);

    $amount = new Fromthink\Antom\Model\Amount();
    $amount->setValue("100");
    $amount->setCurrency("HKD");
    $alipaySubscriptionCreateRequest->setPaymentAmount($amount);

    $alipaySubscriptionCreateRequest->setPaymentNotificationUrl("http://www.alipay.com");

    $periodRule = new Fromthink\Antom\Model\PeriodRule();
    $periodRule->setPeriodType(\Model\PeriodType::MONTH);
    $periodRule->setPeriodCount(1);
    $alipaySubscriptionCreateRequest->setPeriodRule($periodRule);

    $settlementStrategy = new Fromthink\Antom\Model\SettlementStrategy();
    $settlementStrategy->setSettlementCurrency("USD");
    $alipaySubscriptionCreateRequest->setSettlementStrategy($settlementStrategy);

    $alipaySubscriptionCreateRequest->setSubscriptionDescription("SubscriptionCreate");
    $alipaySubscriptionCreateRequest->setSubscriptionStartTime("2024-09-25T11:01:01+08:00");
    $alipaySubscriptionCreateRequest->setSubscriptionEndTime("2024-09-26T11:01:01+08:00");
    $alipaySubscriptionCreateRequest->setSubscriptionExpiryTime("2024-09-27T11:01:01+08:00");
    $alipaySubscriptionCreateRequest->setPaymentNotificationUrl("http://www.alipay.com");

    $orderInfo = new Fromthink\Antom\Model\OrderInfo();
    $amount1 = new Fromthink\Antom\Model\Amount();
    $amount1->setValue("100");
    $amount1->setCurrency("HKD");
    $orderInfo->setOrderAmount($amount1);
    $alipaySubscriptionCreateRequest->setOrderInfo($orderInfo);

    $paymentMethod = new Fromthink\Antom\Model\PaymentMethod();
    $paymentMethod->setPaymentMethodType(\Model\WalletPaymentMethodType::ALIPAY_HK);
    $alipaySubscriptionCreateRequest->setPaymentMethod($paymentMethod);

    
    $alipaySubscriptionCreateRequest->setSubscriptionRedirectUrl("http://www.alipay.com");
    $alipaySubscriptionCreateRequest->setSubscriptionNotificationUrl("http://www.alipay.com");

    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipaySubscriptionCreateRequest);

    echo json_encode($alipayResponse);


}

function SubscriptionsChange($subscriptionId)
{
    $alipaySubscriptionChangeRequest = new Fromthink\Antom\Request\subscription\AlipaySubscriptionChangeRequest();
    $alipaySubscriptionChangeRequest->setSubscriptionId($subscriptionId);
    $alipaySubscriptionChangeRequest->setSubscriptionChangeRequestId('SubscriptionChange_' . round(microtime(true) * 1000));

    $amount = new Fromthink\Antom\Model\Amount();
    $amount->setValue("100");
    $amount->setCurrency("HKD");
    $alipaySubscriptionChangeRequest->setPaymentAmountDifference($amount);
    $alipaySubscriptionChangeRequest->setPaymentAmount($amount);

    $periodRule = new Fromthink\Antom\Model\PeriodRule();
    $periodRule->setPeriodType(\Model\PeriodType::MONTH);
    $periodRule->setPeriodCount(1);
    $alipaySubscriptionChangeRequest->setPeriodRule($periodRule);


    $alipaySubscriptionChangeRequest->setSubscriptionStartTime("2024-09-24T12:01:01+08:00");
    $alipaySubscriptionChangeRequest->setSubscriptionEndTime("2024-09-28T12:01:01+08:00");

    $orderInfo = new Fromthink\Antom\Model\OrderInfo();
    $amount1 = new Fromthink\Antom\Model\Amount();
    $amount1->setValue("100");
    $amount1->setCurrency("BRL");
    $orderInfo->setOrderAmount($amount1);
    $alipaySubscriptionChangeRequest->setOrderInfo($orderInfo);
    
    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipaySubscriptionChangeRequest);

    echo json_encode($alipayResponse);
    
}

function subscriptionCancel($subscriptionId)
{
    $alipaySubscriptionCancelRequest = new Fromthink\Antom\Request\subscription\AlipaySubscriptionCancelRequest();
    $alipaySubscriptionCancelRequest->setSubscriptionId($subscriptionId);
    $alipaySubscriptionCancelRequest->setCancellationType(\Model\CancellationType::CANCEL);

    $alipayClient = new DefaultAlipayClient("https://open-sea-global.alipay.com", merchantPrivateKey, alipayPublicKey, clientId);
    $alipayResponse = $alipayClient->execute($alipaySubscriptionCancelRequest);

    echo json_encode($alipayResponse);
}

//SubscriptionsCreate();

//SubscriptionsChange("202409251900000000000001J0000009949");

subscriptionCancel("202409251900000000000001J0000009949");