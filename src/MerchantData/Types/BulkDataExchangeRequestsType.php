<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\MerchantData\Types;

/**
 *
 * @property \SONHH\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType $Header
 * @property \SONHH\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType[] $AddFixedPriceItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\AddItemRequestType[] $AddItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType[] $EndFixedPriceItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\EndItemRequestType[] $EndItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\OrderAckRequestType[] $OrderAckRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType[] $RelistFixedPriceItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\RelistItemRequestType[] $RelistItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType[] $ReviseFixedPriceItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType[] $ReviseInventoryStatusRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\ReviseItemRequestType[] $ReviseItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType[] $SetShipmentTrackingInfoRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType[] $UploadSiteHostedPicturesRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType[] $VerifyAddFixedPriceItemRequest
 * @property \SONHH\eBaySDK\MerchantData\Types\VerifyAddItemRequestType[] $VerifyAddItemRequest
 */
class BulkDataExchangeRequestsType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Header' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Header'
        ],
        'AddFixedPriceItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemRequest'
        ],
        'AddItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\AddItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddItemRequest'
        ],
        'EndFixedPriceItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemRequest'
        ],
        'EndItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\EndItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndItemRequest'
        ],
        'OrderAckRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\OrderAckRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderAckRequest'
        ],
        'RelistFixedPriceItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemRequest'
        ],
        'RelistItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\RelistItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistItemRequest'
        ],
        'ReviseFixedPriceItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemRequest'
        ],
        'ReviseInventoryStatusRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusRequest'
        ],
        'ReviseItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\ReviseItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemRequest'
        ],
        'SetShipmentTrackingInfoRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoRequest'
        ],
        'UploadSiteHostedPicturesRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesRequest'
        ],
        'VerifyAddFixedPriceItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemRequest'
        ],
        'VerifyAddItemRequest' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\VerifyAddItemRequestType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemRequest'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeRequests';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
