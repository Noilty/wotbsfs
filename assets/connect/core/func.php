<?php
/**
 * Проверка полей формы на пустоту
 * @param type $mParam
 * @return string
 */
function EmptyCheck($mParam) {
    $sMessage = [];
    foreach ($mParam as $key => $value) {
        if( empty($value) ) {
            $sMessage[] = 'Поле <strong>'.$key.'</strong> Не может быть пустым';
        }
    }
    return $sMessage;
}

/**
 * Мой Дамр
 * @param type $exp
 */
function MyDump($exp) {
    echo '<pre>';
    echo var_dump($exp);
    echo '</pre>';
}