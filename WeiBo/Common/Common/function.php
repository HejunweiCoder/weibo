<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/9/14
 * Time: 23:56
 */
function alert_back($info){
    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
    echo "<script type='text/javascript'>alert('".$info."');history.back();</script>";
    exit();
}