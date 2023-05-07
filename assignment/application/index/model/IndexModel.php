<?php


namespace app\index\model;

use think\Model;
use think\Db;

class IndexModel extends Model
{
    /**
     * 检查是否符合同步库存条件
     */
    public static function zuoyeList()
    {

        $where['id'] = 1;

//        $this->where($where)->find();

//        return Db::query("SELECT * FROM zuoye_list WHERE id = 1")->find();

        return Db::name('zuoye_list')->where($where)->find();
    }
}