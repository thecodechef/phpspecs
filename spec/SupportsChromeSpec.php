<?php

namespace spec;

use Laravel\Dusk\Chrome\SupportsChrome;
use PhpSpec\ObjectBehavior;

class SupportsChromeSpec extends ObjectBehavior
{
	use SupportsChrome;

	/**
	 * @name It can run Chrome process.
	 */
    public function runChromeProcess()
    {
    	$process = static::buildChromeProcess();

    	$process->start();

        sleep(2);

        $process->stop();

        $this->shouldContain('Starting ChromeDriver', $process->getOutput());
        $this->shouldBeEqual('', $process->getErrorOutput());
    }
}
