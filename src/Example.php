<?php

class Example
{
  public function __construct()
  {
    $this->name = "Jeremy Bolding";
    $this->email = "cyberchefjay@gmail.com";
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
    return $this->email;
  }
}
