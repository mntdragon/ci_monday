<h1>UPDATE CUSTOMERS</h1>
<FORM method="POST" action="<?php echo site_url('customer/update_customers'); ?>">
<TABLE>
    <TR>
        <TH>FIRSTNAME</TH>
        <TH>LASTNAME</TH>
    </TR>
    <?php 
    foreach($customers as $row){
        //enable to edit in the fname and lname columns
        echo '<input type="hidden" name=id[] value="' .$row['id_customers'].'"/>';
        echo '<tr><td><input type="text" name="fn[]" value="'; //make fn array because may delete many names
            echo $row['fname'];
            echo '"/></td>';
        echo '<td><input type="text" name="ln[]" value="';  // also ln as fn
            echo $row['lname'];
            echo '"/></td></tr>';
    }
    ?>

    <tr>
        <td></td>
        <td><input type="submit" name="btnSave" value="Save"/></td>
    </tr>
</TABLE>
</FORM>

<?php
//print_r($customers);
?>