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
}