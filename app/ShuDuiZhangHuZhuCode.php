<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShuDuiZhangHuZhuCode extends Model
{
    //

    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'shu_dui_zhang_hu_zhu_code';



    public function search($params) {

//
        $exists = self::where('count', $params['count'])->where('code', $params['code'])->exists();
        if (!$exists) {
            self::store($params);
        }


        return self::where('count', $params['count'])->orderBy('created_at')->get();
    }


    public function store($params) {
        // 不存在则插入
        $mode = new ShuDuiZhangHuZhuCode();
        $mode->gzh_code = $params['gzh_code'];
        $mode->count = $params['count'];
        $mode->code = $params['code'];
        $mode->save();
    }
}
