<?php
$num1 = 0;
$num2 = 0;

function showMenu() {
    echo "\n=== ПРОСТОЙ КАЛЬКУЛЯТОР ===\n";
    echo "1. Ввести два числа\n";
    echo "2. Сложение\n";
    echo "3. Вычитание\n";
    echo "4. Деление\n";
    echo "5. Степень\n";
    echo "0. Выход\n";
    echo "Выберите: ";
}
while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case '1':
            echo "Первое число: ";
            $num1 = (float) fgets(STDIN);
            echo "Второе число: ";
            $num2 = (float) fgets(STDIN);
            echo "Числа сохранены: $num1 и $num2\n";
            break;
            
        case '2':
            $result = $num1 + $num2;
            echo "Результат: $num1 + $num2 = $result\n";
            break;
            
        case '3':
            $result = $num1 - $num2;
            echo "Результат: $num1 - $num2 = $result\n";
            break;
            
        case '4':
            if ($num2 == 0) {
                echo "Ошибка: на ноль делить нельзя!\n";
            } else {
                $result = $num1 / $num2;
                echo "Результат: $num1 / $num2 = $result\n";
            }
            break;
            
        case '5':
            $result = pow($num1, $num2);
            echo "Результат: $num1 ^ $num2 = $result\n";
            break;
            
        case '0':
            echo "Пока!\n";
            exit;
            
        default:
            echo "Неверный выбор!\n";
    }
}
?>