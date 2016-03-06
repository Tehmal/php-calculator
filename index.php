<form method="post">
<table align="center">
	<tr>
		<td style="font-weight: bold;"><?php $result; ?></td>
	</tr>
	<tr>
		<td>WprowadŸ Pierwsz¹ Liczbê</td>
		<td><input type="text" name="l1"></td>
	</tr>
	<tr>
		<td>WprowadŸ Drug¹ Liczbê</td>
		<td><input type="text" name="l2"></td>
	</tr>
	<tr>
		<td>Wybierz dzia³anie</td>
		<td><select name="op">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="mod">mod</option>
				<option value="pi">pi</option>
			</select>
		</td>
	</tr>
	<tr>
        <td>
		</td>
        <td>
			<input type="submit" name="submit" value="   Rachuj   ">
		</td>
    </tr>
<?php
$cal = new calculator();
	if(isset($_POST['submit']))
	{   
		$result = $cal->getresult($_POST['l1'],$_POST['l2'],$_POST['op']);
	}

$pi = 3.14;
class calculator
{
    var $a;
    var $b;	
		function ckeckoperator($operator)
			switch($operator)
			{
				case '+';
	            return $this->a + $this->b;
				break;
				
				case '-';
				return $this->a - $this->b;
				break;
			
				case  '*';
				return $this->a * $this->b;
				break;
				
				case '/';
				return $this->a / $this->b;
				break;
				
				case 'mod'
				return $this->a % $this->b;
				break;				
			}
				
	
}	
?>
	