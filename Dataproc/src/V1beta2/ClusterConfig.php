<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The cluster config.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ClusterConfig</code>
 */
class ClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A Cloud Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging
     * bucket](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     *
     * Generated from protobuf field <code>string config_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $config_bucket = '';
    /**
     * Optional. A Cloud Storage bucket used to store ephemeral cluster and jobs data,
     * such as Spark and MapReduce history files.
     * If you do not specify a temp bucket,
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's temp bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket. The default bucket has
     * a TTL of 90 days, but you can use any TTL (or none) if you specify a
     * bucket.
     *
     * Generated from protobuf field <code>string temp_bucket = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $temp_bucket = '';
    /**
     * Optional. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gce_cluster_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $master_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $worker_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $secondary_worker_config = null;
    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $software_config = null;
    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $lifecycle_config = null;
    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use
     * `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google
     *     http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $initialization_actions;
    /**
     * Optional. Encryption settings for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EncryptionConfig encryption_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encryption_config = null;
    /**
     * Optional. Autoscaling config for the policy associated with the cluster.
     * Cluster does not autoscale if this field is unset.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.AutoscalingConfig autoscaling_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $autoscaling_config = null;
    /**
     * Optional. Port/endpoint configuration for this cluster
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EndpointConfig endpoint_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $endpoint_config = null;
    /**
     * Optional. Security related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SecurityConfig security_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $security_config = null;
    /**
     * Optional. The Kubernetes Engine config for Dataproc clusters deployed to Kubernetes.
     * Setting this is considered mutually exclusive with Compute Engine-based
     * options such as `gce_cluster_config`, `master_config`, `worker_config`,
     * `secondary_worker_config`, and `autoscaling_config`.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GkeClusterConfig gke_cluster_config = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gke_cluster_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $config_bucket
     *           Optional. A Cloud Storage bucket used to stage job
     *           dependencies, config files, and job driver console output.
     *           If you do not specify a staging bucket, Cloud
     *           Dataproc will determine a Cloud Storage location (US,
     *           ASIA, or EU) for your cluster's staging bucket according to the
     *           Compute Engine zone where your cluster is deployed, and then create
     *           and manage this project-level, per-location bucket (see
     *           [Dataproc staging
     *           bucket](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     *     @type string $temp_bucket
     *           Optional. A Cloud Storage bucket used to store ephemeral cluster and jobs data,
     *           such as Spark and MapReduce history files.
     *           If you do not specify a temp bucket,
     *           Dataproc will determine a Cloud Storage location (US,
     *           ASIA, or EU) for your cluster's temp bucket according to the
     *           Compute Engine zone where your cluster is deployed, and then create
     *           and manage this project-level, per-location bucket. The default bucket has
     *           a TTL of 90 days, but you can use any TTL (or none) if you specify a
     *           bucket.
     *     @type \Google\Cloud\Dataproc\V1beta2\GceClusterConfig $gce_cluster_config
     *           Optional. The shared Compute Engine config settings for
     *           all instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $master_config
     *           Optional. The Compute Engine config settings for
     *           the master instance in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $worker_config
     *           Optional. The Compute Engine config settings for
     *           worker instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $secondary_worker_config
     *           Optional. The Compute Engine config settings for
     *           additional worker instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\SoftwareConfig $software_config
     *           Optional. The config settings for software inside the cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\LifecycleConfig $lifecycle_config
     *           Optional. The config setting for auto delete cluster schedule.
     *     @type \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction[]|\Google\Protobuf\Internal\RepeatedField $initialization_actions
     *           Optional. Commands to execute on each node after config is
     *           completed. By default, executables are run on master and all worker nodes.
     *           You can test a node's <code>role</code> metadata to run an executable on
     *           a master or worker node, as shown below using `curl` (you can also use
     *           `wget`):
     *               ROLE=$(curl -H Metadata-Flavor:Google
     *               http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *               if [[ "${ROLE}" == 'Master' ]]; then
     *                 ... master specific actions ...
     *               else
     *                 ... worker specific actions ...
     *               fi
     *     @type \Google\Cloud\Dataproc\V1beta2\EncryptionConfig $encryption_config
     *           Optional. Encryption settings for the cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\AutoscalingConfig $autoscaling_config
     *           Optional. Autoscaling config for the policy associated with the cluster.
     *           Cluster does not autoscale if this field is unset.
     *     @type \Google\Cloud\Dataproc\V1beta2\EndpointConfig $endpoint_config
     *           Optional. Port/endpoint configuration for this cluster
     *     @type \Google\Cloud\Dataproc\V1beta2\SecurityConfig $security_config
     *           Optional. Security related configuration.
     *     @type \Google\Cloud\Dataproc\V1beta2\GkeClusterConfig $gke_cluster_config
     *           Optional. The Kubernetes Engine config for Dataproc clusters deployed to Kubernetes.
     *           Setting this is considered mutually exclusive with Compute Engine-based
     *           options such as `gce_cluster_config`, `master_config`, `worker_config`,
     *           `secondary_worker_config`, and `autoscaling_config`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A Cloud Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging
     * bucket](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     *
     * Generated from protobuf field <code>string config_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getConfigBucket()
    {
        return $this->config_bucket;
    }

    /**
     * Optional. A Cloud Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging
     * bucket](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     *
     * Generated from protobuf field <code>string config_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setConfigBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->config_bucket = $var;

        return $this;
    }

    /**
     * Optional. A Cloud Storage bucket used to store ephemeral cluster and jobs data,
     * such as Spark and MapReduce history files.
     * If you do not specify a temp bucket,
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's temp bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket. The default bucket has
     * a TTL of 90 days, but you can use any TTL (or none) if you specify a
     * bucket.
     *
     * Generated from protobuf field <code>string temp_bucket = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTempBucket()
    {
        return $this->temp_bucket;
    }

    /**
     * Optional. A Cloud Storage bucket used to store ephemeral cluster and jobs data,
     * such as Spark and MapReduce history files.
     * If you do not specify a temp bucket,
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's temp bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket. The default bucket has
     * a TTL of 90 days, but you can use any TTL (or none) if you specify a
     * bucket.
     *
     * Generated from protobuf field <code>string temp_bucket = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTempBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->temp_bucket = $var;

        return $this;
    }

    /**
     * Optional. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\GceClusterConfig
     */
    public function getGceClusterConfig()
    {
        return isset($this->gce_cluster_config) ? $this->gce_cluster_config : null;
    }

    public function hasGceClusterConfig()
    {
        return isset($this->gce_cluster_config);
    }

    public function clearGceClusterConfig()
    {
        unset($this->gce_cluster_config);
    }

    /**
     * Optional. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\GceClusterConfig $var
     * @return $this
     */
    public function setGceClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\GceClusterConfig::class);
        $this->gce_cluster_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getMasterConfig()
    {
        return isset($this->master_config) ? $this->master_config : null;
    }

    public function hasMasterConfig()
    {
        return isset($this->master_config);
    }

    public function clearMasterConfig()
    {
        unset($this->master_config);
    }

    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setMasterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->master_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getWorkerConfig()
    {
        return isset($this->worker_config) ? $this->worker_config : null;
    }

    public function hasWorkerConfig()
    {
        return isset($this->worker_config);
    }

    public function clearWorkerConfig()
    {
        unset($this->worker_config);
    }

    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setWorkerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->worker_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getSecondaryWorkerConfig()
    {
        return isset($this->secondary_worker_config) ? $this->secondary_worker_config : null;
    }

    public function hasSecondaryWorkerConfig()
    {
        return isset($this->secondary_worker_config);
    }

    public function clearSecondaryWorkerConfig()
    {
        unset($this->secondary_worker_config);
    }

    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setSecondaryWorkerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->secondary_worker_config = $var;

        return $this;
    }

    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\SoftwareConfig
     */
    public function getSoftwareConfig()
    {
        return isset($this->software_config) ? $this->software_config : null;
    }

    public function hasSoftwareConfig()
    {
        return isset($this->software_config);
    }

    public function clearSoftwareConfig()
    {
        unset($this->software_config);
    }

    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\SoftwareConfig $var
     * @return $this
     */
    public function setSoftwareConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\SoftwareConfig::class);
        $this->software_config = $var;

        return $this;
    }

    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\LifecycleConfig
     */
    public function getLifecycleConfig()
    {
        return isset($this->lifecycle_config) ? $this->lifecycle_config : null;
    }

    public function hasLifecycleConfig()
    {
        return isset($this->lifecycle_config);
    }

    public function clearLifecycleConfig()
    {
        unset($this->lifecycle_config);
    }

    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\LifecycleConfig $var
     * @return $this
     */
    public function setLifecycleConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\LifecycleConfig::class);
        $this->lifecycle_config = $var;

        return $this;
    }

    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use
     * `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google
     *     http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitializationActions()
    {
        return $this->initialization_actions;
    }

    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use
     * `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google
     *     http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitializationActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction::class);
        $this->initialization_actions = $arr;

        return $this;
    }

    /**
     * Optional. Encryption settings for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EncryptionConfig encryption_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\EncryptionConfig
     */
    public function getEncryptionConfig()
    {
        return isset($this->encryption_config) ? $this->encryption_config : null;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. Encryption settings for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EncryptionConfig encryption_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * Optional. Autoscaling config for the policy associated with the cluster.
     * Cluster does not autoscale if this field is unset.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.AutoscalingConfig autoscaling_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\AutoscalingConfig
     */
    public function getAutoscalingConfig()
    {
        return isset($this->autoscaling_config) ? $this->autoscaling_config : null;
    }

    public function hasAutoscalingConfig()
    {
        return isset($this->autoscaling_config);
    }

    public function clearAutoscalingConfig()
    {
        unset($this->autoscaling_config);
    }

    /**
     * Optional. Autoscaling config for the policy associated with the cluster.
     * Cluster does not autoscale if this field is unset.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.AutoscalingConfig autoscaling_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\AutoscalingConfig $var
     * @return $this
     */
    public function setAutoscalingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\AutoscalingConfig::class);
        $this->autoscaling_config = $var;

        return $this;
    }

    /**
     * Optional. Port/endpoint configuration for this cluster
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EndpointConfig endpoint_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\EndpointConfig
     */
    public function getEndpointConfig()
    {
        return isset($this->endpoint_config) ? $this->endpoint_config : null;
    }

    public function hasEndpointConfig()
    {
        return isset($this->endpoint_config);
    }

    public function clearEndpointConfig()
    {
        unset($this->endpoint_config);
    }

    /**
     * Optional. Port/endpoint configuration for this cluster
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.EndpointConfig endpoint_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\EndpointConfig $var
     * @return $this
     */
    public function setEndpointConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\EndpointConfig::class);
        $this->endpoint_config = $var;

        return $this;
    }

    /**
     * Optional. Security related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SecurityConfig security_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\SecurityConfig
     */
    public function getSecurityConfig()
    {
        return isset($this->security_config) ? $this->security_config : null;
    }

    public function hasSecurityConfig()
    {
        return isset($this->security_config);
    }

    public function clearSecurityConfig()
    {
        unset($this->security_config);
    }

    /**
     * Optional. Security related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SecurityConfig security_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\SecurityConfig $var
     * @return $this
     */
    public function setSecurityConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\SecurityConfig::class);
        $this->security_config = $var;

        return $this;
    }

    /**
     * Optional. The Kubernetes Engine config for Dataproc clusters deployed to Kubernetes.
     * Setting this is considered mutually exclusive with Compute Engine-based
     * options such as `gce_cluster_config`, `master_config`, `worker_config`,
     * `secondary_worker_config`, and `autoscaling_config`.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GkeClusterConfig gke_cluster_config = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\GkeClusterConfig
     */
    public function getGkeClusterConfig()
    {
        return isset($this->gke_cluster_config) ? $this->gke_cluster_config : null;
    }

    public function hasGkeClusterConfig()
    {
        return isset($this->gke_cluster_config);
    }

    public function clearGkeClusterConfig()
    {
        unset($this->gke_cluster_config);
    }

    /**
     * Optional. The Kubernetes Engine config for Dataproc clusters deployed to Kubernetes.
     * Setting this is considered mutually exclusive with Compute Engine-based
     * options such as `gce_cluster_config`, `master_config`, `worker_config`,
     * `secondary_worker_config`, and `autoscaling_config`.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GkeClusterConfig gke_cluster_config = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\GkeClusterConfig $var
     * @return $this
     */
    public function setGkeClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\GkeClusterConfig::class);
        $this->gke_cluster_config = $var;

        return $this;
    }

}

