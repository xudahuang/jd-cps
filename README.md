## JdCps

#### Install
``
composer require bigyellow/jd-cps
``

#### Example
```$xslt
<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $request = new JdUnionOpenGoodsJingFenQueryRequest();
    $request->setEliteId(1);
    $request->setPageIndex(1);
    $request->setPageSize(1);
    $client = new Client(getenv('JD_CPS_TEST_APPKEY'), getenv('JD_CPS_TEST_APPSECRET'));
    $result = $client->execute($request);
    var_dump($result)
?>
```


