<?php
/**
 * Created by PhpStorm.
 * User: huaral
 * Date: 2017/2/18
 * Time: 12:27
 */
echo 'hello world!';

//test
require_once './response/Response.php';
require_once './files/common/RequestCodeEnum.php';

$page = isset($_GET['page'])?$_GET['page']:1;
$pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:1;

if(!is_numeric($page)||!is_numeric($pagesize)){
    return Response::responseDao(RequestCodeEnum::Requset_PARAMERROR,RequestCodeEnum::RequestMessage(RequestCodeEnum::Requset_PARAMERROR),array());
}