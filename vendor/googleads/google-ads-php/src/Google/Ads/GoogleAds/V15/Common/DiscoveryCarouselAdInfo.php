<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A discovery carousel ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.DiscoveryCarouselAdInfo</code>
 */
class DiscoveryCarouselAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Advertiser/brand name.
     *
     * Generated from protobuf field <code>string business_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $business_name = '';
    /**
     * Required. Logo image to be used in the ad.  The minimum size is 128x128 and
     * the aspect ratio must be 1:1(+-1%).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdImageAsset logo_image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $logo_image = null;
    /**
     * Required. Headline of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset headline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $headline = null;
    /**
     * Required. The descriptive text of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset description = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $description = null;
    /**
     * Call to action text.
     *
     * Generated from protobuf field <code>string call_to_action_text = 5;</code>
     */
    protected $call_to_action_text = '';
    /**
     * Required. Carousel cards that will display with the ad. Min 2 max 10.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.AdDiscoveryCarouselCardAsset carousel_cards = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $carousel_cards;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $business_name
     *           Required. The Advertiser/brand name.
     *     @type \Google\Ads\GoogleAds\V15\Common\AdImageAsset $logo_image
     *           Required. Logo image to be used in the ad.  The minimum size is 128x128 and
     *           the aspect ratio must be 1:1(+-1%).
     *     @type \Google\Ads\GoogleAds\V15\Common\AdTextAsset $headline
     *           Required. Headline of the ad.
     *     @type \Google\Ads\GoogleAds\V15\Common\AdTextAsset $description
     *           Required. The descriptive text of the ad.
     *     @type string $call_to_action_text
     *           Call to action text.
     *     @type array<\Google\Ads\GoogleAds\V15\Common\AdDiscoveryCarouselCardAsset>|\Google\Protobuf\Internal\RepeatedField $carousel_cards
     *           Required. Carousel cards that will display with the ad. Min 2 max 10.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Advertiser/brand name.
     *
     * Generated from protobuf field <code>string business_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Required. The Advertiser/brand name.
     *
     * Generated from protobuf field <code>string business_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Required. Logo image to be used in the ad.  The minimum size is 128x128 and
     * the aspect ratio must be 1:1(+-1%).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdImageAsset logo_image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Common\AdImageAsset|null
     */
    public function getLogoImage()
    {
        return $this->logo_image;
    }

    public function hasLogoImage()
    {
        return isset($this->logo_image);
    }

    public function clearLogoImage()
    {
        unset($this->logo_image);
    }

    /**
     * Required. Logo image to be used in the ad.  The minimum size is 128x128 and
     * the aspect ratio must be 1:1(+-1%).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdImageAsset logo_image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Common\AdImageAsset $var
     * @return $this
     */
    public function setLogoImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Common\AdImageAsset::class);
        $this->logo_image = $var;

        return $this;
    }

    /**
     * Required. Headline of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset headline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Common\AdTextAsset|null
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    public function hasHeadline()
    {
        return isset($this->headline);
    }

    public function clearHeadline()
    {
        unset($this->headline);
    }

    /**
     * Required. Headline of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset headline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Common\AdTextAsset $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Common\AdTextAsset::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * Required. The descriptive text of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset description = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Common\AdTextAsset|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Required. The descriptive text of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.common.AdTextAsset description = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Common\AdTextAsset $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Common\AdTextAsset::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Call to action text.
     *
     * Generated from protobuf field <code>string call_to_action_text = 5;</code>
     * @return string
     */
    public function getCallToActionText()
    {
        return $this->call_to_action_text;
    }

    /**
     * Call to action text.
     *
     * Generated from protobuf field <code>string call_to_action_text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCallToActionText($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_to_action_text = $var;

        return $this;
    }

    /**
     * Required. Carousel cards that will display with the ad. Min 2 max 10.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.AdDiscoveryCarouselCardAsset carousel_cards = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCarouselCards()
    {
        return $this->carousel_cards;
    }

    /**
     * Required. Carousel cards that will display with the ad. Min 2 max 10.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.AdDiscoveryCarouselCardAsset carousel_cards = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V15\Common\AdDiscoveryCarouselCardAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCarouselCards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V15\Common\AdDiscoveryCarouselCardAsset::class);
        $this->carousel_cards = $arr;

        return $this;
    }

}

