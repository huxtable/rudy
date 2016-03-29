<?php

use Huxtable\CLI\Command;
use Huxtable\CLI\Input;

/**
 * @command		hello
 * @desc		Manage bots
 * @usage		bot <subcommand>
 */
$commandHello = new Command( 'hello', 'Say hello', function( $who='world' )
{
	return "Hello, {$who}.";
});

return $commandHello;
