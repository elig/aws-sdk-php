<?php
// This file was auto-generated from sdk-root/src/data/codeguruprofiler/2019-07-18/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>This section provides documentation for the Amazon CodeGuru Profiler API operations.</p>', 'operations' => [ 'ConfigureAgent' => '<p/>', 'CreateProfilingGroup' => '<p>Creates a profiling group.</p>', 'DeleteProfilingGroup' => '<p>Deletes a profiling group.</p>', 'DescribeProfilingGroup' => '<p>Describes a profiling group.</p>', 'GetProfile' => '<p>Gets the aggregated profile of a profiling group for the specified time range. If the requested time range does not align with the available aggregated profiles, it is expanded to attain alignment. If aggregated profiles are available only for part of the period requested, the profile is returned from the earliest available to the latest within the requested time range. </p> <p>For example, if the requested time range is from 00:00 to 00:20 and the available profiles are from 00:15 to 00:25, the returned profile will be from 00:15 to 00:20. </p> <p>You must specify exactly two of the following parameters: <code>startTime</code>, <code>period</code>, and <code>endTime</code>. </p>', 'ListProfileTimes' => '<p>List the start times of the available aggregated profiles of a profiling group for an aggregation period within the specified time range.</p>', 'ListProfilingGroups' => '<p>Lists profiling groups.</p>', 'PostAgentProfile' => '<p/>', 'UpdateProfilingGroup' => '<p>Updates a profiling group.</p>', ], 'shapes' => [ 'AgentConfiguration' => [ 'base' => '<p/>', 'refs' => [ 'ConfigureAgentResponse$configuration' => '<p/>', ], ], 'AgentOrchestrationConfig' => [ 'base' => '<p/>', 'refs' => [ 'CreateProfilingGroupRequest$agentOrchestrationConfig' => '<p>The agent orchestration configuration.</p>', 'ProfilingGroupDescription$agentOrchestrationConfig' => '<p/>', 'UpdateProfilingGroupRequest$agentOrchestrationConfig' => '<p/>', ], ], 'AgentProfile' => [ 'base' => NULL, 'refs' => [ 'PostAgentProfileRequest$agentProfile' => '<p/>', ], ], 'AggregatedProfile' => [ 'base' => NULL, 'refs' => [ 'GetProfileResponse$profile' => '<p>Information about the profile.</p>', ], ], 'AggregatedProfileTime' => [ 'base' => '<p>Information about the time range of the latest available aggregated profile.</p>', 'refs' => [ 'ProfilingStatus$latestAggregatedProfile' => '<p>The latest aggregated profile</p>', ], ], 'AggregationPeriod' => [ 'base' => NULL, 'refs' => [ 'AggregatedProfileTime$period' => '<p>The time period.</p>', 'ListProfileTimesRequest$period' => '<p>The aggregation period.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'AgentConfiguration$shouldProfile' => '<p/>', 'AgentOrchestrationConfig$profilingEnabled' => '<p/>', 'ListProfilingGroupsRequest$includeDescription' => '<p>A Boolean value indicating whether to include a description.</p>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateProfilingGroupRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p> <p>This parameter specifies a unique identifier for the new profiling group that helps ensure idempotency.</p>', 'PostAgentProfileRequest$profileToken' => '<p/>', ], ], 'ConfigureAgentRequest' => [ 'base' => '<p>The structure representing the configureAgentRequest.</p>', 'refs' => [], ], 'ConfigureAgentResponse' => [ 'base' => '<p>The structure representing the configureAgentResponse.</p>', 'refs' => [], ], 'ConflictException' => [ 'base' => '<p>The requested operation would cause a conflict with the current state of a service resource associated with the request. Resolve the conflict before retrying this request. </p>', 'refs' => [], ], 'CreateProfilingGroupRequest' => [ 'base' => '<p>The structure representing the createProfiliingGroupRequest.</p>', 'refs' => [], ], 'CreateProfilingGroupResponse' => [ 'base' => '<p>The structure representing the createProfilingGroupResponse.</p>', 'refs' => [], ], 'DeleteProfilingGroupRequest' => [ 'base' => '<p>The structure representing the deleteProfilingGroupRequest.</p>', 'refs' => [], ], 'DeleteProfilingGroupResponse' => [ 'base' => '<p>The structure representing the deleteProfilingGroupResponse.</p>', 'refs' => [], ], 'DescribeProfilingGroupRequest' => [ 'base' => '<p>The structure representing the describeProfilingGroupRequest.</p>', 'refs' => [], ], 'DescribeProfilingGroupResponse' => [ 'base' => '<p>The structure representing the describeProfilingGroupResponse.</p>', 'refs' => [], ], 'FleetInstanceId' => [ 'base' => NULL, 'refs' => [ 'ConfigureAgentRequest$fleetInstanceId' => '<p/>', ], ], 'GetProfileRequest' => [ 'base' => '<p>The structure representing the getProfileRequest.</p>', 'refs' => [], ], 'GetProfileResponse' => [ 'base' => '<p>The structure representing the getProfileResponse.</p>', 'refs' => [], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'AgentConfiguration$periodInSeconds' => '<p/>', ], ], 'InternalServerException' => [ 'base' => '<p>The server encountered an internal error and is unable to complete the request.</p>', 'refs' => [], ], 'ListProfileTimesRequest' => [ 'base' => '<p>The structure representing the listProfileTimesRequest.</p>', 'refs' => [], ], 'ListProfileTimesResponse' => [ 'base' => '<p>The structure representing the listProfileTimesResponse.</p>', 'refs' => [], ], 'ListProfilingGroupsRequest' => [ 'base' => '<p>The structure representing the listProfilingGroupsRequest.</p>', 'refs' => [], ], 'ListProfilingGroupsResponse' => [ 'base' => '<p>The structure representing the listProfilingGroupsResponse.</p>', 'refs' => [], ], 'MaxDepth' => [ 'base' => NULL, 'refs' => [ 'GetProfileRequest$maxDepth' => '<p>The maximum depth of the graph.</p>', ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListProfileTimesRequest$maxResults' => '<p>The maximum number of profile time results returned by <code>ListProfileTimes</code> in paginated output. When this parameter is used, <code>ListProfileTimes</code> only returns <code>maxResults</code> results in a single page with a <code>nextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>ListProfileTimes</code> request with the returned <code>nextToken</code> value. </p>', 'ListProfilingGroupsRequest$maxResults' => '<p>The maximum number of profiling groups results returned by <code>ListProfilingGroups</code> in paginated output. When this parameter is used, <code>ListProfilingGroups</code> only returns <code>maxResults</code> results in a single page along with a <code>nextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>ListProfilingGroups</code> request with the returned <code>nextToken</code> value. </p>', ], ], 'OrderBy' => [ 'base' => NULL, 'refs' => [ 'ListProfileTimesRequest$orderBy' => '<p>The order (ascending or descending by start time of the profile) to use when listing profiles. Defaults to <code>TIMESTAMP_DESCENDING</code>. </p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'ListProfileTimesRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>ListProfileTimes</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value. </p> <note> <p>This token should be treated as an opaque identifier that is only used to retrieve the next items in a list and not for other programmatic purposes.</p> </note>', 'ListProfileTimesResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>ListProfileTimes</code> request. When the results of a <code>ListProfileTimes</code> request exceed <code>maxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return. </p>', 'ListProfilingGroupsRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>ListProfilingGroups</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value. </p> <note> <p>This token should be treated as an opaque identifier that is only used to retrieve the next items in a list and not for other programmatic purposes.</p> </note>', 'ListProfilingGroupsResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>ListProfilingGroups</code> request. When the results of a <code>ListProfilingGroups</code> request exceed <code>maxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return. </p>', ], ], 'Period' => [ 'base' => NULL, 'refs' => [ 'GetProfileRequest$period' => '<p>The period of the profile to get. The time range must be in the past and not longer than one week. </p> <p>You must specify exactly two of the following parameters: <code>startTime</code>, <code>period</code>, and <code>endTime</code>. </p>', ], ], 'PostAgentProfileRequest' => [ 'base' => '<p>The structure representing the postAgentProfileRequest.</p>', 'refs' => [], ], 'PostAgentProfileResponse' => [ 'base' => '<p>The structure representing the postAgentProfileResponse.</p>', 'refs' => [], ], 'ProfileTime' => [ 'base' => '<p>Information about the profile time.</p>', 'refs' => [ 'ProfileTimes$member' => NULL, ], ], 'ProfileTimes' => [ 'base' => NULL, 'refs' => [ 'ListProfileTimesResponse$profileTimes' => '<p>The list of start times of the available profiles for the aggregation period in the specified time range. </p>', ], ], 'ProfilingGroupArn' => [ 'base' => NULL, 'refs' => [ 'ProfilingGroupDescription$arn' => '<p>The Amazon Resource Name (ARN) identifying the profiling group.</p>', ], ], 'ProfilingGroupDescription' => [ 'base' => '<p>The description of a profiling group.</p>', 'refs' => [ 'CreateProfilingGroupResponse$profilingGroup' => '<p>Information about the new profiling group</p>', 'DescribeProfilingGroupResponse$profilingGroup' => '<p>Information about a profiling group.</p>', 'ProfilingGroupDescriptions$member' => NULL, 'UpdateProfilingGroupResponse$profilingGroup' => '<p>Updated information about the profiling group.</p>', ], ], 'ProfilingGroupDescriptions' => [ 'base' => NULL, 'refs' => [ 'ListProfilingGroupsResponse$profilingGroups' => '<p>Information about profiling groups.</p>', ], ], 'ProfilingGroupName' => [ 'base' => NULL, 'refs' => [ 'ConfigureAgentRequest$profilingGroupName' => '<p/>', 'CreateProfilingGroupRequest$profilingGroupName' => '<p>The name of the profiling group.</p>', 'DeleteProfilingGroupRequest$profilingGroupName' => '<p>The profiling group name to delete.</p>', 'DescribeProfilingGroupRequest$profilingGroupName' => '<p>The profiling group name.</p>', 'GetProfileRequest$profilingGroupName' => '<p>The name of the profiling group to get.</p>', 'ListProfileTimesRequest$profilingGroupName' => '<p>The name of the profiling group.</p>', 'PostAgentProfileRequest$profilingGroupName' => '<p/>', 'ProfilingGroupDescription$name' => '<p>The name of the profiling group.</p>', 'ProfilingGroupNames$member' => NULL, 'UpdateProfilingGroupRequest$profilingGroupName' => '<p>The name of the profiling group to update.</p>', ], ], 'ProfilingGroupNames' => [ 'base' => NULL, 'refs' => [ 'ListProfilingGroupsResponse$profilingGroupNames' => '<p>Information about profiling group names.</p>', ], ], 'ProfilingStatus' => [ 'base' => '<p>Information about the profiling status.</p>', 'refs' => [ 'ProfilingGroupDescription$profilingStatus' => '<p>The status of the profiling group.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The resource specified in the request does not exist.</p>', 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>You have exceeded your service quota. To perform the requested action, remove some of the relevant resources, or use <a href="https://docs.aws.amazon.com/servicequotas/latest/userguide/intro.html">Service Quotas</a> to request a service quota increase. </p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'ConflictException$message' => NULL, 'GetProfileRequest$accept' => '<p>The format of the profile to return. You can choose <code>application/json</code> or the default <code>application/x-amzn-ion</code>. </p>', 'GetProfileResponse$contentEncoding' => '<p>The content encoding of the profile.</p>', 'GetProfileResponse$contentType' => '<p>The content type of the profile in the payload. It is either <code>application/json</code> or the default <code>application/x-amzn-ion</code>.</p>', 'InternalServerException$message' => NULL, 'PostAgentProfileRequest$contentType' => '<p/>', 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ThrottlingException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p>The request was denied due to request throttling.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'AggregatedProfileTime$start' => '<p>The start time.</p>', 'GetProfileRequest$endTime' => '<p/> <p>You must specify exactly two of the following parameters: <code>startTime</code>, <code>period</code>, and <code>endTime</code>. </p>', 'GetProfileRequest$startTime' => '<p>The start time of the profile to get.</p> <p>You must specify exactly two of the following parameters: <code>startTime</code>, <code>period</code>, and <code>endTime</code>. </p>', 'ListProfileTimesRequest$endTime' => '<p>The end time of the time range from which to list the profiles.</p>', 'ListProfileTimesRequest$startTime' => '<p>The start time of the time range from which to list the profiles.</p>', 'ProfileTime$start' => '<p>The start time of the profile.</p>', 'ProfilingGroupDescription$createdAt' => '<p>The time, in milliseconds since the epoch, when the profiling group was created.</p>', 'ProfilingGroupDescription$updatedAt' => '<p>The time, in milliseconds since the epoch, when the profiling group was last updated.</p>', 'ProfilingStatus$latestAgentOrchestratedAt' => '<p>The time, in milliseconds since the epoch, when the latest agent was orchestrated.</p>', 'ProfilingStatus$latestAgentProfileReportedAt' => '<p>The time, in milliseconds since the epoch, when the latest agent was reported..</p>', ], ], 'UpdateProfilingGroupRequest' => [ 'base' => '<p>The structure representing the updateProfilingGroupRequest.</p>', 'refs' => [], ], 'UpdateProfilingGroupResponse' => [ 'base' => '<p>The structure representing the updateProfilingGroupResponse.</p>', 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The parameter is not valid.</p>', 'refs' => [], ], ],];
