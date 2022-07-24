<?php
$isolate = new \V8\Isolate();
$context = new \V8\Context($isolate);
$source = new \V8\StringValue($isolate, "'Hello' + ', World!'");

$script = new \V8\Script($context, $source);
$result = $script->run($context);

echo $result->value(), PHP_EOL;

?>
