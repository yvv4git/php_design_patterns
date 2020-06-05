Порождающий паттерн.
Строитель / Builder.
 
Он полезен, когда мы хотим инкапсулировать создание сложного объекта.
Мы просто расскажем фабрике, какому строителю доверить создание продукта.

Является противоположностью антипаттерная "Телескопический конструктор".

Пример антипаттерна "Телескопический конструктор". Когда у объекта есть множество свойств.
И эти свойства задаются через __construct.
public function __construct($size, $cheese = true, $pepperoni = true, $tomato = false, $lettuce = true)
 
Состав:
1. Шеф/Директор/Фабрика.
2. Строитель.
3. Продукт.