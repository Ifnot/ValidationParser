# ValidationParser
Simple Laravel 4 validation rule parser for : auto-generate forms, auto-generate documentations etc ... from a simple L4 Validation array.

# Installation

    composer require "ifnot/validation-parser"

# Custom usage

In this example we will call the RuleSet parser with a custom view for rendering an automatic Form.

In the Controller Action / Route, we define witch view using for each field :
```php
Ifnot\ValidationParser\RuleSet::$view = 'my.form.field';
return View::make('my.form.show');
```

In `/view/my/form/show.blade.php` we loop on each RuleSets and bind the property to the RuleSet view.
```php
@foreach([
  "email":"required|email",
  "civility":"required|in:M,F",
  "comment":"string"
] as $property => $rules)
  {{ \Ifnot\ValidationParser\RuleSet::parse($rules)->bind('property' => $property)->toString() }}
@endforeach
```

In the RuleSet view `/views/my/form/field.blade.php` (specified before) :
```php
<label>{{ $property }}</label>
@if($ruleSet->isBoolean())
  {{-- Here insert a input type radio --}}
@elseif($ruleSet->isIn())
  {{-- Here, you can insert a select with $ruleSet['in']->params witch contains an array of allowed values --}}
@elseif($field->isExists())
  {{-- Here a ajax loaded json from your table $ruleSet['in']->params[0] and the column $ruleSet['in']->params[1] --}}
@endif
```
