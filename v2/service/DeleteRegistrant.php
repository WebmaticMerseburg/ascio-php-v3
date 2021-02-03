<?php

namespace ascio\v2;

class DeleteRegistrant
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $registrantHandle
     */
    protected $registrantHandle = null;

    /**
     * @param string $sessionId
     * @param string $registrantHandle
     */
    public function __construct($sessionId = null, $registrantHandle = null)
    {
      $this->sessionId = $sessionId;
      $this->registrantHandle = $registrantHandle;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \ascio\v2\DeleteRegistrant
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrantHandle()
    {
      return $this->registrantHandle;
    }

    /**
     * @param string $registrantHandle
     * @return \ascio\v2\DeleteRegistrant
     */
    public function setRegistrantHandle($registrantHandle)
    {
      $this->registrantHandle = $registrantHandle;
      return $this;
    }

}
