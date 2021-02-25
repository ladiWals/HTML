<?php
?>

<!DOCTYPE html>

<html>
	<head>
		<title>тестики</title>
		<link rel="SHORTCUT ICON" href="/favicon.ico" type="image/x-icon">
	</head>

	<body>

		<a id="mylink" href="http://php/profitHata/">WTF!</a><br>
		<img id="justFavicon" src="/favicon.ico"><br>

		<script type="text/javascript">
			url = document.links.mylink.href
			imgsrc = document.images.justFavicon.src
			document.write("URL: " + url + '<br>')
			document.write("favicon-sorce: " + imgsrc + '<br>')
			for (j = 0; j < 5; j++) {
				document.write(j + '<br>');
			}
			document.write('our history length: ' + history.length);
			console.log('ha-ha di naxui iz consoli')
		</script>

		<form method="POST" action="/formBullying.php" autocomplete="off">
			<input type="text" name="sometext" required="required"><br>
			<input type="text" name="sometext" value="ohh very big tits"><br>
			<input type="text" name="sometext" placeholder="not very?"><br>

			<textarea cols="50" rows="10" wrap="off" autofocus="autofocus">
это должен быть плэйсхолдер off
			</textarea>
			<br>
			<textarea cols="50" rows="10" wrap="soft">
тут будет soft
			</textarea>
			<br>
			<textarea cols="50" rows="10" wrap="hard">
тут будет hard
			</textarea>
			<br>

			Хочу ткнуть здесь<input type="checkbox" name="mycheck"><br>
			А тут решила судьба<input type="checkbox" name="mycheckTwo" value="second" checked><br>
			Мой выбор - Влаимир Путин<input type="checkbox" name="mycheckThird" value="third" checked="checked"><br>

			Персик<input type="radio" name="fruit" value="peach" checked><br>
			Банан<input type="radio" name="fruit" value="banana"><br>
			Ананас<input type="radio" name="fruit" value="pineapple"><br>
			Яблоко<input type="radio" name="fruit" value="apple"><br>

			<select name="selo" size="1">
				<option value="aaa">Антошка</option>
				<option value="bbb">Барыга</option>
				<option value="ccc">Саня</option>
			</select>
			<br><br>

			<select name="selo[]" size="1" multiple="multiple">
				<option value="aaa">Антошка</option>
				<option value="bbb" selected="selected">Барыга</option>
				<option value="ccc">Саня</option>
			</select>
			<br>

			<label>Вот так работает label<input type="checkbox" name='parasha'></label><br>

			<input type="time" name="mytime"><br>
			<input type="date" name="mydate">

			<br><input type="submit" name="submit"><br>
		</form>

		<hr>
		<h1>Тут будет вывод PHP</h1>
		<pre>
			<?php
			if (isset($_POST['submit'])) {
				var_dump($_POST);
			}

			?>
		</pre>
		<hr>
	</body>
</html>