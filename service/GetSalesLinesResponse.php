<?php

namespace ascio\v3;

class GetSalesLinesResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfSalesLines $SalesLines
     */
    protected $SalesLines = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     */
    public function __construct($ResultCode, $TotalCount)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \ascio\v3\GetSalesLinesResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfSalesLines
     */
    public function getSalesLines()
    {
      return $this->SalesLines;
    }

    /**
     * @param ArrayOfSalesLines $SalesLines
     * @return \ascio\v3\GetSalesLinesResponse
     */
    public function setSalesLines($SalesLines)
    {
      $this->SalesLines = $SalesLines;
      return $this;
    }

}
