Поведенческий паттерн.
Итератор / Iterator

Предоставляет достук к внутренним полям объекта не раскрывая его структуру.
Часто используется вместо массива, чтобы предоставить не только список
пролей, но и наделить дополнительной логикой.

Суть паттерна - вынести код обхода коллекции из самой коллекции.

Методы:
  сurrent() возвращает текущий элемент
  next() перемещает указатель на следующий элемент
  key() возвращает индекс текущего элемента
  valid() проверяет, существует ли текущий элемент или нет
  rewind() переводит указатель текущего элемента на первый


Вообще, идея паттерна глубже.
Допустим у нас есть коллекция элементов. Коллекция может иметь разную
структуру. Это может быть дерево, граф или список. Т.е. коллекция может быть
выстроена по-разному. Для обхода коллекции может использоваться алгоритм, 
соответствующий структуре коллекции. 
Так вот, сама коллекция не знает, как её будут обходить. Это знает тот
класс итератора, который знает как работать с коллекцией.

Состав:
1. Итератор - интерфйс, описывающий методы доступа и обхода коллекции.
2. Конкретный итератор - реализует методы обхода какой-то конкретной 
коллекции.
3. Коллекция - описывает интерфейс получения итератора из коллекции.
Сама коллекция может создавать итераторы, ибо она знает, какие итераторы
могут с ней работать.
4. Конкретная коллекция - возвращает новый экземпляр определенного
конкретного итератора, связав его с текущим объектом коллекции. Сигнатура
метода возвращает интерфейс итератора, что позволяет клиенту не зависить
от конркретных классов итераторов.
5. Клиент - работает с объектами через интерфейсы итератора и коллекции.
Так клиентский код не зависит от конкретного класса итератора, что 
позволяет применять различные итераторы, не изменяя существующий код
программы.

Преимущества:
+ Упрощает классы хранения данных.
+ Позволяет реализовать различные способы обхода структуры данных.
+ Позволяет перемещаться по структуре данных в разные стороны.

Недостатки:
- неоправдан, если можно обойтись простым циклом.