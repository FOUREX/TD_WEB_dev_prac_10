<link rel="stylesheet" href="style.css">

<h4>Відомо зріст учнів класу. Визначити кількість учнів, чий зріст вище середнього у класі (масив)</h4>

<form name="form" method="post">
    <label for="data">Зріст учнів (через пробіл):</label>
    <input type="text" name="data" id="data">
    <input type="submit">
</form>

<?php
    // Обчислює середнє значення в масиві
    function average($array)
    {
        return array_sum($array) / count($array);
    }
    
    // Обробка відправки форми
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $raw_data = isset($_POST["data"]) ? $_POST["data"] : "";
        $data = explode(" ", $raw_data);

        // Валідація даних
        if ($raw_data == "") {
            echo "Данні введені не вірно";
            return;
        }

        // Підрахунок середнього значення
        $average = average($data);
        $count = 0;
        
        echo "Введені дані: $raw_data <br>";
        echo "Середній зріст: $average <br>";

        // Підрахунок кількості значень які більші за середнє
        foreach ($data as $value) {
            if ((int)$value > $average) {
                $count++;
            }
        }
        
        echo "Кількість учнів чий зріст вище середнього: $count";
    }
