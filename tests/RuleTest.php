<?php namespace Test\Ifnot\ValidationParser;

use Ifnot\ValidationParser\Rule;
use Orchestra\Testbench\TestCase;

/**
 * Class RuleTest
 * @package Ifnot\ValidationParser
 */
class RuleTest extends TestCase {
	public function testParseRule_OnlyName_ParsedSuccessfuly()
	{
		list($name, $params) = Rule::parseRule('string');

		$this->assertEquals('string', $name);
		$this->assertCount(0, $params);
	}

	public function testParseRule_NameAndOneParam_Parsed()
	{
		list($name, $params) = Rule::parseRule('string:param');

		$this->assertEquals('string', $name);
		$this->assertCount(1, $params);
		$this->assertEquals('param', array_values($params)[0]);
	}

	public function testParseRule_NameAndManyParams_Parsed()
	{
		list($name, $params) = Rule::parseRule('string:param1,param2,param3');

		$this->assertEquals('string', $name);
		$this->assertCount(3, $params);
		$this->assertEquals('param1', array_values($params)[0]);
		$this->assertEquals('param2', array_values($params)[1]);
		$this->assertEquals('param3', array_values($params)[2]);
	}
}