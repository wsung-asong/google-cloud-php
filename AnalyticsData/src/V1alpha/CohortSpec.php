<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification for a cohort report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.CohortSpec</code>
 */
class CohortSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The definition for the cohorts.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     */
    private $cohorts;
    /**
     * The data ranges of cohorts.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     */
    private $cohorts_range = null;
    /**
     * Settings of a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     */
    private $cohort_report_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\Cohort[]|\Google\Protobuf\Internal\RepeatedField $cohorts
     *           The definition for the cohorts.
     *     @type \Google\Analytics\Data\V1alpha\CohortsRange $cohorts_range
     *           The data ranges of cohorts.
     *     @type \Google\Analytics\Data\V1alpha\CohortReportSettings $cohort_report_settings
     *           Settings of a cohort report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The definition for the cohorts.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCohorts()
    {
        return $this->cohorts;
    }

    /**
     * The definition for the cohorts.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\Cohort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCohorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Cohort::class);
        $this->cohorts = $arr;

        return $this;
    }

    /**
     * The data ranges of cohorts.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\CohortsRange
     */
    public function getCohortsRange()
    {
        return isset($this->cohorts_range) ? $this->cohorts_range : null;
    }

    public function hasCohortsRange()
    {
        return isset($this->cohorts_range);
    }

    public function clearCohortsRange()
    {
        unset($this->cohorts_range);
    }

    /**
     * The data ranges of cohorts.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\CohortsRange $var
     * @return $this
     */
    public function setCohortsRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\CohortsRange::class);
        $this->cohorts_range = $var;

        return $this;
    }

    /**
     * Settings of a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     * @return \Google\Analytics\Data\V1alpha\CohortReportSettings
     */
    public function getCohortReportSettings()
    {
        return isset($this->cohort_report_settings) ? $this->cohort_report_settings : null;
    }

    public function hasCohortReportSettings()
    {
        return isset($this->cohort_report_settings);
    }

    public function clearCohortReportSettings()
    {
        unset($this->cohort_report_settings);
    }

    /**
     * Settings of a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\CohortReportSettings $var
     * @return $this
     */
    public function setCohortReportSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\CohortReportSettings::class);
        $this->cohort_report_settings = $var;

        return $this;
    }

}

