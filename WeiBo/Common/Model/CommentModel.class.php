<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/6/1
 * Time: 14:19
 */
namespace Common\Model;

use Think\Model;

class CommentModel extends Model\RelationModel
{
    protected $tableName = 'comments';

    protected $_link = [

        'posts' => [
            'class_name'   => 'Post',
            'mapping_type' => self::BELONGS_TO,
            'foreign_key'  => 'post_id',
        ],
    ];
}