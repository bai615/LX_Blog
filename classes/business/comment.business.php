<?php
/**
 * 评论管理
 *
 * Created by Lane.
 * @Class CommentBusiness
 * @Author: lane
 * @Mail: lixuan868686@163.com
 * @Date: ${DATE}
 * @Time: ${TIME}
 */
class CommentBusiness{

    private static $dbModelObj;

    /**
     * 返回对象 ...
     * @return CommentDbModel
     */
    public static function getInstance() {
        if (is_null(self::$dbModelObj) || !isset(self::$dbModelObj)) {
            self::$dbModelObj = new CommentDbModel();
        }
        return self::$dbModelObj;
    }

    /**
     * @descrpition 添加数据
     * @param $fields
     */
    public static function setComment($fields){
        return self::getInstance()->add($fields);
    }

    /**
     * @descrpition 修改数据
     * @param $id
     * @param $fields
     */
    public static function editComment($id, $fields){
        return self::getInstance()->edit($id, $fields);
    }

    /**
     * @descrpition 删除数据
     * @param $fields
     */
    public static function delComment($id){
        return self::getInstance()->del($id);
    }

    /**
     * @descrpition 通过ID获取
     * @param $id
     */
    public static function getComment($id){
        return self::getInstance()->get($id);
    }

    /**
     * @descrpition 通过MID获取
     * @param $id
     */
    public static function getCommentByAid($aid){
        return self::getInstance()->getByAid($aid);
    }

    /**
     * @descrpition 获取列表
     * @param $id
     */
    public static function getCommentList(){
        return self::getInstance()->getList();
    }

    /**
     * @descrpition 获取最新列表
     * @return Ambigous|bool
     */
    public static function getNewList(){
        return self::getInstance()->getNewList();
    }

    /**
     * @descrpition 获取最新列表
     * @return Ambigous|bool
     */
    public static function getNewListByMid($mid){
        return self::getInstance()->getNewListByMid($mid);
    }

}