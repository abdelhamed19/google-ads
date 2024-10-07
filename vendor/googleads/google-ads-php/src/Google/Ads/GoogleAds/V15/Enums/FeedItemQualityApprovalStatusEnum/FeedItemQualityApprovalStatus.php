<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/feed_item_quality_approval_status.proto

namespace Google\Ads\GoogleAds\V15\Enums\FeedItemQualityApprovalStatusEnum;

use UnexpectedValueException;

/**
 * The possible quality evaluation approval statuses of a feed item.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus</code>
 */
class FeedItemQualityApprovalStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Meets all quality expectations.
     *
     * Generated from protobuf enum <code>APPROVED = 2;</code>
     */
    const APPROVED = 2;
    /**
     * Does not meet some quality expectations. The specific reason is found in
     * the quality_disapproval_reasons field.
     *
     * Generated from protobuf enum <code>DISAPPROVED = 3;</code>
     */
    const DISAPPROVED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APPROVED => 'APPROVED',
        self::DISAPPROVED => 'DISAPPROVED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedItemQualityApprovalStatus::class, \Google\Ads\GoogleAds\V15\Enums\FeedItemQualityApprovalStatusEnum_FeedItemQualityApprovalStatus::class);

