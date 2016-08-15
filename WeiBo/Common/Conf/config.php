<?php
return array(
    //'配置项'=>'配置值'
    // 开启路由
    'URL_ROUTER_ON'        => true,
    //配置路由
    //按请求类型排序
    //edit,show,create,index,最后写post请求
    'URL_ROUTE_RULES'      => [
        ['checkUsername', 'Index/checkUsername', '', ['method' => 'POST']],
        ['checkEmail', 'Index/checkEmail', '', ['method' => 'POST']],
        ['code', 'Index/code', '', ['method' => 'GET']],
        ['post', 'Index/post', '', ['method' => 'GET']],
        ['test', 'Index/test', '', ['method' => 'GET']],

        ['user/:id\d/edit', 'User/edit', '', ['method' => 'GET']],
        ['user/:id\d', 'User/show', '', ['method' => 'GET']],
        ['user/create', 'User/create', '', ['method' => 'GET']],
        ['user', 'User/index', '', ['method' => 'GET']],
        ['user/:id\d', 'User/update', '', ['method' => 'PUT']],
        ['user/:id\d', 'User/delete', '', ['method' => 'DELETE']],
        ['user/upload', 'User/upload', '', ['method' => 'POST']],
        ['user', 'User/store', '', ['method' => 'POST']],

        ['admin/:id\d/show', 'Admin/Index/show', '', ['method' => 'GET']],
        ['admin/login', 'Admin/Auth/postLogin', '', ['method' => 'POST']],
        ['admin/logout', 'Admin/Auth/logout', '', ['method' => 'GET']],
        ['admin/login', 'Admin/Auth/login', '', ['method' => 'GET']],
        ['admin', 'Admin/Index/index', '', ['method' => 'GET']],
        ['login', 'Auth/postLogin', '', ['method' => 'POST']],
        ['register', 'Auth/postRegister', '', ['method' => 'POST']],
        ['logout', 'Auth/logout', '', ['method' => 'GET']],


    ],

    //设置URL模式
    'URL_MODEL'            => 2,

    //url 不区分大小写
    'URL_CASE_INSENSITIVE' => true,


    //多语言
    'LANG_SWITCH_ON'       => true,
    'LANG_AUTO_DETECT'     => true,
    'LANG_LIST'            => 'zh-cn,en-us',
    'VAR_LANGUAGE'         => 'lang',

    //是否开启html过滤


    //设置不可访问的目录
//    'MODULE_DENY_LIST'  => ['Common', 'Runtime', 'admin'],
    //设置可以访问的目录
    'MODULE_ALLOW_LIST'    => ['Home', 'Admin'],
    //设置默认加载模块
    'DEFAULT_MODULE'       => 'Home',
//    'DEFAULT_MODULE'    => 'Admin',

    //权限
//    'AUTH_CONFIG'=>[
//        'AUTH_ON' => true, //认证开关
//        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
//        'AUTH_GROUP' => 'role_permissions', //用户组数据表名
//        'AUTH_GROUP_ACCESS' => 'roles', //用户组明细表
//        'AUTH_RULE' => 'permissions', //权限规则表
//        'AUTH_USER' => 'admins'//用户信息表
//    ],


    'APP_STATUS' => 'debug', //应用调试模式状态

    'SHOW_PAGE_TRACE' => true, // 显示页面Trace信息

    'DEFAULT_V_LAYER' => 'View',//默认视图的文件夹

    'TMPL_TEMPLATE_SUFFIX' => '.php',//模板文件的后缀

//    'TMPL_L_DELIM' => '{{',

//    'TMPL_R_DELIM' => '}}',

//数据库全局配置
    /*
        'DB_TYPE'   => 'mysql',
        'DB_HOST'   => 'localhost',
        'DB_USER'   => 'root',
        'DB_PWD'    => 'root',
        'DB_NAME'   => 'thinkphp',
        'DB_PORT'   => 3306,
        'DB_PREFIX' => 'think_',
    */
    //PDO专用定义
    'DB_TYPE'              => 'mysql',
    'DB_USER'              => 'root',
    'DB_PWD'               => 'root',
//    'DB_PREFIX'            => 'think_',
    'DB_DSN'               => 'mysql:host=localhost;dbname=thinkphp;charset=UTF8'
);