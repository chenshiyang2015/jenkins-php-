<?php
/**
 * Created by PhpStorm.
 * User: chenshiyang
 * Date: 2018/8/6
 * Time: 17:16
 */

namespace Order\Controller;

include __DIR__."/../index.php";
include __DIR__."/../Application/order/Controller/UnpaymentRecordController.class.php";
class UnpaymentRecordControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $controller;
    public function testGetStatus()
    {
        $this->controller = new \Order\Controller\UnpaymentRecordController();
        $data = $this->controller->getStatus();
//        print_r($data);
        //断言结果
        $this->assertEquals(5, sizeof($data));
        $this->assertEquals('拒付',$data["info"][4]);
    }

    public function testGetType()
    {
        $this->controller = new \Order\Controller\UnpaymentRecordController();
        $data = $this->controller->getType();
        //断言结果
        $this->assertEquals(5, sizeof($data));
        $this->assertEquals('您选错了地址',$data["info"][4]);
    }

    public function testGetList()
    {
        $params = array();
        $params["status"] = 1;
        $this->controller = new \Order\Controller\UnpaymentRecordController();
        $data = $this->controller->getList($params);
    }

    public function testProcess()
    {

    }

    public function testInfo()
    {

    }

    public function testAdd()
    {

    }

    public function testGetOrderUnpayment()
    {

    }
}
