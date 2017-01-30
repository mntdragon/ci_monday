<h1>DELETE CUSTOMERS</h1>
<TABLE BORDER ="1">
    <TR>
        <TH>FIRSTNAME</TH>
        <TH>LASTNAME</TH>
        <TH>Delete selected</TH>
    </TR>
    <?php 
    foreach($customers as $row){
        echo '<tr><td>' .$row['fname'] .'</td>';
        echo '<td>' .$row['lname'] .'</td>';
        echo '<td>';
        echo '<button><a href="'.site_url('customer/remove_customer').'/'.$row['id_customers'].'"> Delete </a></button>';
        echo '</td></tr>';
        //them id customer cho moi link, doi select ben customer_modle tu fname, lname thanh *
  
    }
    ?>
</TABLE>
<?php
//print_r($customers);
?>