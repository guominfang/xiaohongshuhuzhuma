<?php

namespace App\Http\Controllers;

use App\ShuDuiZhangHuZhuCode;
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

        $repose = new ShuDuiZhangHuZhuCode();
        $allData = array_chunk($repose->search($param), $param['count'] + 1);
        $returnData = [];
        foreach ($allData as $groupData) {
            foreach ($groupData as $data) {
                if ($data['code'] === $param['code']) {
                    $returnData = $groupData;
                }
            }
        }

        if (count($returnData) != $param['count'] + 1) {
            return ['msg' => '未组队成功，请稍后尝试回来再试一次'];
        }

        $returnData = array_filter($returnData, function ($tempData) use ($param) {
            return $tempData['code'] !== $param['code'];
        });

        return ['msg' => "组队成功，诚信帮助以下小薯粉互助吧", 'data' => array_column($returnData, 'code')];
    }
}
