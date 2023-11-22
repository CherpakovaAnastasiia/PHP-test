<?php 
// Функция подсчета возраста по дате рождения
// Вариант 1

function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y')-date('Y', $birthday_timestamp);
    if(date('md', $birthday_timestamp)>date('md')) {
        $age--;
    }
    return $age;
}

// Пример использования
// Код:

echo calculate_age('1990-01-01');
// Параметром функции может выступать любая строка с валидной датой.

// Вариант 2

function get_age( $birthday ){

  $diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );

  return substr( $diff, 0, -4 );
}
// Пример использования

echo get_age( '1995-09-10' );         //> 24
echo get_age( '10 September 1995' );  //> 24
echo get_age( '10-Sep 1995' );        //> 24
echo get_age( 'September 10, 1995' ); //> 24

?>