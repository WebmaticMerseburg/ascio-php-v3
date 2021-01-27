<?php

namespace ascio\v3;

class Domain
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var int $RenewPeriod
     */
    protected $RenewPeriod = null;

    /**
     * @var string $AuthInfo
     */
    protected $AuthInfo = null;

    /**
     * @var string $EncodingType
     */
    protected $EncodingType = null;

    /**
     * @var string $DomainPurpose
     */
    protected $DomainPurpose = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $TransferLock
     */
    protected $TransferLock = null;

    /**
     * @var string $DeleteLock
     */
    protected $DeleteLock = null;

    /**
     * @var string $UpdateLock
     */
    protected $UpdateLock = null;

    /**
     * @var string $QueueType
     */
    protected $QueueType = null;

    /**
     * @var Registrant $Owner
     */
    protected $Owner = null;

    /**
     * @var Contact $Admin
     */
    protected $Admin = null;

    /**
     * @var Contact $Tech
     */
    protected $Tech = null;

    /**
     * @var Contact $Billing
     */
    protected $Billing = null;

    /**
     * @var Contact $Reseller
     */
    protected $Reseller = null;

    /**
     * @var NameServers $NameServers
     */
    protected $NameServers = null;

    /**
     * @var DomainTradeMark $Trademark
     */
    protected $Trademark = null;

    /**
     * @var DnsSecKeys $DnsSecKeys
     */
    protected $DnsSecKeys = null;

    /**
     * @var PrivacyProxy $PrivacyProxy
     */
    protected $PrivacyProxy = null;

    /**
     * @var string $DomainType
     */
    protected $DomainType = null;

    /**
     * @var string $DiscloseSocialData
     */
    protected $DiscloseSocialData = null;

    /**
     * @var boolean $LocalPresence
     */
    protected $LocalPresence = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ascio\v3\Domain
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param string $Handle
     * @return \ascio\v3\Domain
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getRenewPeriod()
    {
      return $this->RenewPeriod;
    }

    /**
     * @param int $RenewPeriod
     * @return \ascio\v3\Domain
     */
    public function setRenewPeriod($RenewPeriod)
    {
      $this->RenewPeriod = $RenewPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthInfo()
    {
      return $this->AuthInfo;
    }

    /**
     * @param string $AuthInfo
     * @return \ascio\v3\Domain
     */
    public function setAuthInfo($AuthInfo)
    {
      $this->AuthInfo = $AuthInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncodingType()
    {
      return $this->EncodingType;
    }

    /**
     * @param string $EncodingType
     * @return \ascio\v3\Domain
     */
    public function setEncodingType($EncodingType)
    {
      $this->EncodingType = $EncodingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainPurpose()
    {
      return $this->DomainPurpose;
    }

    /**
     * @param string $DomainPurpose
     * @return \ascio\v3\Domain
     */
    public function setDomainPurpose($DomainPurpose)
    {
      $this->DomainPurpose = $DomainPurpose;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \ascio\v3\Domain
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferLock()
    {
      return $this->TransferLock;
    }

    /**
     * @param string $TransferLock
     * @return \ascio\v3\Domain
     */
    public function setTransferLock($TransferLock)
    {
      $this->TransferLock = $TransferLock;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeleteLock()
    {
      return $this->DeleteLock;
    }

    /**
     * @param string $DeleteLock
     * @return \ascio\v3\Domain
     */
    public function setDeleteLock($DeleteLock)
    {
      $this->DeleteLock = $DeleteLock;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdateLock()
    {
      return $this->UpdateLock;
    }

    /**
     * @param string $UpdateLock
     * @return \ascio\v3\Domain
     */
    public function setUpdateLock($UpdateLock)
    {
      $this->UpdateLock = $UpdateLock;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueType()
    {
      return $this->QueueType;
    }

    /**
     * @param string $QueueType
     * @return \ascio\v3\Domain
     */
    public function setQueueType($QueueType)
    {
      $this->QueueType = $QueueType;
      return $this;
    }

    /**
     * @return Registrant
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param Registrant $Owner
     * @return \ascio\v3\Domain
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getAdmin()
    {
      return $this->Admin;
    }

    /**
     * @param Contact $Admin
     * @return \ascio\v3\Domain
     */
    public function setAdmin($Admin)
    {
      $this->Admin = $Admin;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getTech()
    {
      return $this->Tech;
    }

    /**
     * @param Contact $Tech
     * @return \ascio\v3\Domain
     */
    public function setTech($Tech)
    {
      $this->Tech = $Tech;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param Contact $Billing
     * @return \ascio\v3\Domain
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getReseller()
    {
      return $this->Reseller;
    }

    /**
     * @param Contact $Reseller
     * @return \ascio\v3\Domain
     */
    public function setReseller($Reseller)
    {
      $this->Reseller = $Reseller;
      return $this;
    }

    /**
     * @return NameServers
     */
    public function getNameServers()
    {
      return $this->NameServers;
    }

    /**
     * @param NameServers $NameServers
     * @return \ascio\v3\Domain
     */
    public function setNameServers($NameServers)
    {
      $this->NameServers = $NameServers;
      return $this;
    }

    /**
     * @return DomainTradeMark
     */
    public function getTrademark()
    {
      return $this->Trademark;
    }

    /**
     * @param DomainTradeMark $Trademark
     * @return \ascio\v3\Domain
     */
    public function setTrademark($Trademark)
    {
      $this->Trademark = $Trademark;
      return $this;
    }

    /**
     * @return DnsSecKeys
     */
    public function getDnsSecKeys()
    {
      return $this->DnsSecKeys;
    }

    /**
     * @param DnsSecKeys $DnsSecKeys
     * @return \ascio\v3\Domain
     */
    public function setDnsSecKeys($DnsSecKeys)
    {
      $this->DnsSecKeys = $DnsSecKeys;
      return $this;
    }

    /**
     * @return PrivacyProxy
     */
    public function getPrivacyProxy()
    {
      return $this->PrivacyProxy;
    }

    /**
     * @param PrivacyProxy $PrivacyProxy
     * @return \ascio\v3\Domain
     */
    public function setPrivacyProxy($PrivacyProxy)
    {
      $this->PrivacyProxy = $PrivacyProxy;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainType()
    {
      return $this->DomainType;
    }

    /**
     * @param string $DomainType
     * @return \ascio\v3\Domain
     */
    public function setDomainType($DomainType)
    {
      $this->DomainType = $DomainType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscloseSocialData()
    {
      return $this->DiscloseSocialData;
    }

    /**
     * @param string $DiscloseSocialData
     * @return \ascio\v3\Domain
     */
    public function setDiscloseSocialData($DiscloseSocialData)
    {
      $this->DiscloseSocialData = $DiscloseSocialData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalPresence()
    {
      return $this->LocalPresence;
    }

    /**
     * @param boolean $LocalPresence
     * @return \ascio\v3\Domain
     */
    public function setLocalPresence($LocalPresence)
    {
      $this->LocalPresence = $LocalPresence;
      return $this;
    }

}
