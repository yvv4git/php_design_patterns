Структурный паттерн.
Легковес / Flyweight

Легковес применяется в программе, имеющей большое количество одинаковых
объектов. Паттерн разделяет данные этих объектов на две часте:
+ легковесы
+ контексты
Теперь вместо хранения одинаковых данных во всех объектах, отдельные
объекты будут ссылаться на несколько общих объектов, хранящих эти данные.

Для удобства работы с легковесами и контекстами можно создать фабричный
метод, принимающий в параметрах все внутреннее(а иногда и внешнее)
состояние желаемого объекта.

Достоинства:
+ экономит оперативную память

Недостатки:
- расходует процессорное время на вычисление и поиск контекста
- усложняет код программы за счет множества дополнительных классов