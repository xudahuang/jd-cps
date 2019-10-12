<?php

namespace JdCps\Request;
/**
 * API: jd.union.open.goods.jingfen.query
 *
 * @author
 * @since 1.0, 2019.09.21
 */
use JdCps\RequestCheckUtil;

class JdUnionOpenGoodsJingFenQueryRequest
{
    /**
     * 频道id：1-好券商品,2-超级大卖场,3-小程序-好券商品,4-服装运动,5-精选家电,6-超市,7-居家生活,10-9.9专区,11-潮流范儿
     * 12-精致生活,13-数码先锋,14-品质家电,15-京仓配送,16-公众号-好券商品,17-公众号-9.9专区,18-公众号-京东配送,22-热销爆品
     **/
    private $eliteId;

    /**
     * 页码
     **/
    private $pageIndex;

    /**
     * 每页数量，默认20，上限50
     **/
    private $pageSize;

    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数)
     **/
    private $sortName;

    /**
     * asc,desc升降序,默认降序
     **/
    private $sort;

    private  $apiParamsName = 'goodsReq';

    private $apiParas = array();

    public function setEliteId($eliteId)
    {
        $this->eliteId = $eliteId;
        $this->apiParas['eliteId'] = $eliteId;
    }

    public function getEliteId()
    {
        return $this->eliteId;
    }

    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
        $this->apiParas['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setSortName($sortName)
    {
        $this->sortName = $sortName;
        $this->apiParas['sortName'] = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        $this->apiParas['sort'] = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function getApiMethodName()
    {
        return "jd.union.open.goods.jingfen.query";
    }

    public function getApiParas()
    {
        return [
            'param_json' => json_encode([
                $this->apiParamsName => $this->apiParas
            ])
        ];
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->eliteId, 'eliteId');
        RequestCheckUtil::checkMaxValue($this->pageSize, 100, 'pageSize');
        RequestCheckUtil::checkMinValue($this->pageSize, 1, 'pageSize');
    }
}
