<?php

namespace spec\Tgallice\FBMessenger\Model\Button;

use PhpSpec\ObjectBehavior;
use Tgallice\FBMessenger\Model\Button;

class WebUrlSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('title', 'http://www.google.com');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Tgallice\FBMessenger\Model\Button\WebUrl');
    }

    function it_is_a_button()
    {
        $this->shouldImplement(Button::class);
    }
}
