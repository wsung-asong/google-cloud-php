<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\StatisticalTable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A quasi-identifier column has a custom_tag, used to know which column
 * in the data corresponds to which column in the statistical model.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.StatisticalTable.QuasiIdentifierField</code>
 */
class QuasiIdentifierField extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1;</code>
     */
    private $field = null;
    /**
     * A column can be tagged with a custom tag. In this case, the user must
     * indicate an auxiliary table that contains statistical information on
     * the possible values of this column (below).
     *
     * Generated from protobuf field <code>string custom_tag = 2;</code>
     */
    private $custom_tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FieldId $field
     *           Identifies the column.
     *     @type string $custom_tag
     *           A column can be tagged with a custom tag. In this case, the user must
     *           indicate an auxiliary table that contains statistical information on
     *           the possible values of this column (below).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1;</code>
     * @return \Google\Cloud\Dlp\V2\FieldId
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : null;
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->field = $var;

        return $this;
    }

    /**
     * A column can be tagged with a custom tag. In this case, the user must
     * indicate an auxiliary table that contains statistical information on
     * the possible values of this column (below).
     *
     * Generated from protobuf field <code>string custom_tag = 2;</code>
     * @return string
     */
    public function getCustomTag()
    {
        return $this->custom_tag;
    }

    /**
     * A column can be tagged with a custom tag. In this case, the user must
     * indicate an auxiliary table that contains statistical information on
     * the possible values of this column (below).
     *
     * Generated from protobuf field <code>string custom_tag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_tag = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuasiIdentifierField::class, \Google\Cloud\Dlp\V2\StatisticalTable_QuasiIdentifierField::class);

