<?php namespace Ifnot\ValidationParser;

use View;

/**
 * Class Rule
 * @package Ifnot\ValidationParser
 */
class Rule {
	public $name;
	public $params;

	static $viewPath = 'ifnot/validation-parser::rule';
	static $viewLang = 'en';

	/**
	 * @param $rule
	 *
	 * @return Rule
	 */
	public static function parse($rule)
	{
		return new Rule($rule);
	}

	/**
	 * @param $options
	 */
	public function __construct($options = [])
	{
		if(is_string($options)) {
			list($this->name, $this->params) = $this->extract($options);
		}
		else {
			if(isset($options['name'])) {
				$this->name = $options['name'];
			}
			if(isset($options['params'])) {
				$this->params = $options['params'];
			}
		}
	}

	/**
	 * @param $rule
	 *
	 * @return array
	 */
	protected function extract($rule)
	{
		$temp = explode(':', $rule);

		if(isset($temp[1])) {
			return [
				trim($temp[0]),
				explode(',', $temp[1])
			];
		}
		else {
			return [
				trim($rule),
				[]
			];
		}
	}

	/**
	 * @return string
	 */
	public function toString()
	{
		$view = self::$viewPath . '.' . self::$viewLang . '.' . $this->name;

		if(!View::exists($view)) {
			return "No definition found for " . $this->name;
		}

		return View::make($view, [
			'params' => $this->params
		])->render();
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->toString();
	}
}
