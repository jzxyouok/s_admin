<?php
/**
 * Created by sunny.
 * Tips:Have a nice day!
 * User: sunny
 * Date: 2016/7/18
 * Time: 16:55
 */
namespace Admin\Controller;

class SystemController extends AdminController{
    //系统信息
    public function index(){
        $sys_info = getSysInfo ();

        $this->assign ( 'sys_info', $sys_info );
        $this->display();
    }
}