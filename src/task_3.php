<link rel="stylesheet" href="style.css">

<h4>У заданому рядку замінити кожен другий символ рядку на пробіл</h4>

<form name="form" method="post">
    <label for="data">Рядок: </label>
    <input type="text" name="data" id="data" class="width_400px">
    <input type="submit">
</form>

<?php    
    // Обробка відправки форми
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = isset($_POST["data"]) ? $_POST["data"] : "";
        
        echo "Початкове значення: $data <br>";
        
        // Заміна кожного другого символу на пробіл
        for ($i = 1; $i < strlen($data); $i += 2) {
            $data[$i] = " ";
        }
        
        echo "Кінцевий результат: $data";
    }
