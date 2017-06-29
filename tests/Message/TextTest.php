<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
		public function testRetornaUmArray ()
		{
			$actual = (new Text( recipient 1))->message(messageText 'oiii');
			$expected = [
				'recipient' =>[
					'id'=>1
				],
				"message"=>[
					'text'=>'oiii',
					'metadada'=>'DEVELOPER_DEFINED_METADA'
				]				
			];
			
			$this->assertEquals($actual,$expected);
		}
}