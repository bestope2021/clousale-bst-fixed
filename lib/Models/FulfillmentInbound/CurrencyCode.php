<?php
/**
 * CurrencyCode.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * CurrencyCode Class Doc Comment.
 *

 * @description The currency code.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CurrencyCode
{
    /**
     * Possible values of this enum.
     */
    const USD = 'USD';//美国
    const GBP = 'GBP';//英国
    const EUR = 'EUR';//欧洲 德国 西班牙 意大利 法国
    const CAD = 'CAD';//加拿大
    const AUD = 'AUD';//澳洲
    const JPY = 'JPY';//日元
    const PLN = 'PLN';//波兰兹罗提
    const CZK = 'CZK';//捷克
    const IDR = 'IDR';//印度尼西亚币
    const SGD = 'SGD';//新加坡元;
    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USD,
            self::GBP,
            self::EUR,
            self::CAD,
            self::AUD,
            self::JPY,
            self::PLN,
            self::CZK,
            self::IDR,
            self::SGD,
        ];
    }
}
