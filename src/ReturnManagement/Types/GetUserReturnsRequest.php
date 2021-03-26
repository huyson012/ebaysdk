<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \SONHH\eBaySDK\ReturnManagement\Types\ItemFilterType $itemFilter
 * @property string $orderId
 * @property \SONHH\eBaySDK\ReturnManagement\Types\DateRangeFilterType $creationDateRangeFilter
 * @property \SONHH\eBaySDK\ReturnManagement\Types\ReturnStatusFilterType $ReturnStatusFilter
 * @property \SONHH\eBaySDK\ReturnManagement\Types\UserFilterType $otherUserFilter
 * @property \SONHH\eBaySDK\ReturnManagement\Types\PaginationInput $paginationInput
 * @property \SONHH\eBaySDK\ReturnManagement\Enums\ReturnSortType $sortType
 * @property \SONHH\eBaySDK\ReturnManagement\Enums\ReturnSortOrderType $sortOrderType
 */
class GetUserReturnsRequest extends \SONHH\eBaySDK\ReturnManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemFilter' => [
            'type' => 'SONHH\eBaySDK\ReturnManagement\Types\ItemFilterType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ],
        'orderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ],
        'creationDateRangeFilter' => [
            'type' => 'SONHH\eBaySDK\ReturnManagement\Types\DateRangeFilterType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDateRangeFilter'
        ],
        'ReturnStatusFilter' => [
            'type' => 'SONHH\eBaySDK\ReturnManagement\Types\ReturnStatusFilterType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatusFilter'
        ],
        'otherUserFilter' => [
            'type' => 'SONHH\eBaySDK\ReturnManagement\Types\UserFilterType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'otherUserFilter'
        ],
        'paginationInput' => [
            'type' => 'SONHH\eBaySDK\ReturnManagement\Types\PaginationInput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'sortType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortType'
        ],
        'sortOrderType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortOrderType'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getUserReturnsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
