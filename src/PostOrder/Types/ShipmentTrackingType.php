<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\PostOrder\Types;

/**
 *
 * @property boolean $active
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $actualDeliveryDate
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $actualShipDate
 * @property string $carrierEnum
 * @property integer $carrierId
 * @property string $carrierName
 * @property string $carrierUsed
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $deliveryDate
 * @property \SONHH\eBaySDK\PostOrder\Enums\TrackingStatusEnum $deliveryStatus
 * @property \SONHH\eBaySDK\PostOrder\Types\ReturnAddressType $destinationAddress
 * @property string $errorCode
 * @property string $labelAvailableUntilDate
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $labelDate
 * @property string $labelId
 * @property boolean $labelPrintExpired
 * @property boolean $labelVoidExpired
 * @property boolean $markAsReceived
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $maxDeliveryEstimate
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $minDeliveryEstimate
 * @property \SONHH\eBaySDK\PostOrder\Types\ReturnAddressType $originAddress
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $shipDate
 * @property string $shipmentId
 * @property string $shippedBy
 * @property \SONHH\eBaySDK\PostOrder\Enums\ShippingMethodEnum $shippingMethod
 * @property string $trackingNumber
 */
class ShipmentTrackingType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'active' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'active'
        ],
        'actualDeliveryDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actualDeliveryDate'
        ],
        'actualShipDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actualShipDate'
        ],
        'carrierEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierEnum'
        ],
        'carrierId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierId'
        ],
        'carrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierName'
        ],
        'carrierUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierUsed'
        ],
        'deliveryDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDate'
        ],
        'deliveryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryStatus'
        ],
        'destinationAddress' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'destinationAddress'
        ],
        'errorCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'errorCode'
        ],
        'labelAvailableUntilDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelAvailableUntilDate'
        ],
        'labelDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelDate'
        ],
        'labelId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelId'
        ],
        'labelPrintExpired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelPrintExpired'
        ],
        'labelVoidExpired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelVoidExpired'
        ],
        'markAsReceived' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'markAsReceived'
        ],
        'maxDeliveryEstimate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxDeliveryEstimate'
        ],
        'minDeliveryEstimate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minDeliveryEstimate'
        ],
        'originAddress' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'originAddress'
        ],
        'shipDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipDate'
        ],
        'shipmentId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipmentId'
        ],
        'shippedBy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippedBy'
        ],
        'shippingMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingMethod'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
