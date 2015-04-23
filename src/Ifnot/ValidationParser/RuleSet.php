<?php namespace Ifnot\ValidationParser;

use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewInstance;

/**
 * Class RuleSet
 * @package Ifnot\ValidationParser
 */
class RuleSet {
	public $rules;
	public $bind = [];

	static $view = 'ifnot/validation-parser::rule-set';

	/**
	 * @param $rules
	 *
	 * @return RuleSet
	 */
	public static function parse($rules)
	{
		return new RuleSet($rules);
	}

	/**
	 * @param $rules
	 */
	public function __construct($rules)
	{
		$this->rules = $this->extract($rules);
	}

	/**
	 * @param array $array
	 */
	public function bind($array = [])
	{
		$this->bind = array_merge($this->bind, $array);

		return $this;
	}

	/**
	 * @param $method
	 * @param $arguments
	 */
	public function __call($method, $arguments)
	{
		$ruleName = snake_case(preg_replace('#^is#', '', $method));

		foreach($this->rules as $rule) {
			if($rule->name == $ruleName)
				return true;
		}

		return false;
	}

	/**
	 * @param $rules
	 *
	 * @return array
	 */
	protected function extract($rules)
	{
		$parsedRules = [];

		foreach(explode('|', $rules) as $rule) {
			$rule = Rule::parse($rule);
			$parsedRules[$rule->name] = $rule;
		}

		return $parsedRules;
	}

	/**
	 * @return ViewInstance
	 */
	public function toString()
	{
		return View::make(self::$view, array_merge([
			'ruleSet' => $this,
			'rules' => $this->rules
		], $this->bind));
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->toString()->render();
	}
}