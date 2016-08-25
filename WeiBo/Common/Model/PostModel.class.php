<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/6/1
 * Time: 14:19
 */
namespace Common\Model;

use Think\Model;

class PostModel extends Model\RelationModel
{
    protected $tableName = 'posts';

    protected $_link = [
        'user' => [
            'class_name'=>'User',
            'mapping_type'=>self::BELONGS_TO,
            'foreign_key'=>'user_id',
        ],

        'tags' => [
            'class_name'=>'Tag',
            'mapping_type'=>self::MANY_TO_MANY,
            'relation_table'=>'post_tags',
            'foreign_key'=>'post_id',
            'relation_foreign_key'  =>  'tag_id',
        ],
    ];

    protected $_auto = [
        ['created','datetime',self::MODEL_INSERT,'callback'],
        ['updated','datetime',self::MODEL_UPDATE,'callback'],
    ];

    protected $_validate = [
        ['user_id','require','用户名不得小于2字符大于20字符'],
        ['content','8,2048','微博内容不得小于8字符大于280字符',self::EXISTS_VALIDATE,'length'],
    ];

    protected function datetime()
    {
        return date('Y-m-d H:d:s', time());
    }
}