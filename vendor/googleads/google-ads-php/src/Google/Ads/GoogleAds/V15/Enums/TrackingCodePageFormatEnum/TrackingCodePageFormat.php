<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/tracking_code_page_format.proto

namespace Google\Ads\GoogleAds\V15\Enums\TrackingCodePageFormatEnum;

use UnexpectedValueException;

/**
 * The format of the web page where the tracking tag and snippet will be
 * installed.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat</code>
 */
class TrackingCodePageFormat
{
    /**
     * Not specified.
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
     * Standard HTML page format.
     *
     * Generated from protobuf enum <code>HTML = 2;</code>
     */
    const HTML = 2;
    /**
     * Google AMP page format.
     *
     * Generated from protobuf enum <code>AMP = 3;</code>
     */
    const AMP = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HTML => 'HTML',
        self::AMP => 'AMP',
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
class_alias(TrackingCodePageFormat::class, \Google\Ads\GoogleAds\V15\Enums\TrackingCodePageFormatEnum_TrackingCodePageFormat::class);

