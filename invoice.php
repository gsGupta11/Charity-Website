<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
<link rel="stylesheet" href="invoice.css">
<?php
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
        $r =rand(10000,99999);
        echo '<div class="invoice">';
        echo '<div class="invoice-logo">';
        echo '</div>';
        echo '<div class="invoice-sec-1">';
        echo '<div class="invoice-sec-1-ref">';
        echo '<div class="ref-no">';
        echo "<p>Donar Name - <span>$dname</span></p>";
        echo "<p>Invoice No: <span>BASIS-2019/UCBL/$r<br><br>Phone Number: $cell</span></p>";
        echo '</div>';
        echo '<div class="to-invoice">';
        echo '<p>To</p>';
        echo "<p>Online Charity System</p>";
        echo "<p>Purpose: <span>$pur</span></p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-sec-1-date">';
        echo "<p>Date: <span>$date</span></p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-banner">';
        echo '<div class="banner-d">';
        echo '<p>Invoice</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table">';
        echo '<div class="invoice-table-container">';
        echo '<div class="invoice-table-data">';
        echo '<div class="invoice-table-sl invoice-table-sl-h">';
        echo '<strong> <p>Sl. No</p></strong>';
        echo '</div>';
        echo '<div class="invoice-table-desc invoice-table-desc-h">';
        echo '<strong><p>Description</p></strong>';
        echo '</div>';
        echo '<div class="invoice-table-amount invoice-table-amount-h">';
        echo '<strong><p>Amount</p></strong>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table-data">';
        echo '<div class="invoice-table-sl">';
        echo '<p>01</p>';
        echo '</div>';
        echo '<div class="invoice-table-desc">';
        echo "<p>Donated at Online Charity System via $paytype for charity drive namely - $pur</p>";
        echo '</div>';
        echo '<div class="invoice-table-amount">';
        echo "<p>$amount</p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table-footer">';
        echo '<div class="invoice-total">';
        echo '<p>Total</p>';
        echo '</div>';
        echo '<div class="invoice-total-amount">';
        echo "<p>$amount /-</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-declaration">';
        echo '<p>Thank you for your Donation !<br><br>The amount you have given will make a difference as the proceeds will go help the people in need. This receipt is an attestation that we have gratefully received your generous contribution to our humble institution. Keep this receipt for your tax deduction purposes.</p>';
        echo '</div>';
        echo '<div class="invoice-greeting">';
        echo '<p>Thank You</p>';
        echo '<p>Gauri Shankar Gupta</p>';
        echo '<p>ADMIN</p>';
        echo '<p>Online Charity System</p>';
        echo '</div>';
        echo '</div>';
    }

?>

<script>
setTimeout(function(){print(); }, 4000);
</script>