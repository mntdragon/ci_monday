<!DOCTYPE html>
<html>
<head>
<title>Ci Example</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/myStyle.css');?>">
</head>
<body>

<h1>This is the CodeIgniter Example</h1>
<ul>
<li><a href="<?php echo site_url('main');?>">Main Page</a></li> <!--main hoac main/index vi index se dong automaticlly-->
<li><a href="<?php echo site_url('customer/show_customers');?>">Show Customers</a></li> <!--PHP: thay cho http://localhost/ci_monday/index.php/customer/show_customers-->
<li><a href="<?php echo site_url('customer/add_customers');?>">Add a Customer</a></li>
<li><a href="<?php echo site_url('customer/delete_customers');?>">Delete a Customer</a></li>
<li><a href="<?php echo site_url('customer/update_customers');?>">Update a Customer</a></li>
</ul>


</body>
</html>