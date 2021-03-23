<html>
<head>
    <title>Calculation Result</title>
</head>
<body>
    <?php
        
        if (is_numeric($_POST['value1']) && is_numeric($_POST['value2'])){
            $fnum = ($_POST['value1']);
            $snum = ($_POST['value2']);
            
        if(isset($_POST['calcu'])){
            $opt = $_POST['calcu'];
        
    switch($opt){
        case $opt== "add":
           $res = $fnum + $snum;
            break;
        case $opt == 'sub':
           $res = $fnum - $snum;
            break;
        case $opt == 'mul':
            $res = $fnum * $snum;
            break;
        case $opt == 'div':
            $res = $fnum / $snum;
                }
                echo "Calculation result: $res";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>