<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
<link rel="stylesheet" href="invoice.css">
<?php
    echo "HERE";
    if(isset($_POST['submit']))
    {
        $dname = $_POST['dname'];
        $amount=$_POST['amount'];
        $pur = $_POST['pur'];
        $addr = $_POST['addr'];
        $cell=$_POST['cell'];
        $date=$_POST['date'];
        $pay=$_POST['pay'];
        $paytype=$_POST['paytype']; 
        echo $pay;
        echo $amount;
        echo $dname;
    }

?>
