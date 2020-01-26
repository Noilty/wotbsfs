<?php
/**
 * Проверка полей формы на пустоту
 * @param type $mParam
 * @return string
 */
function EmptyCheck($mParam) {
    $sMessage = [];
    foreach ($mParam as $key => $value) {
        if( $value === "" ) {
            $sMessage[] = 'Поле <strong>'.$key.'</strong> Не может быть пустым!';
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

/**
 * процент побед
 * @param type $winBattle
 * @param type $numberBattles
 * @return type
 */
function winningPercentage($winBattle, $numberBattles) {
    $result = ($winBattle/$numberBattles)*100;
    return number_format($result, 2, '.', '');
}

/**
 * Расчет среднего урона игрока
 * @param type $param
 * @return type
 */
function averageDamage($param) {
    $i = 0;
    foreach ($param as $value_param) {
        foreach ($value_param as $value_value_param) {
            $i++;
            $sum = $damage += $value_value_param;
        }
    }
    return round($sum/$i);
}

/**
 * Сумма: Урон игрока
 * @param type $gamer
 * @return type
 */
function sumDamagePlayer($gamer) {
    foreach ($gamer as $value_gamer) {
        foreach ($value_gamer as $value_value_gamer) {
            $sum = $damage += $value_value_gamer;
        }
    }
    return $sum;
}

/**
 * Кол-во боев
 * @param type $param
 * @return type
 */
function numberBattles($param) {
    foreach ($param as $key_param => $value_param) {
        foreach ($value_param as $key__value_param => $value__value_param) {
            echo $value__value_param.'<br />';
            //sum = $battle += $value_value_param;
        }
    }
    return $sum;
}

/**
 * win & lose
 * @param type $choice
 * @return string
 */
function isWinLose($choice) {
    if($choice == 1) {
        $type = 'ПОБЕДА';
        $class = 'battle-win';
    } else {
        $type = 'ПОРАЖЕНИЕ';
        $class = 'battle-fail';
    }
    $reultChoiceBattle = [$type, $class];
    return $reultChoiceBattle;
}