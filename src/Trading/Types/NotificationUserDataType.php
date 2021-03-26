<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Trading\Types;

/**
 *
 * @property \SONHH\eBaySDK\Trading\Types\SMSSubscriptionType $SMSSubscription
 * @property \SONHH\eBaySDK\Trading\Types\SummaryEventScheduleType[] $SummarySchedule
 * @property string $ExternalUserData
 */
class NotificationUserDataType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SMSSubscription' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SMSSubscriptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SMSSubscription'
        ],
        'SummarySchedule' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SummaryEventScheduleType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SummarySchedule'
        ],
        'ExternalUserData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
