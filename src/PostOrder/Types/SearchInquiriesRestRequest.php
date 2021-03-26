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
 * @property string $fieldgroups
 * @property string $inquiry_creation_date_range_from
 * @property string $inquiry_creation_date_range_to
 * @property string $inquiry_status
 * @property string $item_id
 * @property string $limit
 * @property string $offset
 * @property string $order_id
 * @property string $sort
 * @property string $transaction_id
 */
class SearchInquiriesRestRequest extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'fieldgroups' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fieldgroups'
        ],
        'inquiry_creation_date_range_from' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiry_creation_date_range_from'
        ],
        'inquiry_creation_date_range_to' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiry_creation_date_range_to'
        ],
        'inquiry_status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiry_status'
        ],
        'item_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item_id'
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'order_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'order_id'
        ],
        'sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sort'
        ],
        'transaction_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transaction_id'
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
