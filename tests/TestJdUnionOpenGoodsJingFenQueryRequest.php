<?php
namespace Tests;

use JdCps\Client;
use JdCps\Request\JdUnionOpenGoodsJingFenQueryRequest;
use PHPUnit\Framework\TestCase;

class TestJdUnionOpenGoodsJingFenQueryRequest extends TestCase
{
    public function testGoodsJingFenQuery()
    {
        $request = new JdUnionOpenGoodsJingFenQueryRequest();
        $request->setEliteId(1);
        $request->setPageIndex(1);
        $request->setPageSize(1);
        $client = new Client(getenv('JD_CPS_TEST_APPKEY'), getenv('JD_CPS_TEST_APPSECRET'));
        $result = $client->execute($request);
        $this->assertEquals('success', $result['message']);
    }
}
