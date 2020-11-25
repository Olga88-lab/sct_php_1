<html>
<body>

<p>В чем отличие между функциями isset() и empty() в PHP?</p>

   <p>isset() — проверяет переменную на существование, а также, что еe значение не null. Если переменная существует</br>
      и ее значение не null, то функция вернет true, все остальные случаи — это false.</br>
      empty() — проверяет переменную на существование и на пустоту. Если в переменной есть какое-то не пустое</br>
      значение или true, то функция вернет false, все остальные случаи — это true.</br>
      Эти функции выполняют сходные функции. С помощью них можно проверить, является ли переменная нулевой (NULL),</br>
      истинной (TRUE) или ложной (FALSE), а также была ли переменная вообще объявлена.</p>

   <p>Функцию empty() лучше всего использовать, когда нужно убедиться, что переменная существует и имеет значение,</br>
      которое не равно false. PHP будет обрабатывать пустые строки, целые числа 0, числа с плавающей запятой 0.0, </br>
      пустые массивы и логическое значение false как false. Таким образом, в основном, нужно использовать empty()</br>
      только тогда, когда хотим убедиться, что в переменной есть какое-то фактическое значение.</br>
      Функцию isset() можно использовать в случае, где нужно специально проверять, была ли переменная уже </br>
      объявлена и что ее значение не равно null. Таким образом, пока есть объявленная переменная, у которой</br>
      установлено значение, но не значение NULL, при тесте получится true. Это хорошее условие для проверки,</br>
      перед выполнением других проверок для выполнения действий с переменной.</p>
</body>
</html>

