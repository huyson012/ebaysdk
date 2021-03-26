<?php
namespace SONHH\eBaySDK;


/**
 * Builds SONHH\eBaySDK services based on passed configuration options.
 *
 * @method \SONHH\eBaySDK\Account\Services\AccountService createAccount(array $args = [])
 * @method \SONHH\eBaySDK\Analytics\Services\AnalyticsService createAnalytics(array $args = [])
 * @method \SONHH\eBaySDK\Browse\Services\BrowseService createBrowse(array $args = [])
 * @method \SONHH\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \SONHH\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \SONHH\eBaySDK\Feedback\Services\FeedbackService createFeedback(array $args = [])
 * @method \SONHH\eBaySDK\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \SONHH\eBaySDK\Finding\Services\FindingService createFinding(array $args = [])
 * @method \SONHH\eBaySDK\Fulfillment\Services\FulfillmentService createFulfillment(array $args = [])
 * @method \SONHH\eBaySDK\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \SONHH\eBaySDK\Inventory\Services\InventoryService createInventory(array $args = [])
 * @method \SONHH\eBaySDK\Marketing\Services\MarketingService createMarketing(array $args = [])
 * @method \SONHH\eBaySDK\Merchandising\Services\MerchandisingService createMerchandising(array $args = [])
 * @method \SONHH\eBaySDK\Metadata\Services\MetadataService createMetadata(array $args = [])
 * @method \SONHH\eBaySDK\Order\Services\OrderService createOrder(array $args = [])
 * @method \SONHH\eBaySDK\PostOrder\Services\PostOrderService createPostOrder(array $args = [])
 * @method \SONHH\eBaySDK\Product\Services\ProductService createProduct(array $args = [])
 * @method \SONHH\eBaySDK\ProductMetadata\Services\ProductMetadataService createProductMetadata(array $args = [])
 * @method \SONHH\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method \SONHH\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \SONHH\eBaySDK\ReturnManagement\Services\ReturnManagementService createReturnManagement(array $args = [])
 * @method \SONHH\eBaySDK\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \SONHH\eBaySDK\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return \SONHH\eBaySDK\Services\BaseService
     * @throws \BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return \SONHH\eBaySDK\Services\BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "SONHH\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
