<html>
<head>
    <title>Calculation Form</title>
</head>
<body>
    <form action="calc.php" method="post">
    <b>Value 1: </b><br/>
    <input type="text" size="10" name="value1"><br/>
    <b>Value 2: </b><br/>
    <input type="text" size="10" name="value2"><br/>
    <b>Calculation:</b><br/>
    <input type="radio" name="calcu" value="add">Add</input>
    <input type="radio" name="calcu" value="sub">Subtract</input>
    <input type="radio" name="calcu" value="mul">Multiply</input>
    <input type="radio" name="calcu" value="div">Divide</input>
    <br/>
    <input type="submit" value="Calculate">
    <input type="reset" value="Clear"><br/>
    </form>
</body>

</html>