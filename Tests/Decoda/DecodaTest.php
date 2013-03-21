<?php
namespace FM\BbcodeBundle\Tests\Decoda;

use FM\BbcodeBundle\Decoda\Decoda as Decoda;

class DecodaTest extends \PHPUnit_Framework_TestCase
{
    public function testSetMessagesWithEmptyArray()
    {
        $decoda = new Decoda();

        $decoda->setMessages();
        $decoda->setMessages(array());
    }
}
