<?php

// Спочатку підключаємо інтерфейс
require_once 'AccountInterface.php';  
// Потім підключаємо класи
require_once 'BankAccount.php';
require_once 'SavingsAccount.php';

// Тестування
try {
    // Створення об'єктів та виконання операцій
    $account1 = new BankAccount("USD", 1000);
    echo "Баланс рахунку 1: " . $account1->getBalance() . "<br>";
    $account1->deposit(500);
    echo "Баланс після поповнення: " . $account1->getBalance() . "<br>";
    $account1->withdraw(200);
    echo "Баланс після зняття: " . $account1->getBalance() . "<br>";

    // Створення об'єкта накопичувального рахунку
    $account2 = new SavingsAccount("USD", 1000);
    echo "Баланс накопичувального рахунку: " . $account2->getBalance() . "<br>";
    $account2->applyInterest();
    echo "Баланс після нарахування відсотків: " . $account2->getBalance() . "<br>";
    $account2->deposit(300);
    echo "Баланс після поповнення: " . $account2->getBalance() . "<br>";

    // Тестування зняття коштів
    $account1->withdraw(1500); // Це має викликати виняток
} catch (Exception $e) {
    echo "Помилка: " . $e->getMessage() . "<br>";
}

?>
