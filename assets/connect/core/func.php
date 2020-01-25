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
 * Преобразование роли из int в string
 * @param type $iRole
 * @return string
 */
function RoleCheck($iRole) {
    switch ($iRole) {
        case 1:
            $role = 'Администратор';
            break;
        case 2:
            $role = 'Пользователь';
            break;
        case 3:
            $role = 'Спонсор';
            break;
        default:
            $role = 'ХЗ';
            break;
    }
    return $role;
}

/**
 * Преобразование поля из int в string
 * @param type $iGender
 * @return string
 */
function GenderCheck($iGender) {
    switch ($iGender) {
        case 1:
            $gender = 'Мужчина';
            break;
        case 0:
            $gender = 'Женщина';
            break;
        case '':
            $gender = 'Пусто';
            break;
        default:
            $gender = 'ХЗ';
            break;
    }
    return $gender;
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

/**
 * Фильтрация данных вводимых пользователем с формы
 * @param type $data
 * @return type
 */
function filterDataForms($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}