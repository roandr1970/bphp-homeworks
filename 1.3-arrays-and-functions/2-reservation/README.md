# Резервация мест

## Описание

Имея на руках карту посадочных мест нужно научиться бронировать места не только для одного человека, а для пар и компаний.

Например, в театр пришли двое человек и хотя сесть рядом. Нужно пройтись по имеющейся карте посадочных мест и найти лучшее место (ближайшее сцене) или сказать, что подходящих мест нет.

## Техническое задание

Необходимо написать функцию поиска идущих подряд значений `FALSE` в массиве. При первом совадении функция должна вернуть номер ряда и места. 

Количество идущих подряд мест и массив для проверки (карта посадочных мест) должны передаваться как аргументы функции

Функция должна пройти по всем рядам входного массива и для каждого элемета проверить что текущий и следующие за ним элементы имееют значение `FALSE`

При написании данной функции нужно учитывать что для проверки ряда достаточно проверить `n-k+1` первых позиций в ряду, где 
* n - размер ряда
* k - количество необходимых мест

Например в ряду из 5 мест для поиска 3 свободных достаточно проверить первые три места (начиная с четвертого мест не хватит даже если все свободны)