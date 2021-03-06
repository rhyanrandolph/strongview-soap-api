<?php

namespace Selligent\MessageStudio;

class StandardMailing extends BaseStandardMailing
{

    /**
     * @var MailingClassId $mailingClassId
     */
    protected $mailingClassId = null;

    /**
     * @var TargetId[] $excludedTargetId
     */
    protected $excludedTargetId = null;

    /**
     * @var TargetId[] $includedTargetId
     */
    protected $includedTargetId = null;

    /**
     * @var SystemAddressId $fromAddressId
     */
    protected $fromAddressId = null;

    /**
     * @var string $fromName
     */
    protected $fromName = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string[] $header
     */
    protected $header = null;

    /**
     * @var SystemAddressId $bounceAddressId
     */
    protected $bounceAddressId = null;

    /**
     * @var SystemAddressId $replyAddressId
     */
    protected $replyAddressId = null;

    /**
     * @var string $forward2FriendOffer
     */
    protected $forward2FriendOffer = null;

    /**
     * @var Forward2FriendOfferTrackingOption $forward2FriendOfferTrackingOption
     */
    protected $forward2FriendOfferTrackingOption = null;

    /**
     * @var string $ccAddress
     */
    protected $ccAddress = null;

    /**
     * @var string $bccAddress
     */
    protected $bccAddress = null;

    /**
     * @param Encoding $bodyEncoding
     * @param boolean $isApproved
     * @param boolean $isCompliant
     * @param Encoding $headerEncoding
     * @param string $name
     * @param CharSet $outputBodyCharSet
     * @param string $outputBodyCharSetToken
     * @param CharSet $outputHeaderCharSet
     * @param string $outputHeaderCharSetToken
     * @param boolean $useHeaderFromTemplate
     * @param boolean $eliminateDuplicates
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $eliminateDuplicates)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $eliminateDuplicates);
    }

    /**
     * @return MailingClassId
     */
    public function getMailingClassId()
    {
      return $this->mailingClassId;
    }

    /**
     * @param MailingClassId $mailingClassId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setMailingClassId($mailingClassId)
    {
      $this->mailingClassId = $mailingClassId;
      return $this;
    }

    /**
     * @return TargetId[]
     */
    public function getExcludedTargetId()
    {
      return $this->excludedTargetId;
    }

    /**
     * @param TargetId[] $excludedTargetId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setExcludedTargetId(array $excludedTargetId = null)
    {
      $this->excludedTargetId = $excludedTargetId;
      return $this;
    }

    /**
     * @return TargetId[]
     */
    public function getIncludedTargetId()
    {
      return $this->includedTargetId;
    }

    /**
     * @param TargetId[] $includedTargetId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setIncludedTargetId(array $includedTargetId = null)
    {
      $this->includedTargetId = $includedTargetId;
      return $this;
    }

    /**
     * @return SystemAddressId
     */
    public function getFromAddressId()
    {
      return $this->fromAddressId;
    }

    /**
     * @param SystemAddressId $fromAddressId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setFromAddressId($fromAddressId)
    {
      $this->fromAddressId = $fromAddressId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
      return $this->fromName;
    }

    /**
     * @param string $fromName
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setFromName($fromName)
    {
      $this->fromName = $fromName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param string[] $header
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setHeader(array $header = null)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return SystemAddressId
     */
    public function getBounceAddressId()
    {
      return $this->bounceAddressId;
    }

    /**
     * @param SystemAddressId $bounceAddressId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setBounceAddressId($bounceAddressId)
    {
      $this->bounceAddressId = $bounceAddressId;
      return $this;
    }

    /**
     * @return SystemAddressId
     */
    public function getReplyAddressId()
    {
      return $this->replyAddressId;
    }

    /**
     * @param SystemAddressId $replyAddressId
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setReplyAddressId($replyAddressId)
    {
      $this->replyAddressId = $replyAddressId;
      return $this;
    }

    /**
     * @return string
     */
    public function getForward2FriendOffer()
    {
      return $this->forward2FriendOffer;
    }

    /**
     * @param string $forward2FriendOffer
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setForward2FriendOffer($forward2FriendOffer)
    {
      $this->forward2FriendOffer = $forward2FriendOffer;
      return $this;
    }

    /**
     * @return Forward2FriendOfferTrackingOption
     */
    public function getForward2FriendOfferTrackingOption()
    {
      return $this->forward2FriendOfferTrackingOption;
    }

    /**
     * @param Forward2FriendOfferTrackingOption $forward2FriendOfferTrackingOption
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setForward2FriendOfferTrackingOption($forward2FriendOfferTrackingOption)
    {
      $this->forward2FriendOfferTrackingOption = $forward2FriendOfferTrackingOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcAddress()
    {
      return $this->ccAddress;
    }

    /**
     * @param string $ccAddress
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setCcAddress($ccAddress)
    {
      $this->ccAddress = $ccAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getBccAddress()
    {
      return $this->bccAddress;
    }

    /**
     * @param string $bccAddress
     * @return \Selligent\MessageStudio\StandardMailing
     */
    public function setBccAddress($bccAddress)
    {
      $this->bccAddress = $bccAddress;
      return $this;
    }

}
