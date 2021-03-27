<?php
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
   $_SESSION['role']=='2' ) {	
	echo "
	<table id='tb2' width='100%'>
		<tr>
			<td>
				<a href='borrow.php?id=$row->accnum&id2=$_SESSION[ctrl]' style='text-decoration:none'>
					<input type='submit' name='btnBar' id='btnBar' value='Barrow'>
				</a>
			</td>
		</tr>
				
		<tr>
			<td> 
				<a href='basicview.php?id=$row->accnum' style='text-decoration:none'>
				<input type='submit' name='btnBas' id='btnBas' value='Basic view'>
				</a>
			</td>
		</tr>
				
		<tr>
			<td>
				<a href='define.php' style='text-decoration:none'>
				<input type='submit' name='btnDic' id='btnDic' value='Dictionary'>
				</a>
			</td>
		</tr>
				
		<tr>
			<td>
				<a href='books.php' style='text-decoration:none'>
					<input type='submit' name='btnPre' id='btnPre' value='&laquo;&nbsp;&nbsp;Back'>
				</a>
			</td>
					
		</tr>
	</table>";
}

if($_SESSION['role']=='1') {
	echo "
	<table id='tb2' width='100%'>
		<tr>
			<td> 
				<a href='basicview.php?id=$row->accnum' style='text-decoration:none'>
				<input type='submit' name='btnBas' id='btnBas' value='Basic view'>
				</a>
			</td>
		</tr>
				
		<tr>
			<td>
				<a href='define.php' style='text-decoration:none'>
				<input type='submit' name='btnDic' id='btnDic' value='Dictionary'>
				</a>
			</td>
		</tr>
				
		<tr>
			<td>
				<a href='books.php' style='text-decoration:none'>
					<input type='submit' name='btnPre' id='btnPre' value='&laquo;&nbsp;&nbsp;Back'>
				</a>
			</td>
					
		</tr>
	</table>";
}


?>