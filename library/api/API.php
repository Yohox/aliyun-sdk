<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 10:47
 */

namespace aliyun\sdk\api;

use aliyun\sdk\api\request\Api\AbolishApi;
use aliyun\sdk\api\request\Api\CreateApi;
use aliyun\sdk\api\request\Api\DeleteApi;
use aliyun\sdk\api\request\Api\DeployApi;
use aliyun\sdk\api\request\Api\ModifyApi;
use aliyun\sdk\api\request\Api\SwitchApi;
use aliyun\sdk\api\request\Domain\DeleteDomain;
use aliyun\sdk\api\request\Domain\DeleteDomainCertificate;
use aliyun\sdk\api\request\Domain\DescribeDomain;
use aliyun\sdk\api\request\Domain\ReactivateDomain;
use aliyun\sdk\api\request\Domain\SetDomain;
use aliyun\sdk\api\request\Domain\SetDomainCertificate;
use aliyun\sdk\api\request\Group\CreateApiGroup;
use aliyun\sdk\api\request\Group\CreateApiStageVariable;
use aliyun\sdk\api\request\Group\DeleteApiGroup;
use aliyun\sdk\api\request\Group\DeleteApiStageVariable;
use aliyun\sdk\api\request\Group\DescribeApiGroup;
use aliyun\sdk\api\request\Group\DescribeApiGroups;
use aliyun\sdk\api\request\Group\DescribeApiStage;
use aliyun\sdk\api\request\Group\ModifyApiGroup;

/**
 * Class API
 * API Document : https://help.aliyun.com/document_detail/43590.html
 * @package aliyun\sdk\api
 */
class API
{
    /********************************** Group **************************************************/

    /**
     * 创建 API 分组
     * @param $group_name
     * @param $description
     * @return CreateApiGroup
     */
    public static function CreateApiGroup($group_name, $description){
        return (new CreateApiGroup())->setGroupName($group_name)->setDescription($description);
    }

    /**
     * 修改 API 分组
     * @param $group_id
     * @return ModifyApiGroup
     */
    public static function ModifyApiGroup($group_id){
        return (new ModifyApiGroup())->setGroupId($group_id);
    }

    /**
     * 删除 API 分组
     * @param $group_id
     * @return DeleteApiGroup
     */
    public static function DeleteApiGroup($group_id){
        return (new DeleteApiGroup())->setGroupId($group_id);
    }

    /**
     * 创建环境变量
     * @param $group_id
     * @param $stage_id
     * @param $var_name
     * @return CreateApiStageVariable
     */
    public static function CreateApiStageVariable($group_id, $stage_id, $var_name){
        return (new CreateApiStageVariable())
            ->setGroupId($group_id)
            ->setStageId($stage_id)
            ->setVariableName($var_name);
    }

    /**
     * 删除环境的指定变量
     * @param $group_id
     * @param $stage_id
     * @param $var_name
     * @return DeleteApiStageVariable
     */
    public static function DeleteApiStageVariable($group_id, $stage_id, $var_name){
        return (new DeleteApiStageVariable())
            ->setGroupId($group_id)
            ->setStageId($stage_id)
            ->setVariableName($var_name);
    }

    /**
     * 查询 API 分组详情
     * @param $group_id
     * @return DescribeApiGroup
     */
    public static function DescribeApiGroup($group_id){
        return (new DescribeApiGroup())->setGroupId($group_id);
    }

    /**
     * 查询 API 分组列表
     * @return DescribeApiGroups
     */
    public static function DescribeApiGroups(){
        return (new DescribeApiGroups());
    }

    /**
     * 查询环境详情
     * @param $group_id
     * @param $stage_id
     * @return DescribeApiStage
     */
    public static function DescribeApiStage($group_id, $stage_id){
        return (new DescribeApiStage())->setGroupId($group_id)->setStageId($stage_id);
    }

    /********************************** Domain **************************************************/

    /**
     * 绑定自定义域名
     * @param $group_id
     * @param $domain_name
     * @return SetDomain
     */
    public static function SetDomain($group_id, $domain_name){
        return (new SetDomain())->setGroupId($group_id)->setDomainName($domain_name);
    }

    /**
     * 上传 SSL 证书
     * @param $group_id
     * @param $domain_name
     * @param $cert_name
     * @param $cert_body
     * @param $private_key
     * @return SetDomainCertificate
     */
    public static function SetDomainCertificate($group_id, $domain_name, $cert_name, $cert_body, $private_key){
        return (new SetDomainCertificate())
            ->setGroupId($group_id)
            ->setDomainName($domain_name)
            ->setCertificateName($cert_name)
            ->setCertificateBody($cert_body)
            ->setCertificatePrivateKey($private_key);
    }

    /**
     * 查询域名详情
     * @param $group_id
     * @param $domain_name
     * @return DescribeDomain
     */
    public static function DescribeDomain($group_id, $domain_name){
        return (new DescribeDomain())->setGroupId($group_id)->setDomainName($domain_name);
    }

    /**
     * 删除域名
     * @param $group_id
     * @param $domain_name
     * @return DeleteDomain
     */
    public static function DeleteDomain($group_id, $domain_name){
        return (new DeleteDomain())->setGroupId($group_id)->setDomainName($domain_name);
    }

    /**
     * 删除指定域名的SSL证书
     * @param $group_id
     * @param $domain_name
     * @param $cert_id
     * @return DeleteDomainCertificate
     */
    public static function DeleteDomainCertificate($group_id, $domain_name, $cert_id){
        return (new DeleteDomainCertificate())
            ->setGroupId($group_id)
            ->setDomainName($domain_name)
            ->setCertificateId($cert_id);
    }

    /**
     * 重新激活自定义域名
     * @param $group_id
     * @param $domain_name
     * @return ReactivateDomain
     */
    public static function ReactivateDomain($group_id, $domain_name){
        return (new ReactivateDomain())->setGroupId($group_id)->setDomainName($domain_name);
    }

    /********************************** Api **************************************************/

    /**
     * 创建 API
     * @param $group_id
     * @param $api_name
     * @param $visibility
     * @return CreateApi
     */
    public static function CreateApi($group_id, $api_name, $visibility){
        $request = new CreateApi();
        $request->setGroupId($group_id);
        $request->setApiName($api_name);
        $request->setVisibility($visibility);
        return $request;
    }

    /**
     * 修改 API
     * @param $group_id
     * @param $api_name
     * @param $visibility
     * @return ModifyApi
     */
    public static function ModifyApi($group_id, $api_name, $visibility){
        $request = new ModifyApi();
        $request->setGroupId($group_id);
        $request->setApiName($api_name);
        $request->setVisibility($visibility);
        return $request;
    }

    /**
     * 发布 API
     * @param $group_id
     * @param $api_id
     * @param $stage_name
     * @param $desc
     * @return DeployApi
     */
    public static function DeployApi($group_id, $api_id, $stage_name, $desc){
        return (new DeployApi())->setGroupId($group_id)
            ->setApiId($api_id)
            ->setStageName($stage_name)
            ->setDescription($desc);
    }

    /**
     * 快速切换 API 版本
     * @param $group_id
     * @param $api_id
     * @param $stage_name
     * @param $desc
     * @param $history_version
     * @return SwitchApi
     */
    public static function SwitchApi($group_id, $api_id, $stage_name, $desc, $history_version){
        return (new SwitchApi())->setGroupId($group_id)
            ->setApiId($api_id)
            ->setStageName($stage_name)
            ->setDescription($desc)
            ->setHistoryVersion($history_version);
    }

    /**
     * 下线 API
     * @param $group_id
     * @param $api_id
     * @param $stage_name
     * @return AbolishApi
     */
    public static function AbolishApi($group_id, $api_id, $stage_name){
        return (new AbolishApi())->setGroupId($group_id)
            ->setApiId($api_id)
            ->setStageName($stage_name);
    }

    /**
     * 删除 API 定义
     * @param $group_id
     * @param $api_id
     * @return DeleteApi
     */
    public static function DeleteApi($group_id, $api_id){
        return (new DeleteApi())->setGroupId($group_id)->setApiId($api_id);
    }
}