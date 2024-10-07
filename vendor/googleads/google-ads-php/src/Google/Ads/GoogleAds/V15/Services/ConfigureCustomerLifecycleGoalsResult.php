<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/customer_lifecycle_goal_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the customer lifecycle goal configuration.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.ConfigureCustomerLifecycleGoalsResult</code>
 */
class ConfigureCustomerLifecycleGoalsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for the successful operation.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for the successful operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\CustomerLifecycleGoalService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for the successful operation.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for the successful operation.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

