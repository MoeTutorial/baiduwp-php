<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view('index/index', [
            'site_name' => config('baiduwp.site_name'),
            'program_version' => config('baiduwp.program_version'),
            'footer' => config('baiduwp.footer'),
        ]);
    }

    public function api()
    {
        if(@$_GET['client']=="pandownload_app"){ // 如果是Pandownload lua脚本(Kuromi Tube V0.0.1)、KuromiDown(V0.0.1)验证链接请求
            echo "开发中，敬请期待。";
        } else { // 兼容V3.0.2 API接口文件
            echo "开发中，敬请期待。";
        }
    }
}
