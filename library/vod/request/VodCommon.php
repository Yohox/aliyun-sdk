<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/5 17:34
 */

namespace aliyun\sdk\vod\request;

use aliyun\sdk\core\http\Request;

class VodCommon extends Request
{
    public function __construct()
    {
        $this->product = "vod";

        parent::__construct();

        $this->setParam("Version","2017-03-21");

        $this->locationServiceCode = "vod";

        $this->locationEndpointType = "openAPI";

        $this->auth = true;
    }
}