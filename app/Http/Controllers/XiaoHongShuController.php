<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XiaoHongShuController extends Controller
{
    //
    public function search(Request $request)
    {
        $param = $request->all();

        if (!isset($param['gzh_code'])) {
            return "请去公众号获取'薯粉码'";
        }

        if (!in_array($param['gzh_code'], config('xiaohongshu.gzh_code'))) {
            return "请去获取正确的'薯粉码'";
        }

        if (!isset($param['count'])) {
            return "请填写正确的剩余次数";
        }

        if (!in_array($param['count'], config('xiaohongshu.count'))) {
            return "请填写正确的剩余次数(1~3)";
        }

        if (!isset($param['code'])) {
            return "请填写正确的互助码";
        }

        $param['code'] = trim($param['code']);

        return $param;
    }
}
