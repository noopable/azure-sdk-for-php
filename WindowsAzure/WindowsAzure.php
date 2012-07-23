<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */

spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'windowsazure\\blob\\blobrestproxy' => '/Blob/BlobRestProxy.php',
            'windowsazure\\blob\\internal\\iblob' => '/Blob/Internal/IBlob.php',
            'windowsazure\\blob\\models\\accesscondition' => '/Blob/Models/AccessCondition.php',
            'windowsazure\\blob\\models\\accesspolicy' => '/Blob/Models/AccessPolicy.php',
            'windowsazure\\blob\\models\\acquireleaseoptions' => '/Blob/Models/AcquireLeaseOptions.php',
            'windowsazure\\blob\\models\\acquireleaseresult' => '/Blob/Models/AcquireLeaseResult.php',
            'windowsazure\\blob\\models\\blob' => '/Blob/Models/Blob.php',
            'windowsazure\\blob\\models\\blobblocktype' => '/Blob/Models/BlobBlockType.php',
            'windowsazure\\blob\\models\\blobprefix' => '/Blob/Models/BlobPrefix.php',
            'windowsazure\\blob\\models\\blobproperties' => '/Blob/Models/BlobProperties.php',
            'windowsazure\\blob\\models\\blobserviceoptions' => '/Blob/Models/BlobServiceOptions.php',
            'windowsazure\\blob\\models\\blobtype' => '/Blob/Models/BlobType.php',
            'windowsazure\\blob\\models\\block' => '/Blob/Models/Block.php',
            'windowsazure\\blob\\models\\blocklist' => '/Blob/Models/BlockList.php',
            'windowsazure\\blob\\models\\commitblobblocksoptions' => '/Blob/Models/CommitBlobBlocksOptions.php',
            'windowsazure\\blob\\models\\container' => '/Blob/Models/Container.php',
            'windowsazure\\blob\\models\\containeracl' => '/Blob/Models/ContainerACL.php',
            'windowsazure\\blob\\models\\containerproperties' => '/Blob/Models/ContainerProperties.php',
            'windowsazure\\blob\\models\\copybloboptions' => '/Blob/Models/CopyBlobOptions.php',
            'windowsazure\\blob\\models\\copyblobresult' => '/Blob/Models/CopyBlobResult.php',
            'windowsazure\\blob\\models\\createblobblockoptions' => '/Blob/Models/CreateBlobBlockOptions.php',
            'windowsazure\\blob\\models\\createbloboptions' => '/Blob/Models/CreateBlobOptions.php',
            'windowsazure\\blob\\models\\createblobpagesoptions' => '/Blob/Models/CreateBlobPagesOptions.php',
            'windowsazure\\blob\\models\\createblobpagesresult' => '/Blob/Models/CreateBlobPagesResult.php',
            'windowsazure\\blob\\models\\createblobsnapshotoptions' => '/Blob/Models/CreateBlobSnapshotOptions.php',
            'windowsazure\\blob\\models\\createblobsnapshotresult' => '/Blob/Models/CreateBlobSnapshotResult.php',
            'windowsazure\\blob\\models\\createcontaineroptions' => '/Blob/Models/CreateContainerOptions.php',
            'windowsazure\\blob\\models\\deletebloboptions' => '/Blob/Models/DeleteBlobOptions.php',
            'windowsazure\\blob\\models\\deletecontaineroptions' => '/Blob/Models/DeleteContainerOptions.php',
            'windowsazure\\blob\\models\\getblobmetadataoptions' => '/Blob/Models/GetBlobMetadataOptions.php',
            'windowsazure\\blob\\models\\getblobmetadataresult' => '/Blob/Models/GetBlobMetadataResult.php',
            'windowsazure\\blob\\models\\getbloboptions' => '/Blob/Models/GetBlobOptions.php',
            'windowsazure\\blob\\models\\getblobpropertiesoptions' => '/Blob/Models/GetBlobPropertiesOptions.php',
            'windowsazure\\blob\\models\\getblobpropertiesresult' => '/Blob/Models/GetBlobPropertiesResult.php',
            'windowsazure\\blob\\models\\getblobresult' => '/Blob/Models/GetBlobResult.php',
            'windowsazure\\blob\\models\\getcontaineraclresult' => '/Blob/Models/GetContainerACLResult.php',
            'windowsazure\\blob\\models\\getcontainerpropertiesresult' => '/Blob/Models/GetContainerPropertiesResult.php',
            'windowsazure\\blob\\models\\leasemode' => '/Blob/Models/LeaseMode.php',
            'windowsazure\\blob\\models\\listblobblocksoptions' => '/Blob/Models/ListBlobBlocksOptions.php',
            'windowsazure\\blob\\models\\listblobblocksresult' => '/Blob/Models/ListBlobBlocksResult.php',
            'windowsazure\\blob\\models\\listblobsoptions' => '/Blob/Models/ListBlobsOptions.php',
            'windowsazure\\blob\\models\\listblobsresult' => '/Blob/Models/ListBlobsResult.php',
            'windowsazure\\blob\\models\\listcontainersoptions' => '/Blob/Models/ListContainersOptions.php',
            'windowsazure\\blob\\models\\listcontainersresult' => '/Blob/Models/ListContainersResult.php',
            'windowsazure\\blob\\models\\listpageblobrangesoptions' => '/Blob/Models/ListPageBlobRangesOptions.php',
            'windowsazure\\blob\\models\\listpageblobrangesresult' => '/Blob/Models/ListPageBlobRangesResult.php',
            'windowsazure\\blob\\models\\pagerange' => '/Blob/Models/PageRange.php',
            'windowsazure\\blob\\models\\pagewriteoption' => '/Blob/Models/PageWriteOption.php',
            'windowsazure\\blob\\models\\publicaccesstype' => '/Blob/Models/PublicAccessType.php',
            'windowsazure\\blob\\models\\setblobmetadataoptions' => '/Blob/Models/SetBlobMetadataOptions.php',
            'windowsazure\\blob\\models\\setblobmetadataresult' => '/Blob/Models/SetBlobMetadataResult.php',
            'windowsazure\\blob\\models\\setblobpropertiesoptions' => '/Blob/Models/SetBlobPropertiesOptions.php',
            'windowsazure\\blob\\models\\setblobpropertiesresult' => '/Blob/Models/SetBlobPropertiesResult.php',
            'windowsazure\\blob\\models\\setcontainermetadataoptions' => '/Blob/Models/SetContainerMetadataOptions.php',
            'windowsazure\\blob\\models\\signedidentifier' => '/Blob/Models/SignedIdentifier.php',
            'windowsazure\\common\\cloudconfigurationmanager' => '/Common/CloudConfigurationManager.php',
            'windowsazure\\common\\internal\\atom\\atombase' => '/Common/Internal/Atom/AtomBase.php',
            'windowsazure\\common\\internal\\atom\\atomlink' => '/Common/Internal/Atom/AtomLink.php',
            'windowsazure\\common\\internal\\atom\\category' => '/Common/Internal/Atom/Category.php',
            'windowsazure\\common\\internal\\atom\\content' => '/Common/Internal/Atom/Content.php',
            'windowsazure\\common\\internal\\atom\\entry' => '/Common/Internal/Atom/Entry.php',
            'windowsazure\\common\\internal\\atom\\feed' => '/Common/Internal/Atom/Feed.php',
            'windowsazure\\common\\internal\\atom\\generator' => '/Common/Internal/Atom/Generator.php',
            'windowsazure\\common\\internal\\atom\\person' => '/Common/Internal/Atom/Person.php',
            'windowsazure\\common\\internal\\atom\\source' => '/Common/Internal/Atom/Source.php',
            'windowsazure\\common\\internal\\authentication\\sharedkeyauthscheme' => '/Common/Internal/Authentication/SharedKeyAuthScheme.php',
            'windowsazure\\common\\internal\\authentication\\storageauthscheme' => '/Common/Internal/Authentication/StorageAuthScheme.php',
            'windowsazure\\common\\internal\\authentication\\tablesharedkeyliteauthscheme' => '/Common/Internal/Authentication/TableSharedKeyLiteAuthScheme.php',
            'windowsazure\\common\\internal\\connectionstringparser' => '/Common/Internal/ConnectionStringParser.php',
            'windowsazure\\common\\internal\\connectionstringsource' => '/Common/Internal/ConnectionStringSource.php',
            'windowsazure\\common\\internal\\filterableservice' => '/Common/Internal/FilterableService.php',
            'windowsazure\\common\\internal\\filters\\authenticationfilter' => '/Common/Internal/Filters/AuthenticationFilter.php',
            'windowsazure\\common\\internal\\filters\\datefilter' => '/Common/Internal/Filters/DateFilter.php',
            'windowsazure\\common\\internal\\filters\\exponentialretrypolicy' => '/Common/Internal/Filters/ExponentialRetryPolicy.php',
            'windowsazure\\common\\internal\\filters\\headersfilter' => '/Common/Internal/Filters/HeadersFilter.php',
            'windowsazure\\common\\internal\\filters\\retrypolicy' => '/Common/Internal/Filters/RetryPolicy.php',
            'windowsazure\\common\\internal\\filters\\retrypolicyfilter' => '/Common/Internal/Filters/RetryPolicyFilter.php',
            'windowsazure\\common\\internal\\filters\\wrapfilter' => '/Common/Internal/Filters/WrapFilter.php',
            'windowsazure\\common\\internal\\http\\httpcallcontext' => '/Common/Internal/Http/HttpCallContext.php',
            'windowsazure\\common\\internal\\http\\httpclient' => '/Common/Internal/Http/HttpClient.php',
            'windowsazure\\common\\internal\\http\\ihttpclient' => '/Common/Internal/Http/IHttpClient.php',
            'windowsazure\\common\\internal\\http\\iurl' => '/Common/Internal/Http/IUrl.php',
            'windowsazure\\common\\internal\\http\\url' => '/Common/Internal/Http/Url.php',
            'windowsazure\\common\\internal\\invalidargumenttypeexception' => '/Common/Internal/InvalidArgumentTypeException.php',
            'windowsazure\\common\\internal\\iservicefilter' => '/Common/Internal/IServiceFilter.php',
            'windowsazure\\common\\internal\\logger' => '/Common/Internal/Logger.php',
            'windowsazure\\common\\internal\\parserstate' => '/Common/Internal/ConnectionStringParser.php',
            'windowsazure\\common\\internal\\resources' => '/Common/Internal/Resources.php',
            'windowsazure\\common\\internal\\restproxy' => '/Common/Internal/RestProxy.php',
            'windowsazure\\common\\internal\\serialization\\iserializer' => '/Common/Internal/Serialization/ISerializer.php',
            'windowsazure\\common\\internal\\serialization\\xmlserializer' => '/Common/Internal/Serialization/XmlSerializer.php',
            'windowsazure\\common\\internal\\servicebussettings' => '/Common/Internal/ServiceBusSettings.php',
            'windowsazure\\common\\internal\\servicemanagementsettings' => '/Common/Internal/ServiceManagementSettings.php',
            'windowsazure\\common\\internal\\servicerestproxy' => '/Common/Internal/ServiceRestProxy.php',
            'windowsazure\\common\\internal\\servicesettings' => '/Common/Internal/ServiceSettings.php',
            'windowsazure\\common\\internal\\storageservicesettings' => '/Common/Internal/StorageServiceSettings.php',
            'windowsazure\\common\\internal\\utilities' => '/Common/Internal/Utilities.php',
            'windowsazure\\common\\internal\\validate' => '/Common/Internal/Validate.php',
            'windowsazure\\common\\models\\getservicepropertiesresult' => '/Common/Models/GetServicePropertiesResult.php',
            'windowsazure\\common\\models\\logging' => '/Common/Models/Logging.php',
            'windowsazure\\common\\models\\metrics' => '/Common/Models/Metrics.php',
            'windowsazure\\common\\models\\retentionpolicy' => '/Common/Models/RetentionPolicy.php',
            'windowsazure\\common\\models\\serviceproperties' => '/Common/Models/ServiceProperties.php',
            'windowsazure\\common\\serviceexception' => '/Common/ServiceException.php',
            'windowsazure\\common\\servicesbuilder' => '/Common/ServicesBuilder.php',
            'windowsazure\\queue\\internal\\iqueue' => '/Queue/Internal/IQueue.php',
            'windowsazure\\queue\\models\\createmessageoptions' => '/Queue/Models/CreateMessageOptions.php',
            'windowsazure\\queue\\models\\createqueueoptions' => '/Queue/Models/CreateQueueOptions.php',
            'windowsazure\\queue\\models\\getqueuemetadataresult' => '/Queue/Models/GetQueueMetadataResult.php',
            'windowsazure\\queue\\models\\listmessagesoptions' => '/Queue/Models/ListMessagesOptions.php',
            'windowsazure\\queue\\models\\listmessagesresult' => '/Queue/Models/ListMessagesResult.php',
            'windowsazure\\queue\\models\\listqueuesoptions' => '/Queue/Models/ListQueuesOptions.php',
            'windowsazure\\queue\\models\\listqueuesresult' => '/Queue/Models/ListQueuesResult.php',
            'windowsazure\\queue\\models\\peekmessagesoptions' => '/Queue/Models/PeekMessagesOptions.php',
            'windowsazure\\queue\\models\\peekmessagesresult' => '/Queue/Models/PeekMessagesResult.php',
            'windowsazure\\queue\\models\\queue' => '/Queue/Models/Queue.php',
            'windowsazure\\queue\\models\\queuemessage' => '/Queue/Models/QueueMessage.php',
            'windowsazure\\queue\\models\\queueserviceoptions' => '/Queue/Models/QueueServiceOptions.php',
            'windowsazure\\queue\\models\\updatemessageresult' => '/Queue/Models/UpdateMessageResult.php',
            'windowsazure\\queue\\models\\windowsazurequeuemessage' => '/Queue/Models/WindowsAzureQueueMessage.php',
            'windowsazure\\queue\\queuerestproxy' => '/Queue/QueueRestProxy.php',
            'windowsazure\\servicebus\\internal\\iservicebus' => '/ServiceBus/Internal/IServiceBus.php',
            'windowsazure\\servicebus\\internal\\iwrap' => '/ServiceBus/Internal/IWrap.php',
            'windowsazure\\servicebus\\internal\\wraptokenmanager' => '/ServiceBus/Internal/WrapTokenManager.php',
            'windowsazure\\servicebus\\models\\action' => '/ServiceBus/Models/Action.php',
            'windowsazure\\servicebus\\models\\activetoken' => '/ServiceBus/Models/ActiveToken.php',
            'windowsazure\\servicebus\\models\\brokeredmessage' => '/ServiceBus/Models/BrokeredMessage.php',
            'windowsazure\\servicebus\\models\\brokerproperties' => '/ServiceBus/Models/BrokerProperties.php',
            'windowsazure\\servicebus\\models\\correlationfilter' => '/ServiceBus/Models/CorrelationFilter.php',
            'windowsazure\\servicebus\\models\\emptyruleaction' => '/ServiceBus/Models/EmptyRuleAction.php',
            'windowsazure\\servicebus\\models\\falsefilter' => '/ServiceBus/Models/FalseFilter.php',
            'windowsazure\\servicebus\\models\\filter' => '/ServiceBus/Models/Filter.php',
            'windowsazure\\servicebus\\models\\listoptions' => '/ServiceBus/Models/ListOptions.php',
            'windowsazure\\servicebus\\models\\listqueuesoptions' => '/ServiceBus/Models/ListQueuesOptions.php',
            'windowsazure\\servicebus\\models\\listqueuesresult' => '/ServiceBus/Models/ListQueuesResult.php',
            'windowsazure\\servicebus\\models\\listrulesoptions' => '/ServiceBus/Models/ListRulesOptions.php',
            'windowsazure\\servicebus\\models\\listrulesresult' => '/ServiceBus/Models/ListRulesResult.php',
            'windowsazure\\servicebus\\models\\listsubscriptionsoptions' => '/ServiceBus/Models/ListSubscriptionsOptions.php',
            'windowsazure\\servicebus\\models\\listsubscriptionsresult' => '/ServiceBus/Models/ListSubscriptionsResult.php',
            'windowsazure\\servicebus\\models\\listtopicsoptions' => '/ServiceBus/Models/ListTopicsOptions.php',
            'windowsazure\\servicebus\\models\\listtopicsresult' => '/ServiceBus/Models/ListTopicsResult.php',
            'windowsazure\\servicebus\\models\\queuedescription' => '/ServiceBus/Models/QueueDescription.php',
            'windowsazure\\servicebus\\models\\queueinfo' => '/ServiceBus/Models/QueueInfo.php',
            'windowsazure\\servicebus\\models\\receivemessageoptions' => '/ServiceBus/Models/ReceiveMessageOptions.php',
            'windowsazure\\servicebus\\models\\receivemode' => '/ServiceBus/Models/ReceiveMode.php',
            'windowsazure\\servicebus\\models\\ruledescription' => '/ServiceBus/Models/RuleDescription.php',
            'windowsazure\\servicebus\\models\\ruleinfo' => '/ServiceBus/Models/RuleInfo.php',
            'windowsazure\\servicebus\\models\\sqlfilter' => '/ServiceBus/Models/SqlFilter.php',
            'windowsazure\\servicebus\\models\\sqlruleaction' => '/ServiceBus/Models/SqlRuleAction.php',
            'windowsazure\\servicebus\\models\\subscriptiondescription' => '/ServiceBus/Models/SubscriptionDescription.php',
            'windowsazure\\servicebus\\models\\subscriptioninfo' => '/ServiceBus/Models/SubscriptionInfo.php',
            'windowsazure\\servicebus\\models\\topicdescription' => '/ServiceBus/Models/TopicDescription.php',
            'windowsazure\\servicebus\\models\\topicinfo' => '/ServiceBus/Models/TopicInfo.php',
            'windowsazure\\servicebus\\models\\truefilter' => '/ServiceBus/Models/TrueFilter.php',
            'windowsazure\\servicebus\\models\\wrapaccesstokenresult' => '/ServiceBus/Models/WrapAccessTokenResult.php',
            'windowsazure\\servicebus\\servicebusrestproxy' => '/ServiceBus/ServiceBusRestProxy.php',
            'windowsazure\\servicebus\\wraprestproxy' => '/ServiceBus/WrapRestProxy.php',
            'windowsazure\\servicemanagement\\internal\\iservicemanagement' => '/ServiceManagement/Internal/IServiceManagement.php',
            'windowsazure\\servicemanagement\\internal\\servicepropertiesresult' => '/ServiceManagement/Internal/ServicePropertiesResult.php',
            'windowsazure\\servicemanagement\\internal\\windowsazureservice' => '/ServiceManagement/Internal/WindowsAzureService.php',
            'windowsazure\\servicemanagement\\models\\affinitygroup' => '/ServiceManagement/Models/AffinityGroup.php',
            'windowsazure\\servicemanagement\\models\\asynchronousoperationresult' => '/ServiceManagement/Models/AsynchronousOperationResult.php',
            'windowsazure\\servicemanagement\\models\\createaffinitygroupoptions' => '/ServiceManagement/Models/CreateAffinityGroupOptions.php',
            'windowsazure\\servicemanagement\\models\\createserviceoptions' => '/ServiceManagement/Models/CreateServiceOptions.php',
            'windowsazure\\servicemanagement\\models\\getaffinitygrouppropertiesresult' => '/ServiceManagement/Models/GetAffinityGroupPropertiesResult.php',
            'windowsazure\\servicemanagement\\models\\getoperationstatusresult' => '/ServiceManagement/Models/GetOperationStatusResult.php',
            'windowsazure\\servicemanagement\\models\\getstorageservicekeysresult' => '/ServiceManagement/Models/GetStorageServiceKeysResult.php',
            'windowsazure\\servicemanagement\\models\\getstorageservicepropertiesresult' => '/ServiceManagement/Models/GetStorageServicePropertiesResult.php',
            'windowsazure\\servicemanagement\\models\\hostedservice' => '/ServiceManagement/Models/HostedService.php',
            'windowsazure\\servicemanagement\\models\\hostedserviceproperties' => '/ServiceManagement/Models/HostedServiceProperties.php',
            'windowsazure\\servicemanagement\\models\\keytype' => '/ServiceManagement/Models/KeyType.php',
            'windowsazure\\servicemanagement\\models\\listaffinitygroupsresult' => '/ServiceManagement/Models/ListAffinityGroupsResult.php',
            'windowsazure\\servicemanagement\\models\\listhostedservicesresult' => '/ServiceManagement/Models/ListHostedServicesResult.php',
            'windowsazure\\servicemanagement\\models\\listlocationsresult' => '/ServiceManagement/Models/ListLocationsResult.php',
            'windowsazure\\servicemanagement\\models\\liststorageservicesresult' => '/ServiceManagement/Models/ListStorageServicesResult.php',
            'windowsazure\\servicemanagement\\models\\location' => '/ServiceManagement/Models/Location.php',
            'windowsazure\\servicemanagement\\models\\locations' => '/ServiceManagement/Models/Locations.php',
            'windowsazure\\servicemanagement\\models\\operationstatus' => '/ServiceManagement/Models/OperationStatus.php',
            'windowsazure\\servicemanagement\\models\\service' => '/ServiceManagement/Models/Service.php',
            'windowsazure\\servicemanagement\\models\\serviceproperties' => '/ServiceManagement/Models/ServiceProperties.php',
            'windowsazure\\servicemanagement\\models\\storageservice' => '/ServiceManagement/Models/StorageService.php',
            'windowsazure\\servicemanagement\\models\\updatestorageserviceoptions' => '/ServiceManagement/Models/UpdateStorageServiceOptions.php',
            'windowsazure\\servicemanagement\\servicemanagementrestproxy' => '/ServiceManagement/ServiceManagementRestProxy.php',
            'windowsazure\\serviceruntime\\internal\\acquirecurrentstate' => '/ServiceRuntime/Internal/AcquireCurrentState.php',
            'windowsazure\\serviceruntime\\internal\\channelnotavailableexception' => '/ServiceRuntime/Internal/ChannelNotAvailableException.php',
            'windowsazure\\serviceruntime\\internal\\chunkedgoalstatedeserializer' => '/ServiceRuntime/Internal/ChunkedGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\internal\\currentstate' => '/ServiceRuntime/Internal/CurrentState.php',
            'windowsazure\\serviceruntime\\internal\\currentstatus' => '/ServiceRuntime/Internal/CurrentStatus.php',
            'windowsazure\\serviceruntime\\internal\\fileinputchannel' => '/ServiceRuntime/Internal/FileInputChannel.php',
            'windowsazure\\serviceruntime\\internal\\fileoutputchannel' => '/ServiceRuntime/Internal/FileOutputChannel.php',
            'windowsazure\\serviceruntime\\internal\\goalstate' => '/ServiceRuntime/Internal/GoalState.php',
            'windowsazure\\serviceruntime\\internal\\icurrentstateserializer' => '/ServiceRuntime/Internal/ICurrentStateSerializer.php',
            'windowsazure\\serviceruntime\\internal\\igoalstatedeserializer' => '/ServiceRuntime/Internal/IGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\internal\\iinputchannel' => '/ServiceRuntime/Internal/IInputChannel.php',
            'windowsazure\\serviceruntime\\internal\\ioutputchannel' => '/ServiceRuntime/Internal/IOutputChannel.php',
            'windowsazure\\serviceruntime\\internal\\iroleenvironmentchange' => '/ServiceRuntime/Internal/IRoleEnvironmentChange.php',
            'windowsazure\\serviceruntime\\internal\\iroleenvironmentdatadeserializer' => '/ServiceRuntime/Internal/IRoleEnvironmentDataDeserializer.php',
            'windowsazure\\serviceruntime\\internal\\iruntimeclient' => '/ServiceRuntime/Internal/IRuntimeClient.php',
            'windowsazure\\serviceruntime\\internal\\iruntimeclientfactory' => '/ServiceRuntime/Internal/IRuntimeClientFactory.php',
            'windowsazure\\serviceruntime\\internal\\iruntimecurrentstateclient' => '/ServiceRuntime/Internal/IRuntimeCurrentStateClient.php',
            'windowsazure\\serviceruntime\\internal\\iruntimegoalstateclient' => '/ServiceRuntime/Internal/IRuntimeGoalStateClient.php',
            'windowsazure\\serviceruntime\\internal\\localresource' => '/ServiceRuntime/Internal/LocalResource.php',
            'windowsazure\\serviceruntime\\internal\\protocol1runtimeclient' => '/ServiceRuntime/Internal/Protocol1RuntimeClient.php',
            'windowsazure\\serviceruntime\\internal\\protocol1runtimeclientfactory' => '/ServiceRuntime/Internal/Protocol1RuntimeClientFactory.php',
            'windowsazure\\serviceruntime\\internal\\protocol1runtimecurrentstateclient' => '/ServiceRuntime/Internal/Protocol1RuntimeCurrentStateClient.php',
            'windowsazure\\serviceruntime\\internal\\protocol1runtimegoalstateclient' => '/ServiceRuntime/Internal/Protocol1RuntimeGoalStateClient.php',
            'windowsazure\\serviceruntime\\internal\\releasecurrentstate' => '/ServiceRuntime/Internal/ReleaseCurrentState.php',
            'windowsazure\\serviceruntime\\internal\\role' => '/ServiceRuntime/Internal/Role.php',
            'windowsazure\\serviceruntime\\internal\\roleenvironmentconfigurationsettingchange' => '/ServiceRuntime/Internal/RoleEnvironmentConfigurationSettingChange.php',
            'windowsazure\\serviceruntime\\internal\\roleenvironmentdata' => '/ServiceRuntime/Internal/RoleEnvironmentData.php',
            'windowsazure\\serviceruntime\\internal\\roleenvironmentnotavailableexception' => '/ServiceRuntime/Internal/RoleEnvironmentNotAvailableException.php',
            'windowsazure\\serviceruntime\\internal\\roleenvironmenttopologychange' => '/ServiceRuntime/Internal/RoleEnvironmentTopologyChange.php',
            'windowsazure\\serviceruntime\\internal\\roleinstance' => '/ServiceRuntime/Internal/RoleInstance.php',
            'windowsazure\\serviceruntime\\internal\\roleinstanceendpoint' => '/ServiceRuntime/Internal/RoleInstanceEndpoint.php',
            'windowsazure\\serviceruntime\\internal\\roleinstancestatus' => '/ServiceRuntime/Internal/RoleInstanceStatus.php',
            'windowsazure\\serviceruntime\\internal\\runtimekernel' => '/ServiceRuntime/Internal/RuntimeKernel.php',
            'windowsazure\\serviceruntime\\internal\\runtimeversionmanager' => '/ServiceRuntime/Internal/RuntimeVersionManager.php',
            'windowsazure\\serviceruntime\\internal\\runtimeversionprotocolclient' => '/ServiceRuntime/Internal/RuntimeVersionProtocolClient.php',
            'windowsazure\\serviceruntime\\internal\\xmlcurrentstateserializer' => '/ServiceRuntime/Internal/XmlCurrentStateSerializer.php',
            'windowsazure\\serviceruntime\\internal\\xmlgoalstatedeserializer' => '/ServiceRuntime/Internal/XmlGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\internal\\xmlroleenvironmentdatadeserializer' => '/ServiceRuntime/Internal/XmlRoleEnvironmentDataDeserializer.php',
            'windowsazure\\serviceruntime\\roleenvironment' => '/ServiceRuntime/RoleEnvironment.php',
            'windowsazure\\table\\internal\\atomreaderwriter' => '/Table/Internal/AtomReaderWriter.php',
            'windowsazure\\table\\internal\\iatomreaderwriter' => '/Table/Internal/IAtomReaderWriter.php',
            'windowsazure\\table\\internal\\imimereaderwriter' => '/Table/Internal/IMimeReaderWriter.php',
            'windowsazure\\table\\internal\\itable' => '/Table/Internal/ITable.php',
            'windowsazure\\table\\internal\\mimereaderwriter' => '/Table/Internal/MimeReaderWriter.php',
            'windowsazure\\table\\models\\batcherror' => '/Table/Models/BatchError.php',
            'windowsazure\\table\\models\\batchoperation' => '/Table/Models/BatchOperation.php',
            'windowsazure\\table\\models\\batchoperationparametername' => '/Table/Models/BatchOperationParameterName.php',
            'windowsazure\\table\\models\\batchoperations' => '/Table/Models/BatchOperations.php',
            'windowsazure\\table\\models\\batchoperationtype' => '/Table/Models/BatchOperationType.php',
            'windowsazure\\table\\models\\batchresult' => '/Table/Models/BatchResult.php',
            'windowsazure\\table\\models\\deleteentityoptions' => '/Table/Models/DeleteEntityOptions.php',
            'windowsazure\\table\\models\\edmtype' => '/Table/Models/EdmType.php',
            'windowsazure\\table\\models\\entity' => '/Table/Models/Entity.php',
            'windowsazure\\table\\models\\filters\\binaryfilter' => '/Table/Models/Filters/BinaryFilter.php',
            'windowsazure\\table\\models\\filters\\constantfilter' => '/Table/Models/Filters/ConstantFilter.php',
            'windowsazure\\table\\models\\filters\\filter' => '/Table/Models/Filters/Filter.php',
            'windowsazure\\table\\models\\filters\\propertynamefilter' => '/Table/Models/Filters/PropertyNameFilter.php',
            'windowsazure\\table\\models\\filters\\querystringfilter' => '/Table/Models/Filters/QueryStringFilter.php',
            'windowsazure\\table\\models\\filters\\unaryfilter' => '/Table/Models/Filters/UnaryFilter.php',
            'windowsazure\\table\\models\\getentityresult' => '/Table/Models/GetEntityResult.php',
            'windowsazure\\table\\models\\gettableresult' => '/Table/Models/GetTableResult.php',
            'windowsazure\\table\\models\\insertentityresult' => '/Table/Models/InsertEntityResult.php',
            'windowsazure\\table\\models\\property' => '/Table/Models/Property.php',
            'windowsazure\\table\\models\\query' => '/Table/Models/Query.php',
            'windowsazure\\table\\models\\queryentitiesoptions' => '/Table/Models/QueryEntitiesOptions.php',
            'windowsazure\\table\\models\\queryentitiesresult' => '/Table/Models/QueryEntitiesResult.php',
            'windowsazure\\table\\models\\querytablesoptions' => '/Table/Models/QueryTablesOptions.php',
            'windowsazure\\table\\models\\querytablesresult' => '/Table/Models/QueryTablesResult.php',
            'windowsazure\\table\\models\\tableserviceoptions' => '/Table/Models/TableServiceOptions.php',
            'windowsazure\\table\\models\\updateentityresult' => '/Table/Models/UpdateEntityResult.php',
            'windowsazure\\table\\tablerestproxy' => '/Table/TableRestProxy.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
