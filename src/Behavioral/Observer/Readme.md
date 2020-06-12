Поведенческий паттерн.
Наблюдатель / Observer

Также известен как: Издатель-Подписчик, Слушатель, Observer.
Наблюдатель - поведенческий паттерн проектирования, который создает
механизм подписки, позволяющий одним объектам следить и реагировать на
события, происходящие в других объектах.

Проблема.
Допустим, у нас есть полкупатель и магазин. Покупатель может каждый день
ходить в магазин, чтобы узнать - есть ли там интересующий его товар.
Но тогда он будет тратить ценное время. Конечно, магазин может рассылать
спам все покупателям, о новых товарах, но ни все любят спам. Это тоже
плохо.

Решение.
Одни объекты, которые содержат интересное событие "Издателями", а другие
объекты, которым это событие интересно - "Подписчиками".
Причем, издатели не должны вести этот список сами. Они предоставят
подписчикам механизм вписать себя в список подписчиков или вычеркнуть
себя от туда.

Состав:
1. Издатель.
Владеет внутринним состоянием, которое интересно подписчикам. Он владеет
механизмом подписки, списком подписки и методами подписки и выписки.
Когда внутреннее состояние меняется, он уведомляет подписчиков.
2. Подписчик.
Определяет интерфейс, которым пользуется издатель для отправки сообщений.
Обычно достаточно одного метода.
3. Конкретные подписчики.
Выполняют что-то в ответ на оповещение, которое пришло от издателя.
4. Клиент.
Создает издателей и подписчиков, а затем регистрирует подписчиков на
обновления издателей.