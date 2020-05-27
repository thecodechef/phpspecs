<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class ExampleSpec extends ObjectBehavior
{
  function it_should_get_the_users_fullname()
  {
    $this->getName()->shouldBeEqualTo("Jeremy Bolding");
  }

  function it_should_get_the_users_email()
  {
    $this->getEmail()->shouldContain("@gmail.com");
  }
}
