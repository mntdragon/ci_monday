<h1> Add new Customer</h1>
<FORM action="<?php echo site_url('customer/add_customers'); ?>" method ="POST">
<TABLE>
<TR>
    <TD>FIRSTNAME</TD>
    <TD><input type="text" name ="fn" placeholder ="Write your firstname" required =""/></TD>
</TR>
<TR>
    <TD>LASTNAME</TD>
    <TD><input type="text" name ="ln" placeholder ="Write your lastname" required =""/></TD>
</TR>
<TR>
    <TD></TD>
    <TD><input type="submit" name ="btnSave" value="Save"/></TD>
</TR>
</TABLE>
</FORM>

<?php 
if(isset($test)){  //Announcement of the insert progress
    if($test)
    echo 'Data Inserted';
    else
    echo 'Somehing went wrong';
}

?>