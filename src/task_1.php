<link rel="stylesheet" href="style.css">

<h4>За введеними балами визначити оцінку студента (0..59 – незадовільно, 60..74 – задовільно, 75..89 – добре, 90..100 -
    відміно) При помилковому введенні числа вивести повідомлення про помилку</h4>

<form name="form" method="post">
    <label for="grade">Оцінка:</label>
    <input type="number" name="grade" id="grade" class="width_50px">
    <input type="submit">
</form>

<?php
    // Функція яка обробляє оцінку
    function check_grade($grade)
    {
        if ($grade < 0 || $grade > 100) {
            return "Оцінка за межами діапазону";
        }
        
        if ($grade <= 59) {
            return "незадовільний";
        }
        
        if ($grade <= 74) {
            return "задовільний";
        }
        
        if ($grade <= 89) {
            return "добрий";
        }
        
        return "відмінний";
    }

    // Обробка відправки форми
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = isset($_POST["grade"]) ? (int)$_POST["grade"] : -1;
        
        echo "Введена оцінка: $grade <br>Результат: " . check_grade($grade);
    }
