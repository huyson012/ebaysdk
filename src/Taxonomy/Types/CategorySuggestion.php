<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Taxonomy\Types;

/**
 *
 * @property \SONHH\eBaySDK\Taxonomy\Types\Category $category
 * @property \SONHH\eBaySDK\Taxonomy\Types\AncestorReference[] $categoryTreeNodeAncestors
 * @property integer $categoryTreeNodeLevel
 * @property string $relevancy
 */
class CategorySuggestion extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'category' => [
            'type' => 'SONHH\eBaySDK\Taxonomy\Types\Category',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'categoryTreeNodeAncestors' => [
            'type' => 'SONHH\eBaySDK\Taxonomy\Types\AncestorReference',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTreeNodeAncestors'
        ],
        'categoryTreeNodeLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeNodeLevel'
        ],
        'relevancy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'relevancy'
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
