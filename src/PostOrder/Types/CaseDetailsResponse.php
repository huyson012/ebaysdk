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
 * @property \SONHH\eBaySDK\PostOrder\Types\ActionDeadlines $actionDeadlines
 * @property \SONHH\eBaySDK\PostOrder\Types\AppealDetails $appealDetails
 * @property string $buyerClosureReason
 * @property string $buyerProtectedProgramLink
 * @property \SONHH\eBaySDK\PostOrder\Types\CaseDetails $caseDetails
 * @property \SONHH\eBaySDK\PostOrder\Types\ClaimHistoryResponse $caseHistoryDetails
 * @property string $caseId
 * @property integer $caseQuantity
 * @property string $caseType
 * @property \SONHH\eBaySDK\PostOrder\Types\Amount $claimAmount
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property \SONHH\eBaySDK\PostOrder\Enums\UserPartyEnum $escalatedBy
 * @property string $escalateReason
 * @property string $eventTicketsLink
 * @property string $extTransactionId
 * @property integer $fsnadDaysToAddTrackingAfterShippingItem
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $fsnadShipToSellerByDate
 * @property \SONHH\eBaySDK\PostOrder\Enums\UserPartyEnum $initiator
 * @property string $itemId
 * @property \SONHH\eBaySDK\PostOrder\Types\DateTime $lastModifiedDate
 * @property string $payForItemLink
 * @property string $priceSignatureConfirmationAmount
 * @property string $recalledItemLink
 * @property \SONHH\eBaySDK\PostOrder\Types\ReturnAddress $returnDetails
 * @property string $returnId
 * @property string $sellerClosureReason
 * @property \SONHH\eBaySDK\PostOrder\Types\Amount $shippingFee
 * @property string $status
 * @property string $transactionId
 */
class CaseDetailsResponse extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actionDeadlines' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\ActionDeadlines',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actionDeadlines'
        ],
        'appealDetails' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\AppealDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealDetails'
        ],
        'buyerClosureReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerClosureReason'
        ],
        'buyerProtectedProgramLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerProtectedProgramLink'
        ],
        'caseDetails' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\CaseDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseDetails'
        ],
        'caseHistoryDetails' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\ClaimHistoryResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseHistoryDetails'
        ],
        'caseId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'caseQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseQuantity'
        ],
        'caseType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseType'
        ],
        'claimAmount' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'creationDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalatedBy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalatedBy'
        ],
        'escalateReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateReason'
        ],
        'eventTicketsLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eventTicketsLink'
        ],
        'extTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extTransactionId'
        ],
        'fsnadDaysToAddTrackingAfterShippingItem' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fsnadDaysToAddTrackingAfterShippingItem'
        ],
        'fsnadShipToSellerByDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fsnadShipToSellerByDate'
        ],
        'initiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiator'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'lastModifiedDate' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'payForItemLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'payForItemLink'
        ],
        'priceSignatureConfirmationAmount' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSignatureConfirmationAmount'
        ],
        'recalledItemLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'recalledItemLink'
        ],
        'returnDetails' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\ReturnAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDetails'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'sellerClosureReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerClosureReason'
        ],
        'shippingFee' => [
            'type' => 'SONHH\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingFee'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
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
