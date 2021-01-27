<?php

namespace ascio\v3;

class CreateContactRequest
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @param Contact $Contact
     */
    public function __construct($Contact)
    {
      $this->Contact = $Contact;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return \ascio\v3\CreateContactRequest
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

}
