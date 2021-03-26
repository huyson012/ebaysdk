<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property \DTS\eBaySDK\Shopping\Types\FeedbackPeriodType[] $BidRetractionFeedbackPeriods
 * @property \DTS\eBaySDK\Shopping\Types\FeedbackPeriodType[] $NegativeFeedbackPeriods
 * @property \DTS\eBaySDK\Shopping\Types\FeedbackPeriodType[] $NeutralFeedbackPeriods
 * @property \DTS\eBaySDK\Shopping\Types\FeedbackPeriodType[] $PositiveFeedbackPeriods
 * @property \DTS\eBaySDK\Shopping\Types\FeedbackPeriodType[] $TotalFeedbackPeriods
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property \DTS\eBaySDK\Shopping\Types\AverageRatingDetailsType[] $AverageRatingDetails
 * @property integer $NeutralCommentCountFromSuspendedUsers
 * @property integer $UniqueNeutralFeedbackCount
 */
class FeedbackHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidRetractionFeedbackPeriods' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BidRetractionFeedbackPeriods'
        ],
        'NegativeFeedbackPeriods' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackPeriods'
        ],
        'NeutralFeedbackPeriods' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackPeriods'
        ],
        'PositiveFeedbackPeriods' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPeriods'
        ],
        'TotalFeedbackPeriods' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TotalFeedbackPeriods'
        ],
        'UniqueNegativeFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ],
        'UniquePositiveFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ],
        'AverageRatingDetails' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\AverageRatingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AverageRatingDetails'
        ],
        'NeutralCommentCountFromSuspendedUsers' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers'
        ],
        'UniqueNeutralFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
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
