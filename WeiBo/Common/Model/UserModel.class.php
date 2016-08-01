<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/6/1
 * Time: 14:19
 */
namespace Common\Model;

use Think\Model;

class UserModel extends Model\RelationModel
{
    protected $tableName = 'users';

    protected $_link = [
        'posts' => [
            'mapping_type' => self::HAS_MANY,
            'class_name'   => 'Post',
            'foreign_key'  => 'user_id',
//            'condition'    => 'id=1',
        ],
    ];
//    protected $fields = ['id','name','email','date','_pk'=>'id'];

//    protected $_auto = [
////        ['user','md5',3,'function'],
//        ['username','addPrefix',3,'callback','_'],
//    ];
//
//    protected $_validate = [
//        ['users','127.0.0.1','您的ip被禁止',0,'ip_allow'],
//    ];

    protected function addPrefix($str, $prefix)
    {
        return $str . $prefix;
    }
}