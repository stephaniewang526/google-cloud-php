<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/common.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the deployed Agones fleet.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.DeployedFleetDetails</code>
 */
class DeployedFleetDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Information about the Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleet deployed_fleet = 1;</code>
     */
    private $deployed_fleet = null;
    /**
     * Information about the Agones autoscaler for that fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleetAutoscaler deployed_autoscaler = 2;</code>
     */
    private $deployed_autoscaler = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleet $deployed_fleet
     *           Information about the Agones fleet.
     *     @type \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleetAutoscaler $deployed_autoscaler
     *           Information about the Agones autoscaler for that fleet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Information about the Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleet deployed_fleet = 1;</code>
     * @return \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleet
     */
    public function getDeployedFleet()
    {
        return $this->deployed_fleet;
    }

    /**
     * Information about the Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleet deployed_fleet = 1;</code>
     * @param \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleet $var
     * @return $this
     */
    public function setDeployedFleet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\DeployedFleetDetails_DeployedFleet::class);
        $this->deployed_fleet = $var;

        return $this;
    }

    /**
     * Information about the Agones autoscaler for that fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleetAutoscaler deployed_autoscaler = 2;</code>
     * @return \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleetAutoscaler
     */
    public function getDeployedAutoscaler()
    {
        return $this->deployed_autoscaler;
    }

    /**
     * Information about the Agones autoscaler for that fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.DeployedFleetDetails.DeployedFleetAutoscaler deployed_autoscaler = 2;</code>
     * @param \Google\Cloud\Gaming\V1\DeployedFleetDetails\DeployedFleetAutoscaler $var
     * @return $this
     */
    public function setDeployedAutoscaler($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\DeployedFleetDetails_DeployedFleetAutoscaler::class);
        $this->deployed_autoscaler = $var;

        return $this;
    }

}

