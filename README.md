# DezaPata


## テストコード

### スケルトンを作成する


generate-test [--bootstrap BOOTSTRAP] [--] < class > [class-source] [test-class] [test-source]

Example)

vendor/bin/phpunit-skelgen generate-test -- "App\Decorators\PlanDecorator" PlanDecorator.php PlanDecoratorTest tests/PlanDecorator.php
