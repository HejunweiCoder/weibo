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

    protected $_auto = [
        ['created','datetime',self::MODEL_INSERT,'callback'],
        ['updated','datetime',self::MODEL_UPDATE,'callback'],
        ['password','sha1',self::MODEL_BOTH,'function'],
    ];
//
    protected $_validate = [
//        ['users','127.0.0.1','您的ip被禁止',0,'ip_allow'],
        ['username','2,20','用户名不得小于2字符大于20字符',self::EXISTS_VALIDATE,'length'],
        ['password','6,40','密码不得小于6字符大于40字符',self::EXISTS_VALIDATE,'length'],
        ['username','','用户名已存在',self::EXISTS_VALIDATE,'unique',self::MODEL_BOTH],
        ['email','','邮箱已存在',self::EXISTS_VALIDATE,'unique',self::MODEL_BOTH],
    ];

    protected function datetime()
    {
        return date('Y-m-d H:d:s', time());
    }
}