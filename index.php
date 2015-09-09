<?php
/*
 *      index.php
 *      
 *      Copyright 2011 Ahmad Zafrullah Mardiansyah <zaf@zaf-laptop>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

$ex = '
<html>
<body>

This is an <b>example</b> html code!<br/>
<br/>
by <blink><i>Zaf</i></blink><br/>
<a href="http://elkom08.x10.bz">http://elkom08.x10.bz</a>

</body>
</html>
';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Try It HTML</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<form action="" method="post">
	<div id="main">
		<div id="editor">
			<p>type or edit the code here ...</p>
			<?php
				if (isset($_POST['q'])){
					echo '<textarea name="q">';
					echo $_POST['q'];
					echo '</textarea>';
				} else {
					echo '<textarea name="q">';
					echo $ex;
					echo '</textarea>';
				}
			?>
		</div>
		<div id="result">
			<p>the result shown here ...</p>
			<?php
				if (isset($_POST['q'])){
					echo '<iframe src="result.php?q='.urlencode($_POST['q']).'"></iframe>';
				} else {
					echo '<iframe src="result.php?q='.urlencode($ex).'"></iframe>';
				}
			?>
		</div>
		<p>when u've done, <input type="submit" value="click here" /> to view result >></p>
		<p class="footer">inspirated from w3schools, remade by me using PHP :)</p>
	</div>
	</form>
</body>

</html>
