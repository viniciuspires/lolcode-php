<?php
namespace Lol\Token;

require_once 'token.php';

class Btw extends \Lol\Token
{
	protected $expects = array(
		'T_UNKNOWN',
		'T_END',
	);
}


