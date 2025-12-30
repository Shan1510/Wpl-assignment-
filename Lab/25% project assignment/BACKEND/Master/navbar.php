<?php

include 'conection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <navbar>
    <form method="post" action=""  id="monthYearForm">
    <select name="month" onchange="this.form.submit()">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
        
    </select>

    <select name="year" onchange="this.form.submit()">
        <option value="2026">2025</option>
        <option value="2027">2026</option>
        <option value="2028">2026</option>
        <option value="2029">2026</option>
        <option value="2030">2026</option>
        <option value="2031">2026</option>
        <option value="2032">2026</option>
        <option value="2033">2026</option>
        <option value="2034">2026</option>
        <option value="2035">2026</option>
        <option value="2036">2026</option>
</select>

    <type="submit">Apply</button>
</form>
</navbar>
</body>
</html>