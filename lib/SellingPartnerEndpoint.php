<?php

namespace ClouSale\AmazonSellingPartnerAPI;

class SellingPartnerEndpoint
{
    public static $EUROPE = 'https://sellingpartnerapi-eu.amazon.com';
    public static $CN=YII_ENV=='dev'?'https://sandbox.shippingapi.amazon.cn':'https://shippingapi.amazon.cn';
    public static $FAR_EAST = 'https://sellingpartnerapi-fe.amazon.com';
    public static $NORTH_AMERICA = 'https://sellingpartnerapi-na.amazon.com';
}
