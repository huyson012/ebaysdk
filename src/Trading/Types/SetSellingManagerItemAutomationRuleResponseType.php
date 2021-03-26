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
 * @property \SONHH\eBaySDK\Trading\Types\SellingManagerAutoListType $AutomatedListingRule
 * @property \SONHH\eBaySDK\Trading\Types\SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property \SONHH\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 * @property \SONHH\eBaySDK\Trading\Types\FeesType $Fees
 */
class SetSellingManagerItemAutomationRuleResponseType extends \SONHH\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AutomatedListingRule' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellingManagerAutoListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedListingRule'
        ],
        'AutomatedRelistingRule' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellingManagerAutoRelistType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedRelistingRule'
        ],
        'AutomatedSecondChanceOfferRule' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedSecondChanceOfferRule'
        ],
        'Fees' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
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
