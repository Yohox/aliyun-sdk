<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:18
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class ModifyPathCacheExpiredConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($domain_name)
 * @method $this setConfigID($config_id)
 * @method $this setCacheContent($cache_content)
 * @method $this setTTL($ttl)
 * @method $this setWeight($weight)
 */
class ModifyPathCacheExpiredConfig extends CdnCommon
{
    use Request;
}