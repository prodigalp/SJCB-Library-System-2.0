<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {  
?>

<html>
<head>
<title>Library System Main Menu</title>
<link rel="stylesheet" type="text/css" href="embelish/transact_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<div id="header">Transactions</div>
		<div id="content">
		<form name="main" id="main" method="POST">
			<!-- First Layer -->
			<div id="outside">
				<a href="request.php"><img src="IMG/BG/BG1.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">barrowed</div>
			</div>
			<div id="outside">
				<a href="return_book.php"><img src="IMG/BG/BG2.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Returned books</div>
			</div>
			<div id="outside">
				<a href="annual.php"><img src="IMG/BG/BG3.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">annual reports</div>
			</div>
			<div id="outside">
				<a href="book_summary.php"><img src="IMG/BG/BG4.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">books</div>
			</div>
			<div id="reset"></div>
			
			<!-- Second Layer -->
			<div id="outside">
				<a href="college_count.php"><img src="IMG/BG/BG5.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">college</div>
			</div>
			<div id="outside">
				<a href="highschool_count.php"><img src="IMG/BG/BG6.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">highschool</div>
			</div>
			<div id="outside">
				<a href="instructor_count.php"><img src="IMG/BG/BG7.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">instructor</div>
			</div>
			<div id="outside">
				<a href="backup.php"><img src="IMG/BG/BG8.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">backup</div>
			</div>
			
			<div id="reset"></div>
			
			<!-- Third Layer -->
			<div id="outside">
				<a href="word_entry.php"><img src="IMG/BG/BG9.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">word entries</div>
			</div>
			<div id="outside">
				<a href="pwd_reset.php"><img src="IMG/BG/BG10.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Password Reset</div>
			</div>
			<div id="outside">
				<a href="merge_doc.php"><img src="IMG/BG/BG11.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">merge documents</div>
			</div>
			<div id="outside">
				<a href="helper.php"><img src="IMG/BG/BG12.png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">help</div>
			</div>
			<div id="reset"></div>
			
			<!-- Fourth Layer -->
			<div id="outside">
				<a href="add_user_menu.php"><img src="IMG/ICN/set (1).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">New Account</div>
			</div>
			<div id="outside">
				<a href="add_books.php"><img src="IMG/ICN/set (2).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">New Book</div>
			</div>
			<div id="outside">
				<a href="add_magazine.php"><img src="IMG/ICN/set (3).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">New Magazine</div>
			</div>
			<div id="outside">
				<a href="add_words.php"><img src="IMG/ICN/set (4).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">New Word</div>
			</div>
			<div id="reset"></div><br>
			
			<a href="sindex.php" style="text-decoration:none">
				<input type="button" value="Home">
			</a>	
		</form>
		</div>
		<div id="footer">Programmer: Eyestrain [Tapar]</div>
	</div>
</body>
</html>
<?php
	}
	else {
	header("location:index.php");
}
?>