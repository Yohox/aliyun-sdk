<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:08
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\IncludeMediaInfoParamTrait;
use aliyun\sdk\core\traits\param\IncludePlayListParamTrait;
use aliyun\sdk\core\traits\param\IncludeSnapshotListParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class QueryMediaList
 * @package aliyun\sdk\mts\request\Media
 * @method $this setMediaIds($media_ids)
 */
class QueryMediaList extends MtsCommon
{
    use Request;
    use IncludePlayListParamTrait;
    use IncludeSnapshotListParamTrait;
    use IncludeMediaInfoParamTrait;
}