<?php

extract ($_POST);

if(isset($add))
 {
	$grosspay = $innercity + $basicsalary + $overtime;
	
	$taxablepay = ($grosspay  * 9)/ 100;
	$pensionablepay = ($grosspay  * 5.5)/ 100;
	$studentloan = ($grosspay  * 2.5)/ 100;
	$nipayment = ($grosspay  * 2.3)/ 100;

	$deduction = $taxablepay + $pensionablepay + $studentloan + $nipayment;

	$netpay = $grosspay - $deduction;
	
	  $referenceno = rand(1200, 100000);
	  $employer ="Bringino, Charles Hudson ";
	  $empaddress = "Zabarte Road, Camarin, Caloocan City ";
	  $taxperiod = date('m');
	  $pension = $taxperiod * $pensionablepay;
	  $tax = $taxperiod  * $taxablepay;
	  $paydate = date('d/m/y');
	  $studentref = $studentloan * $taxperiod;

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management</title>
    
</head>
<body bgcolor="808080">
    <link rel="stylesheet" href="style.css">
	<div class="image">
		<center><img src="clare.png" height="25%" width="150px"></center>
		<center><h2>PAYROLL MANAGEMENT SYSTEM</h2></center>
		</div>
    <hr size=5 color = "white" width="100%">
    <div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table class ="style1">
            <tr>
                <td>Employee Name:</td>
					<td><input type="text" name="employee" style="width: 350px" required></td>

				<td>Post Code:</td>
					<td><input type="text" name="postcode" style="width: 350px" required></td>

			</tr>
			<tr>
                <td>Address:</td>
					<td><input type="text" name="address" style="width: 350px"></td>

				<td>Gender:</td>
					<td>Male<input type="radio" value="m" name="g" value="<?php echo $m; ?>" onfocus="this.value='' " required/>
					Female<input type="radio" value="f" name="g" value="<?php echo $g; ?>" onfocus="this.value='' " required/>
					</td>
			</tr></table>

<!--=============================================================================================================================-->
			<table class ="style1">
				<tr><td>
					<table bgcolor="808080">
						<tr>
                		<td>Reference No:</td>
						<td><input type="text" name="referenceno" style="width: 470px"
						value = "<?php echo $referenceno ?>" onfocus ="this.value=''"></td>
						</tr>
						<td>Employer:</td>
						<td><input type="text" name="employer" style="width: 470px"
						value = "<?php echo $employer ?>" onfocus ="this.value=''"></td>
						</tr>
						<tr><td>Emp Address</td>
							<td><input type="text" name="empaddress" style="width: 470px"
							value = "<?php echo $empaddress ?>" onfocus ="this.value=''"></td>
				</tr>
			</table></td>
			
<!--=============================================================================================================================-->
			
			<td><table bgcolor="C0C0C0">
				<tr>
					<td>Tax Period:</td>
						<td><input type="text" name= "taxperiod" style="width: 100px"
						value = "<?php echo $taxperiod ?>" onfocus ="this.value=''">
						</td>
						</tr>

					<tr>
					<td>Tax Code:</td>
						<td><input type="text" name= "taxcode" style="width: 300px" required>
						</td>
					</tr>
					<tr>
						<td>Pay Date:</td>
						<td><input type="text" name= "paydate" style="width: 500px"
						value = "<?php echo $paydate ?>" onfocus ="this.value=''">
						</td>
				</tr>

					</tr>

				</table></td></tr>
			</table>

<!--=============================================================================================================================-->
			<table class="style1">
			<tr>
				<td>Inner City Weighting:</td>
					<td><input type="text" name = "innercity" style="width: 260px"
					value = "₱<?php echo $innercity ?>" onfocus ="this.value=''">
			</td>
				<td>Tax ToDate:</td>
					<td><input type="text" name = "tax" style="width: 260px"
					value = "₱<?php echo $tax ?>" onfocus ="this.value=''">
			</td>
				<td>Pension ToDate:</td>
					<td><input type="text" name = "pension" style="width: 260px"
					value = "₱<?php echo $pension ?>" onfocus ="this.value=''">
			</td>
			</tr>
			<tr>
				<td>Basic Salary:</td>
					<td><input type="text" name = "basicsalary" style="width: 260px"
					value = "₱<?php echo $basicsalary ?>" onfocus ="this.value=''">
			</td>
				<td>Student ToDate:</td>
					<td><input type="text" name = "studentref" style="width: 260px"
					value = "₱<?php echo $studentref ?>" onfocus ="this.value=''">
			</td>
				<td>NI Code:</td>
					<td><input type="text" name = "nicode" style="width: 260px">
			</td>
			</tr>

			<tr><td>Over Time:</td>
				<td><input type="text" name = "overtime" style="width: 260px"
				value = "₱<?php echo $overtime ?>" onfocus ="this.value=''">
			</td>
			
			<td>Student Loan:</td>
				<td><input type="text" name = "studentloan" style="width: 265px"
				value = "₱<?php echo $studentloan ?>" onfocus ="this.value=''">
			</td>

			<td>NI Number:</td>
				<td><input type="text" name = "ninumber" style="width: 260px"
				value = "<?php echo $ninumber ?>" onfocus ="this.value=''">
			</td>
			</tr>
			
			</table>
			</td>
			</td>
			</tr>

<!--=============================================================================================================================-->
			<table class="style1">
				<tr><td>
					<table bgcolor="808080">
						<tr>
							<td>NI Payment:</td>
						 <td><input type="text" name = "nipayment" style="width: 460px"
						 value = "₱<?php echo $nipayment ?>" onfocus ="this.value=''">
					</td></tr>
					<tr><td>Taxable Pay:</td>
						 <td><input type="text" name = "taxablepay" style="width: 460px"
						 value = "₱<?php echo $taxablepay ?>" onfocus ="this.value=''">
					</td></tr>

					<tr><td>Pensionable Pay:</td>
						 <td><input type="text" name = "pensionablepay" style="width: 460px"
						 value = "₱<?php echo $pensionablepay ?>" onfocus ="this.value=''">
					</td></tr>

					</table></td>


<!--=============================================================================================================================-->
			<td><table bgcolor="C0C0C0">
				<tr>
					<td>Gross Pay:</td>
						<td><input type="text" name = "grosspay" style="width: 500px"
						value = "₱<?php echo $grosspay ?>" onfocus ="this.value=''">
				</td></tr>
					<tr><td>Deduction:</td>
					<td><input type="text" name = "deduction" style="width: 500px"
					value = "₱<?php echo $deduction ?>" onfocus ="this.value=''">
				</td></tr>

				<tr><td>Net Pay:</td>
					<td><input type="text" name = "netpay" style="width: 500px"
					value = "₱<?php echo $netpay ?>" onfocus ="this.value=''">
				</td></tr>

				</table></td></tr>
			</table>

<!--=============================================================================================================================-->
			<table class="style1">
				<tr><td>
					<table bgcolor="808080">
						<tr>
							<td>Reference Note:</td>
							<td><textarea name="" id="" cols="95" rows="5">Employee Name:<?php echo $employee ;?> /Net Pay:₱<?php echo $netpay ;?> /Reference No.:<?php echo $referenceno ;?>
 							This is based on income Tax, National Insurance and Student Loan Information from November 2023.

							</textarea></td>
						</tr>

					</table></td>

<!--=============================================================================================================================-->
			<td><table bgcolor="C0C0C0">
				<tr>
					<td></td><td align="left" style="width: 400px">
				<input type="submit" value="Submit" name = "add" class='btn'></td>
				</tr>
				<tr>
					<td></td><td align="left" style="width: 400px">
				<input type="reset" value="Reset" name ='reset' class='btn' onclick="reset();"></td>
				</tr>
			</table></td></tr>
		</table>

<!--=============================================================================================================================-->



			</table>
    	</div>
	</form>
</body>
</html>