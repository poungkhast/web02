</php
$A = 123;
function Test()
    {
    global $A = test;
    echo"Nilai A dalam fungsi = $A \n";
    }
Test();
echo"Nilai A dalam fungsi = $A \n";
?>