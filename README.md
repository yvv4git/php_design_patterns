# Explore design patterns with PHP.

### Важная информация:
1. Добавление других namespace'ов.
Если добавишь namespace, то пропиши его в composer.json
в графе psr-4.
Затем сделай composer dump-autoload -o

2. Тесты.
Запустить тесты можно так composer test.
В /tmp появятся отчеты с покрытием кода и другой информацией.
Настройки прописаны в phpunit.xml.

3. composer.json
Проект инициализируется так: composer init
Подключить phpunit можно так: composer require phpunit/phpunit:@stable

4. Composer scripts
Пакетный менеджер composer позволяет добавлять в него скриты.
Смотри раздел scripts в файле composer.json.