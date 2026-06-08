<?php

namespace edgenextapisdk\Generated;

// Code generated from apidoc metadata. DO NOT EDIT.
class EdgeNextClient
{
    private $sdk;
    private $defaultHeaders = [];

    public function __construct($sdk, array $defaultHeaders = [])
    {
        $this->sdk = $sdk;
        $this->defaultHeaders = $defaultHeaders;
    }

    public function withDefaultHeader($key, $value)
    {
        $this->defaultHeaders[$key] = $value;
        return $this;
    }

    public function withLanguage($lang)
    {
        return $this->withDefaultHeader('X-Lang', $lang);
    }

    public function apiDefinitions()
    {
        return ApiDefinitions::all();
    }

    public function callApi($apiName, $request = null, $query = [], $body = [], $headers = [], $method = null)
    {
        $definition = ApiDefinitions::get($apiName);
        if (!$definition) {
            throw new \InvalidArgumentException('unknown EdgeNext API: ' . $apiName);
        }
        return $this->request($definition, $request, $query, $body, $headers, $method);
    }

    private function request($definition, $request = null, $query = [], $body = [], $headers = [], $method = null)
    {
        $selected = $method ? strtoupper($method) : strtoupper($definition['methods'][0]);
        $query = $query ?: [];
        $body = $body ?: [];
        $headers = array_merge($this->defaultHeaders, $headers ?: []);

        if ($request instanceof BaseRequest) {
            if ($request->getApiName() && $request->getApiName() !== $definition['api_name']) {
                throw new \InvalidArgumentException('request ' . $request->getApiName() . ' cannot be used for API ' . $definition['api_name']);
            }
            $query = array_merge($request->getQuery(), $query);
            $body = array_merge($request->getBody(), $body);
            $headers = array_merge($headers, $request->getHeaders());
            if (!$method && $request->getMethod()) {
                $selected = strtoupper($request->getMethod());
            }
        } elseif (is_array($request)) {
            if ($selected === 'GET') {
                $query = array_merge($request, $query);
            } else {
                $body = array_merge($request, $body);
            }
        } elseif ($request !== null) {
            throw new \InvalidArgumentException('request must be an array or BaseRequest');
        }

        if (!in_array($selected, $definition['methods'], true)) {
            throw new \InvalidArgumentException($definition['api_name'] . ' does not support ' . $selected);
        }
        if ($selected === 'GET' && $body) {
            $query = array_merge($body, $query);
            $body = [];
        }

        $api = self::apiPathToSdkApi($definition['path'], $this->sdk->getBaseApiUrl());
        $payload = [
            'url' => $api,
            'query' => $query,
            'body' => $body,
            'headers' => $headers,
        ];
        switch ($selected) {
            case 'GET':
                $response = $this->sdk->get($payload);
                break;
            case 'POST':
                $response = $this->sdk->post($payload);
                break;
            case 'PUT':
                $response = $this->sdk->put($payload);
                break;
            case 'PATCH':
                $response = $this->sdk->patch($payload);
                break;
            case 'DELETE':
                $response = $this->sdk->delete($payload);
                break;
            default:
                throw new \InvalidArgumentException('unsupported HTTP method: ' . $selected);
        }
        return $this->normalizeResponse($response);
    }

    private function normalizeResponse($response)
    {
        if (is_string($response)) {
            $decoded = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new ApiException(0, 'json decode error: ' . json_last_error_msg(), $response);
            }
            $response = $decoded;
        }
        if (!is_array($response)) {
            throw new ApiException(0, 'empty API response', $response);
        }
        if (isset($response['status']) && is_array($response['status'])) {
            $code = isset($response['status']['code']) ? (int)$response['status']['code'] : null;
            $message = isset($response['status']['message']) ? $response['status']['message'] : '';
            if ($code !== null && $code !== 1) {
                throw new ApiException($code, $message, $response);
            }
        }
        unset($response['code'], $response['message']);
        return $response;
    }

    public static function apiPathToSdkApi($path, $apiPre = '')
    {
        $route = ltrim(trim($path), '/');
        $parsed = parse_url($apiPre);
        $apiPrePath = isset($parsed['path']) ? trim(strtolower($parsed['path']), '/') : '';
        $parts = $apiPrePath === '' ? [] : explode('/', $apiPrePath);
        $count = count($parts);
        if ($count >= 2 && $parts[$count - 2] === 'api' && self::isVersionSegment($parts[$count - 1])) {
            $prefix = 'api/' . $parts[$count - 1] . '/';
            if (strpos(strtolower($route), $prefix) === 0) {
                return substr($route, strlen($prefix));
            }
        }
        if ($count >= 1 && $parts[$count - 1] === 'api' && strpos(strtolower($route), 'api/') === 0) {
            return substr($route, strlen('api/'));
        }
        return $route;
    }

    private static function isVersionSegment($segment)
    {
        return preg_match('/^v[0-9]+$/', $segment) === 1;
    }

    public function cdnHighDefenseIpGetArticleIp($request = [])
    {
        return $this->callApi("CdnHighDefenseIP_getArticleIP", $request);
    }

    public function dnsDomainGetDomainList($request = [])
    {
        return $this->callApi("DnsDomain_getDomainList", $request);
    }

    public function dnsDomainAddDomain($request = [])
    {
        return $this->callApi("DnsDomain_addDomain", $request);
    }

    public function dnsDomainBatchAddDomains($request = [])
    {
        return $this->callApi("DnsDomain_batchAddDomains", $request);
    }

    public function dnsDomainBatchDeleteDomains($request = [])
    {
        return $this->callApi("DnsDomain_batchDeleteDomains", $request);
    }

    public function dnsDomainGetDomainStat($request = [])
    {
        return $this->callApi("DnsDomain_getDomainStat", $request);
    }

    public function dnsDomainGetDomainServers($request = [])
    {
        return $this->callApi("DnsDomain_getDomainServers", $request);
    }

    public function dnsDomainGetTasksList($request = [])
    {
        return $this->callApi("DnsDomain_getTasksList", $request);
    }

    public function dnsDomainGetTaskDetail($request = [])
    {
        return $this->callApi("DnsDomain_getTaskDetail", $request);
    }

    public function cloudDnsDomainGroupGetGroupList($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_getGroupList", $request);
    }

    public function cloudDnsDomainGroupAddGroup($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_addGroup", $request);
    }

    public function cloudDnsDomainGroupUpdateGroup($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_updateGroup", $request);
    }

    public function cloudDnsDomainGroupDeleteGroup($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_deleteGroup", $request);
    }

    public function cloudDnsDomainGroupGetGroupRecordList($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_getGroupRecordList", $request);
    }

    public function cloudDnsDomainGroupSaveDomainToGroup($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_saveDomainToGroup", $request);
    }

    public function cloudDnsDomainGroupGetGroupDomainList($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_getGroupDomainList", $request);
    }

    public function cloudDnsDomainGroupGetGroupUndistributedDomainList($request = [])
    {
        return $this->callApi("CloudDns_DomainGroup_getGroupUndistributedDomainList", $request);
    }

    public function dnsDomainRecordsGetRecordTypes($request = [])
    {
        return $this->callApi("DnsDomainRecords_getRecordTypes", $request);
    }

    public function dnsDomainRecordsGetRecordList($request = [])
    {
        return $this->callApi("DnsDomainRecords_getRecordList", $request);
    }

    public function dnsDomainRecordsAddRecord($request = [])
    {
        return $this->callApi("DnsDomainRecords_addRecord", $request);
    }

    public function dnsDomainRecordsBatchAddRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_batchAddRecords", $request);
    }

    public function dnsDomainRecordsEditRecord($request = [])
    {
        return $this->callApi("DnsDomainRecords_editRecord", $request);
    }

    public function dnsDomainRecordsBatchPauseRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_batchPauseRecords", $request);
    }

    public function dnsDomainRecordsBatchEnableRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_batchEnableRecords", $request);
    }

    public function dnsDomainRecordsDeleteRecord($request = [])
    {
        return $this->callApi("DnsDomainRecords_deleteRecord", $request);
    }

    public function dnsDomainRecordsImportRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_importRecords", $request);
    }

    public function dnsDomainRecordsExportRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_exportRecords", $request);
    }

    public function dnsDomainRecordsGetLines($request = [])
    {
        return $this->callApi("DnsDomainRecords_getLines", $request);
    }

    public function dnsDomainRecordsBatchDeleteRecords($request = [])
    {
        return $this->callApi("DnsDomainRecords_batchDeleteRecords", $request);
    }

    public function dnsDomainRecordsGetRecordGroupsList($request = [])
    {
        return $this->callApi("DnsDomainRecords_getRecordGroupsList", $request);
    }

    public function dnsDomainRecordsAddRecordGroup($request = [])
    {
        return $this->callApi("DnsDomainRecords_addRecordGroup", $request);
    }

    public function dnsDomainRecordsAddRecordGroupRelations($request = [])
    {
        return $this->callApi("DnsDomainRecords_addRecordGroupRelations", $request);
    }

    public function dnsDomainRecordsDeleteRecordGroup($request = [])
    {
        return $this->callApi("DnsDomainRecords_deleteRecordGroup", $request);
    }

    public function userIpUserIpList($request = [])
    {
        return $this->callApi("UserIp_userIpList", $request);
    }

    public function userIpUserIpAdd($request = [])
    {
        return $this->callApi("UserIp_userIpAdd", $request);
    }

    public function userIpUserIpSave($request = [])
    {
        return $this->callApi("UserIp_userIpSave", $request);
    }

    public function userIpUserIpDel($request = [])
    {
        return $this->callApi("UserIp_userIpDel", $request);
    }

    public function userIpListUserIpItem($request = [])
    {
        return $this->callApi("UserIp_listUserIpItem", $request);
    }

    public function userIpAddUserIpItem($request = [])
    {
        return $this->callApi("UserIp_AddUserIpItem", $request);
    }

    public function userIpUpdateUserIpItem($request = [])
    {
        return $this->callApi("UserIp_UpdateUserIpItem", $request);
    }

    public function userIpBatchDeleteUserIpItem($request = [])
    {
        return $this->callApi("UserIp_BatchDeleteUserIpItem", $request);
    }

    public function userIpDeleteAllUserIpItem($request = [])
    {
        return $this->callApi("UserIp_DeleteAllUserIpItem", $request);
    }

    public function userIpCopyUserIp($request = [])
    {
        return $this->callApi("UserIp_CopyUserIp", $request);
    }

    public function userIpFileSaveIpItem($request = [])
    {
        return $this->callApi("UserIp_FileSaveIpItem", $request);
    }

    public function serviceBatchListTask($request = [])
    {
        return $this->callApi("service_batch_ListTask", $request);
    }

    public function serviceBatchListSubTask($request = [])
    {
        return $this->callApi("service_batch_ListSubTask", $request);
    }

    public function webCdnCleanCacheGetCacheList($request = [])
    {
        return $this->callApi("WebCdnCleanCache_getCacheList", $request);
    }

    public function webCdnCleanCacheSaveCache($request = [])
    {
        return $this->callApi("WebCdnCleanCache_saveCache", $request);
    }

    public function webCdnCleanCacheGetTaskList($request = [])
    {
        return $this->callApi("WebCdnCleanCache_getTaskList", $request);
    }

    public function webCdnCleanCacheGetTaskDetail($request = [])
    {
        return $this->callApi("WebCdnCleanCache_getTaskDetail", $request);
    }

    public function webCdnPreheatCacheGetPreheatCacheQuota($request = [])
    {
        return $this->callApi("WebCdnPreheatCache_getPreheatCacheQuota", $request);
    }

    public function webCdnPreheatCacheGetPreheatCacheList($request = [])
    {
        return $this->callApi("WebCdnPreheatCache_getPreheatCacheList", $request);
    }

    public function webCdnPreheatCacheSavePreheatCache($request = [])
    {
        return $this->callApi("WebCdnPreheatCache_savePreheatCache", $request);
    }

    public function oplogInfo($request = [])
    {
        return $this->callApi("Oplog_info", $request);
    }

    public function oplogMap($request = [])
    {
        return $this->callApi("Oplog_map", $request);
    }

    public function oplogGetOplogs($request = [])
    {
        return $this->callApi("Oplog_getOplogs", $request);
    }

    public function caCertificateSelfAddCa($request = [])
    {
        return $this->callApi("CaCertificateSelf_addCa", $request);
    }

    public function batchCaList($request = [])
    {
        return $this->callApi("Batch_caList", $request);
    }

    public function caCertificateSelfSaveTextCaInfo($request = [])
    {
        return $this->callApi("CaCertificateSelf_saveTextCaInfo", $request);
    }

    public function caCertificateSelfEditCaInfo($request = [])
    {
        return $this->callApi("CaCertificateSelf_editCaInfo", $request);
    }

    public function caCertificateSelfListCa($request = [])
    {
        return $this->callApi("CaCertificateSelf_listCa", $request);
    }

    public function caCertificateSelfCaExport($request = [])
    {
        return $this->callApi("CaCertificateSelf_caExport", $request);
    }

    public function caCertificateSelfBatchOperatSsl($request = [])
    {
        return $this->callApi("CaCertificateSelf_batchOperatSsl", $request);
    }

    public function caCertificateSelfDelCa($request = [])
    {
        return $this->callApi("CaCertificateSelf_delCa", $request);
    }

    public function caCertificateSelfGetCaDetail($request = [])
    {
        return $this->callApi("CaCertificateSelf_getCaDetail", $request);
    }

    public function caCertificateSelfEditCaName($request = [])
    {
        return $this->callApi("CaCertificateSelf_editCaName", $request);
    }

    public function caCertificateApplyAddApplyCa($request = [])
    {
        return $this->callApi("CaCertificateApply_addApplyCa", $request);
    }

    public function caCertificateApplyGetAddByNsSetting($request = [])
    {
        return $this->callApi("CaCertificateApply_getAddByNsSetting", $request);
    }

    public function domainGroupSaveGroup($request = [])
    {
        return $this->callApi("DomainGroup_saveGroup", $request);
    }

    public function domainGroupGetGroupList($request = [])
    {
        return $this->callApi("DomainGroup_getGroupList", $request);
    }

    public function domainGroupDelGroup($request = [])
    {
        return $this->callApi("DomainGroup_delGroup", $request);
    }

    public function domainGroupGetGroupDomainList($request = [])
    {
        return $this->callApi("DomainGroup_getGroupDomainList", $request);
    }

    public function domainGroupGgtUndistributedDomainList($request = [])
    {
        return $this->callApi("DomainGroup_ggtUndistributedDomainList", $request);
    }

    public function domainGroupAddGroup($request = [])
    {
        return $this->callApi("DomainGroup_addGroup", $request);
    }

    public function domainGroupSaveDomainToGroup($request = [])
    {
        return $this->callApi("DomainGroup_saveDomainToGroup", $request);
    }

    public function domainGroupGetGroupInfo($request = [])
    {
        return $this->callApi("DomainGroup_getGroupInfo", $request);
    }

    public function domainGroupMoveDomain($request = [])
    {
        return $this->callApi("DomainGroup_moveDomain", $request);
    }

    public function listDomains($request = [])
    {
        return $this->callApi("ListDomains", $request);
    }

    public function addDomains($request = [])
    {
        return $this->callApi("AddDomains", $request);
    }

    public function updateDomains($request = [])
    {
        return $this->callApi("UpdateDomains", $request);
    }

    public function bindDomainCert($request = [])
    {
        return $this->callApi("BindDomainCert", $request);
    }

    public function unBindDomainCert($request = [])
    {
        return $this->callApi("UnBindDomainCert", $request);
    }

    public function deleteDomains($request = [])
    {
        return $this->callApi("DeleteDomains", $request);
    }

    public function disableDomains($request = [])
    {
        return $this->callApi("DisableDomains", $request);
    }

    public function enableDomains($request = [])
    {
        return $this->callApi("EnableDomains", $request);
    }

    public function refreshDomainsAccess($request = [])
    {
        return $this->callApi("RefreshDomainsAccess", $request);
    }

    public function exportDomains($request = [])
    {
        return $this->callApi("ExportDomains", $request);
    }

    public function addOrigins($request = [])
    {
        return $this->callApi("AddOrigins", $request);
    }

    public function updateOrigins($request = [])
    {
        return $this->callApi("UpdateOrigins", $request);
    }

    public function deleteOrigins($request = [])
    {
        return $this->callApi("DeleteOrigins", $request);
    }

    public function listOrigins($request = [])
    {
        return $this->callApi("ListOrigins", $request);
    }

    public function switchDomainNodes($request = [])
    {
        return $this->callApi("SwitchDomainNodes", $request);
    }

    public function switchDomainAccessMode($request = [])
    {
        return $this->callApi("SwitchDomainAccessMode", $request);
    }

    public function updateDomainBaseSettings($request = [])
    {
        return $this->callApi("UpdateDomainBaseSettings", $request);
    }

    public function getDomainBaseSettings($request = [])
    {
        return $this->callApi("GetDomainBaseSettings", $request);
    }

    public function listBriefDomains($request = [])
    {
        return $this->callApi("ListBriefDomains", $request);
    }

    public function getDomainTemplates($request = [])
    {
        return $this->callApi("GetDomainTemplates", $request);
    }

    public function accessInfoDownload($request = [])
    {
        return $this->callApi("AccessInfoDownload", $request);
    }

    public function originGroupGetOriginGroupList($request = [])
    {
        return $this->callApi("OriginGroup_getOriginGroupList", $request);
    }

    public function originGroupGetOriginGroupInfo($request = [])
    {
        return $this->callApi("OriginGroup_getOriginGroupInfo", $request);
    }

    public function originGroupAddOriginGroup($request = [])
    {
        return $this->callApi("OriginGroup_addOriginGroup", $request);
    }

    public function originGroupUpdateOriginGroup($request = [])
    {
        return $this->callApi("OriginGroup_updateOriginGroup", $request);
    }

    public function originGroupDelOriginGroup($request = [])
    {
        return $this->callApi("OriginGroup_delOriginGroup", $request);
    }

    public function originGroupBindOriginGroupToDomains($request = [])
    {
        return $this->callApi("OriginGroup_bindOriginGroupToDomains", $request);
    }

    public function originGroupGetAllOriginGroups($request = [])
    {
        return $this->callApi("OriginGroup_getAllOriginGroups", $request);
    }

    public function originGroupCopyOriginGroup($request = [])
    {
        return $this->callApi("OriginGroup_copyOriginGroup", $request);
    }

    public function fireWallReportGetBlockList($request = [])
    {
        return $this->callApi("FireWallReport_getBlockList", $request);
    }

    public function fireWallReportGetBlockDetails($request = [])
    {
        return $this->callApi("FireWallReport_getBlockDetails", $request);
    }

    public function fireWallReportGetPackageBlockList($request = [])
    {
        return $this->callApi("FireWallReport_getPackageBlockList", $request);
    }

    public function fireWallReportGetPackageBlockDetails($request = [])
    {
        return $this->callApi("FireWallReport_getPackageBlockDetails", $request);
    }

    public function ccQpsMax($request = [])
    {
        return $this->callApi("cc_qps_max", $request);
    }

    public function ccAttackTimes($request = [])
    {
        return $this->callApi("cc_attack_times", $request);
    }

    public function ccTimesLine($request = [])
    {
        return $this->callApi("cc_times_line", $request);
    }

    public function ccReportStats($request = [])
    {
        return $this->callApi("cc_report_stats", $request);
    }

    public function cdnDomainUaispDistribute($request = [])
    {
        return $this->callApi("cdn_domain_uaisp_distribute", $request);
    }

    public function cdnDomainCountryDistribute($request = [])
    {
        return $this->callApi("cdn_domain_country_distribute", $request);
    }

    public function cdnDomainProvinceDistribute($request = [])
    {
        return $this->callApi("cdn_domain_province_distribute", $request);
    }

    public function cdnDomainStatusDistribute($request = [])
    {
        return $this->callApi("cdn_domain_status_distribute", $request);
    }

    public function cdnDomainNodeFlowBandwidth($request = [])
    {
        return $this->callApi("cdn_domain_node_flow_bandwidth", $request);
    }

    public function cdnDomainNodeFlowBandwidthCn2($request = [])
    {
        return $this->callApi("cdn_domain_node_flow_bandwidth_cn2", $request);
    }

    public function cdnDomainNodeFlowBandwidthNode($request = [])
    {
        return $this->callApi("cdn_domain_node_flow_bandwidth_node", $request);
    }

    public function domainTimes($request = [])
    {
        return $this->callApi("domainTimes", $request);
    }

    public function domainQps($request = [])
    {
        return $this->callApi("domainQps", $request);
    }

    public function cdnDomainFlowLine($request = [])
    {
        return $this->callApi("cdn_domain_flow_line", $request);
    }

    public function cdnDomainBandwidthLine($request = [])
    {
        return $this->callApi("cdn_domain_bandwidth_line", $request);
    }

    public function cdnDomainBandwidth95($request = [])
    {
        return $this->callApi("cdn_domain_bandwidth_95", $request);
    }

    public function cdnDomainPvtimes($request = [])
    {
        return $this->callApi("cdn_domain_pvtimes", $request);
    }

    public function cdnDomainFlowTop($request = [])
    {
        return $this->callApi("cdn_domain_flow_top", $request);
    }

    public function cdnDomainBandwidthTop($request = [])
    {
        return $this->callApi("cdn_domain_bandwidth_top", $request);
    }

    public function cdnDomainTimesTop($request = [])
    {
        return $this->callApi("cdn_domain_times_top", $request);
    }

    public function cdnDomainTimesTopEs($request = [])
    {
        return $this->callApi("cdn_domain_times_top_es", $request);
    }

    public function cdnDomainUrlTop($request = [])
    {
        return $this->callApi("cdn_domain_url_top", $request);
    }

    public function cdnDomainRefererTop($request = [])
    {
        return $this->callApi("cdn_domain_referer_top", $request);
    }

    public function cdnDomainStatusTopDownload($request = [])
    {
        return $this->callApi("cdn_domain_status_top_download", $request);
    }

    public function cdnDomainBandwidthDownload($request = [])
    {
        return $this->callApi("cdn_domain_bandwidth_download", $request);
    }

    public function cdnDomainFlowDownload($request = [])
    {
        return $this->callApi("cdn_domain_flow_download", $request);
    }

    public function tcpBandwidth($request = [])
    {
        return $this->callApi("tcp_bandwidth", $request);
    }

    public function tcpCcFlaw($request = [])
    {
        return $this->callApi("tcp_cc_flaw", $request);
    }

    public function wafAttackTimes($request = [])
    {
        return $this->callApi("waf_attack_times", $request);
    }

    public function wafReportStats($request = [])
    {
        return $this->callApi("waf_report_stats", $request);
    }

    public function wafWebshellEventList($request = [])
    {
        return $this->callApi("waf_webshell_event_list", $request);
    }

    public function wafWebshellEventDetail($request = [])
    {
        return $this->callApi("waf_webshell_event_detail", $request);
    }

    public function wafAttackEventList($request = [])
    {
        return $this->callApi("waf_attack_event_list", $request);
    }

    public function wafAttackEventDetail($request = [])
    {
        return $this->callApi("waf_attack_event_detail", $request);
    }

    public function wafScanEventList($request = [])
    {
        return $this->callApi("waf_scan_event_list", $request);
    }

    public function wafScanEventDetail($request = [])
    {
        return $this->callApi("waf_scan_event_detail", $request);
    }

    public function wafTypeLine($request = [])
    {
        return $this->callApi("waf_type_line", $request);
    }

    public function logDownloadTaskTaskList($request = [])
    {
        return $this->callApi("LogDownloadTask_taskList", $request);
    }

    public function logDownloadTaskAddTask($request = [])
    {
        return $this->callApi("LogDownloadTask_addTask", $request);
    }

    public function logDownloadTaskCancelTask($request = [])
    {
        return $this->callApi("LogDownloadTask_cancelTask", $request);
    }

    public function logDownloadTaskBatchCancelTask($request = [])
    {
        return $this->callApi("LogDownloadTask_batchCancelTask", $request);
    }

    public function logDownloadTaskDeleteTask($request = [])
    {
        return $this->callApi("LogDownloadTask_deleteTask", $request);
    }

    public function logDownloadTaskBatchDeleteTask($request = [])
    {
        return $this->callApi("LogDownloadTask_batchDeleteTask", $request);
    }

    public function logDownloadTaskRegenerateTask($request = [])
    {
        return $this->callApi("LogDownloadTask_regenerateTask", $request);
    }

    public function logDownloadFieldConfDownloadFields($request = [])
    {
        return $this->callApi("LogDownloadFieldConf_downloadFields", $request);
    }

    public function logDownloadTemplateTemplateList($request = [])
    {
        return $this->callApi("LogDownloadTemplate_templateList", $request);
    }

    public function logDownloadTemplateGetTemplateDomainList($request = [])
    {
        return $this->callApi("LogDownloadTemplate_getTemplateDomainList", $request);
    }

    public function logDownloadTemplateAddTemplate($request = [])
    {
        return $this->callApi("LogDownloadTemplate_addTemplate", $request);
    }

    public function logDownloadTemplateSaveTemplate($request = [])
    {
        return $this->callApi("LogDownloadTemplate_saveTemplate", $request);
    }

    public function logDownloadTemplateDelTemplate($request = [])
    {
        return $this->callApi("LogDownloadTemplate_delTemplate", $request);
    }

    public function logDownloadTemplateBatchDelTemplate($request = [])
    {
        return $this->callApi("LogDownloadTemplate_batchDelTemplate", $request);
    }

    public function logDownloadTemplateChangeStatus($request = [])
    {
        return $this->callApi("LogDownloadTemplate_changeStatus", $request);
    }

    public function logDownloadTemplateBatchChangeStatus($request = [])
    {
        return $this->callApi("LogDownloadTemplate_batchChangeStatus", $request);
    }

    public function logDownloadTemplateAllTemplate($request = [])
    {
        return $this->callApi("LogDownloadTemplate_allTemplate", $request);
    }

    public function logDownloadTemplateAllTemplateGroup($request = [])
    {
        return $this->callApi("LogDownloadTemplate_allTemplateGroup", $request);
    }

    public function tjkdPlusPackageGetMemberPackageList($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getMemberPackageList", $request);
    }

    public function tjkdPlusPackageGetAllPackage($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getAllPackage", $request);
    }

    public function tjkdPlusPackageGetPackageInfo($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getPackageInfo", $request);
    }

    public function tjkdPlusPackageGetPackageIpList($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getPackageIpList", $request);
    }

    public function tjkdPlusPackageGetPackageOverview($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getPackageOverview", $request);
    }

    public function tjkdPlusPackageGetPackagePortList($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getPackagePortList", $request);
    }

    public function tjkdPlusPackageSavePackage($request = [])
    {
        return $this->callApi("TjkdPlusPackage_savePackage", $request);
    }

    public function tjkdPlusPackageSavePackageHealthyConf($request = [])
    {
        return $this->callApi("TjkdPlusPackage_savePackageHealthyConf", $request);
    }

    public function tjkdPlusForwardRuleSavePlusForwardRule($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_savePlusForwardRule", $request);
    }

    public function tjkdPlusForwardRuleBatchAddPlusForwardRule($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_batchAddPlusForwardRule", $request);
    }

    public function tjkdPlusForwardRuleBatchSavePlusForwardRule($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_batchSavePlusForwardRule", $request);
    }

    public function tjkdPlusForwardRuleDelPlusForwardRule($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_delPlusForwardRule", $request);
    }

    public function tjkdPlusForwardRuleGetPlusForwardRuleList($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_getPlusForwardRuleList", $request);
    }

    public function tjkdPlusForwardRuleGetBatchPlusForwardRuleInfo($request = [])
    {
        return $this->callApi("TjkdPlusForwardRule_getBatchPlusForwardRuleInfo", $request);
    }

    public function tjkdPlusPackageGetPackageDomainList($request = [])
    {
        return $this->callApi("TjkdPlusPackage_getPackageDomainList", $request);
    }

    public function tjkdPlusDomainGetTjkdPlusDomainList($request = [])
    {
        return $this->callApi("TjkdPlusDomain_getTjkdPlusDomainList", $request);
    }

    public function tjkdPlusDomainAddTjkdPlusDomain($request = [])
    {
        return $this->callApi("TjkdPlusDomain_addTjkdPlusDomain", $request);
    }

    public function tjkdPlusDomainDelTjkdPlusDomain($request = [])
    {
        return $this->callApi("TjkdPlusDomain_delTjkdPlusDomain", $request);
    }

    public function networkSpeedGetCacheRuleList($request = [])
    {
        return $this->callApi("NetworkSpeedGetCacheRuleList", $request);
    }

    public function networkSpeedCreateCacheRule($request = [])
    {
        return $this->callApi("NetworkSpeedCreateCacheRule", $request);
    }

    public function networkSpeedUpdateCacheRule($request = [])
    {
        return $this->callApi("NetworkSpeedUpdateCacheRule", $request);
    }

    public function networkSpeedUpdateCacheRuleConfig($request = [])
    {
        return $this->callApi("NetworkSpeedUpdateCacheRuleConfig", $request);
    }

    public function networkSpeedUpdateCacheRuleStatus($request = [])
    {
        return $this->callApi("NetworkSpeedUpdateCacheRuleStatus", $request);
    }

    public function networkSpeedSortCacheRules($request = [])
    {
        return $this->callApi("NetworkSpeedSortCacheRules", $request);
    }

    public function networkSpeedGetGlobalCacheConfig($request = [])
    {
        return $this->callApi("NetworkSpeedGetGlobalCacheConfig", $request);
    }

    public function networkSpeedDeleteCacheRule($request = [])
    {
        return $this->callApi("NetworkSpeedDeleteCacheRule", $request);
    }

    public function networkSpeedGetTemplateConfig($request = [])
    {
        return $this->callApi("NetworkSpeedGetTemplateConfig", $request);
    }

    public function networkSpeedUpdateTemplateConfig($request = [])
    {
        return $this->callApi("NetworkSpeedUpdateTemplateConfig", $request);
    }

    public function networkSpeedGetRules($request = [])
    {
        return $this->callApi("NetworkSpeedGetRules", $request);
    }

    public function networkSpeedCreateRule($request = [])
    {
        return $this->callApi("NetworkSpeedCreateRule", $request);
    }

    public function networkSpeedDeleteRule($request = [])
    {
        return $this->callApi("NetworkSpeedDeleteRule", $request);
    }

    public function networkSpeedSortRules($request = [])
    {
        return $this->callApi("NetworkSpeedSortRules", $request);
    }

    public function networkSpeedUpdateRule($request = [])
    {
        return $this->callApi("NetworkSpeedUpdateRule", $request);
    }

    public function updateRuleTemplate($request = [])
    {
        return $this->callApi("UpdateRuleTemplate", $request);
    }

    public function deleteRuleTemplate($request = [])
    {
        return $this->callApi("DeleteRuleTemplate", $request);
    }

    public function getRuleTemplateList($request = [])
    {
        return $this->callApi("GetRuleTemplateList", $request);
    }

    public function unbindRuleTemplate($request = [])
    {
        return $this->callApi("UnbindRuleTemplate", $request);
    }

    public function bindRuleTemplate($request = [])
    {
        return $this->callApi("BindRuleTemplate", $request);
    }

    public function listRuleTpsDomains($request = [])
    {
        return $this->callApi("ListRuleTpsDomains", $request);
    }

    public function createRuleTemplate($request = [])
    {
        return $this->callApi("CreateRuleTemplate", $request);
    }

    public function switchDomainTemplate($request = [])
    {
        return $this->callApi("SwitchDomainTemplate", $request);
    }

    public function firewallPageCfg($request = [])
    {
        return $this->callApi("Firewall_pageCfg", $request);
    }

    public function firewallPageCfgHwws($request = [])
    {
        return $this->callApi("Firewall_pageCfgHwws", $request);
    }

    public function firewallSavePolicy($request = [])
    {
        return $this->callApi("Firewall_savePolicy", $request);
    }

    public function firewallGetPolicy($request = [])
    {
        return $this->callApi("Firewall_getPolicy", $request);
    }

    public function firewallGetPolicyByCode($request = [])
    {
        return $this->callApi("Firewall_getPolicyByCode", $request);
    }

    public function firewallStatsPolicy($request = [])
    {
        return $this->callApi("Firewall_statsPolicy", $request);
    }

    public function firewallOpen($request = [])
    {
        return $this->callApi("Firewall_open", $request);
    }

    public function firewallStop($request = [])
    {
        return $this->callApi("Firewall_stop", $request);
    }

    public function firewallDelete($request = [])
    {
        return $this->callApi("Firewall_delete", $request);
    }

    public function firewallSort($request = [])
    {
        return $this->callApi("Firewall_sort", $request);
    }

    public function firewallGetsPolicyByMainid($request = [])
    {
        return $this->callApi("Firewall_getsPolicyByMainid", $request);
    }

    public function firewallGetsPolicyByPackageid($request = [])
    {
        return $this->callApi("Firewall_getsPolicyByPackageid", $request);
    }

    public function firewallSavePolicyGroup($request = [])
    {
        return $this->callApi("Firewall_savePolicyGroup", $request);
    }

    public function firewallGetsPolicyGroupByDomainid($request = [])
    {
        return $this->callApi("Firewall_getsPolicyGroupByDomainid", $request);
    }

    public function firewallStopGroup($request = [])
    {
        return $this->callApi("Firewall_stopGroup", $request);
    }

    public function firewallOpenGroup($request = [])
    {
        return $this->callApi("Firewall_openGroup", $request);
    }

    public function firewallDeleteGroup($request = [])
    {
        return $this->callApi("Firewall_deleteGroup", $request);
    }

    public function firewallSortGroup($request = [])
    {
        return $this->callApi("Firewall_sortGroup", $request);
    }

    public function firewallGetsPolicyByGroupId($request = [])
    {
        return $this->callApi("Firewall_getsPolicyByGroupId", $request);
    }

    public function getPolicyGroupTpl($request = [])
    {
        return $this->callApi("getPolicyGroupTPL", $request);
    }

    public function getDdosProtectionConfig($request = [])
    {
        return $this->callApi("GetDdosProtectionConfig", $request);
    }

    public function updateDdosProtectionConfig($request = [])
    {
        return $this->callApi("UpdateDdosProtectionConfig", $request);
    }

    public function getWafRuleConfig($request = [])
    {
        return $this->callApi("GetWafRuleConfig", $request);
    }

    public function updateWafRuleConfig($request = [])
    {
        return $this->callApi("UpdateWafRuleConfig", $request);
    }

    public function getMemberGlobalTemplate($request = [])
    {
        return $this->callApi("GetMemberGlobalTemplate", $request);
    }

    public function createTemplate($request = [])
    {
        return $this->callApi("CreateTemplate", $request);
    }

    public function createDomainTemplate($request = [])
    {
        return $this->callApi("CreateDomainTemplate", $request);
    }

    public function getTemplateList($request = [])
    {
        return $this->callApi("GetTemplateList", $request);
    }

    public function getTemplateBindDomainList($request = [])
    {
        return $this->callApi("GetTemplateBindDomainList", $request);
    }

    public function bindTemplateDomain($request = [])
    {
        return $this->callApi("BindTemplateDomain", $request);
    }

    public function deleteTemplate($request = [])
    {
        return $this->callApi("DeleteTemplate", $request);
    }

    public function batchConfigTemplate($request = [])
    {
        return $this->callApi("BatchConfigTemplate", $request);
    }

    public function iota($request = [])
    {
        return $this->callApi("Iota", $request);
    }

    public function getUnboundTemplateDomainList($request = [])
    {
        return $this->callApi("GetUnboundTemplateDomainList", $request);
    }

    public function editTemplate($request = [])
    {
        return $this->callApi("EditTemplate", $request);
    }

    public function firewallSavePolicyGroupRegionalShielding($request = [])
    {
        return $this->callApi("Firewall_savePolicyGroupRegionalShielding", $request);
    }

    public function firewallSavePolicyGroupAntiLeech($request = [])
    {
        return $this->callApi("Firewall_savePolicyGroupAntiLeech", $request);
    }

    public function tjkdappsaveFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappsaveFirewallPolicy", $request);
    }

    public function tjkdappsortFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappsortFirewallPolicy", $request);
    }

    public function tjkdappopenFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappopenFirewallPolicy", $request);
    }

    public function tjkdappstopFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappstopFirewallPolicy", $request);
    }

    public function tjkdappgetFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappgetFirewallPolicy", $request);
    }

    public function tjkdappdeleteFirewallPolicy($request = [])
    {
        return $this->callApi("TjkdappdeleteFirewallPolicy", $request);
    }

    public function addForwardRule($request = [])
    {
        return $this->callApi("addForwardRule", $request);
    }

    public function deleteForwardRule($request = [])
    {
        return $this->callApi("deleteForwardRule", $request);
    }

    public function editRule($request = [])
    {
        return $this->callApi("editRule", $request);
    }

    public function ruleList($request = [])
    {
        return $this->callApi("ruleList", $request);
    }

    public function getRuleInfo($request = [])
    {
        return $this->callApi("getRuleInfo", $request);
    }

    public function tijkdappListPackage($request = [])
    {
        return $this->callApi("TIJKDAPP_ListPackage", $request);
    }

    public function tijkdappSavePackage($request = [])
    {
        return $this->callApi("TIJKDAPP_SavePackage", $request);
    }

    public function getChannelList($request = [])
    {
        return $this->callApi("getChannelList", $request);
    }

    public function apiNameV5($request = [])
    {
        return $this->callApi("api_name_v5", $request);
    }
}
