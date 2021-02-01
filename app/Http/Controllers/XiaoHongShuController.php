<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class XiaoHongShuController extends Controller
{
    //
    const GZH_CODE = "QvAVuLm9AWGkVFn6PG5UBo5z3Cj53ju1trjww8XOEgw";
    const COUNT = ['1','2','3'];

    public function search(Request $request)
    {
        $param = $request->all();

        if (!isset($param['gzh_code'])) {
            return "请去公众号获取'薯粉码'";
        }

        if ($param['gzh_code'] !== self::GZH_CODE) {
            return "请去获取正确的'薯粉码'";
        }

        if (!isset($param['count'])) {
            return "请填写正确的剩余次数";
        }

        if (!in_array($param['count'], self::COUNT)) {
            return "请填写正确的剩余次数(1~3)";
        }

        if (!isset($param['code'])) {
            return "请填写正确的互助码";
        }

        $param['code'] = trim($param['code']);



        return $param;
    }
}