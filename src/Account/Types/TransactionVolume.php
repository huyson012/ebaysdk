<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Account\Types;

/**
 *
 * @property string $firstOrderDate
 * @property \SONHH\eBaySDK\Account\Types\TransactionSnapshot $transactionSnapshots
 */
class TransactionVolume extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'firstOrderDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'firstOrderDate'
        ],
        'transactionSnapshots' => [
            'type' => 'SONHH\eBaySDK\Account\Types\TransactionSnapshot',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionSnapshots'
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
