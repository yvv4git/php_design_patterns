Поведенческий паттерн.
Посредник / Mediator

Посредник убирает прямые связи между отдельными компонентами, заставляя
их общаться между собой через себя.

Паттерн определяет объект, который инкапсулирует логику взаимодействия 
некоторого набора других объектов. Посредник обеспечивает слабую связность 
благодаря тому, что объекты не ссылаются друг на друга явно и можно 
изменять алгоритм их взаимодействия независимо. 
Таким образом эти объекты проще переиспользовать

Вернемся к примеру из паттерна «одиночка» - телефонной станции. 
Ее можно рассматривать в качестве релевантного примера и для данного паттерна. 
Однако есть различия: «посредник» должен еще и управлять своей группой. 
Если вернуться к примеру со строем, то «медиатором» в нем будет командир, отдающий приказы.

Объекты будут иметь ссылку на посредника и уведомлять его при различных событиях. 
А посредник свою очередь будет иметь ссылки на все объекты из этого множества. 
Так, что в соответствии с логикой их взаимодействия будет перенаправлять 
запросы конкретным объект.


Решает следующие проблемы:
+ убирает зависимость между компонентами системы, всесто этого они
становятся зависимыми от поредника.
+ централизуется управление в одном месте.

Состоит из:
1. Компоненты - это разнородные объекты, содержащие бизнес логику
программы.
2. Посредник - определяет интерфейс для обмена информацией с компонентами.
Обычно хватает одного метода для оповещения посредника о событиях, которые
произошли в компонентах.
3. Конкретный посредник - содержит код взаимодействия компонентов между
собой. Этот объект содержит ссылки на компоненты системы.

Преимущества:
+ устраняет зависимости между компонентами, позволяя повторно их использовать.
+ упрощает взаимодействие между компонентами.
+ централизует управление в одном месте.

Недостатки:
- посредник может сильно раздуться.