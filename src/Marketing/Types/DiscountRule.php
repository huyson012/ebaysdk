<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Marketing\Types;

/**
 *
 * @property \SONHH\eBaySDK\Marketing\Types\DiscountBenefit $discountBenefit
 * @property \SONHH\eBaySDK\Marketing\Types\DiscountSpecification $discountSpecification
 * @property integer $ruleOrder
 */
class DiscountRule extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'discountBenefit' => [
            'type' => 'SONHH\eBaySDK\Marketing\Types\DiscountBenefit',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountBenefit'
        ],
        'discountSpecification' => [
            'type' => 'SONHH\eBaySDK\Marketing\Types\DiscountSpecification',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountSpecification'
        ],
        'ruleOrder' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ruleOrder'
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
