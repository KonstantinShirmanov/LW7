<div id="left">
		<div id="reg">
		
		<form method="POST" >
			<div align="center">
				<table border="0" width="90%" id="table1">
					<tr>
						<td colspan="2">
						<p align="center">Регистрация нового пользователя</td>
					</tr>
					<tr>
						<td width="55%">Ваш ник</td>
						<td width="35%"><input type="text" name="T1" size="20" value="<?echo $_POST["T1"];?>"></td>
					</tr>
					<tr>
						<td width="55%">Ваш пароль</td>
						<td width="35%"><input type="password" name="T2" size="20" value="<?echo $_POST["T2"];?>">></td>
					</tr>
					<tr>
						<td width="55%">Ваш пароль еще раз</td>
						<td width="35%"><input type="password" name="T3" size="20" value="<?echo $_POST["T3"];?>">></td>
					</tr>
					<tr>
						<td width="55%">Фамилия</td>
						<td width="35%"><input type="text" name="T4" size="20" value="<?echo $_POST["T4"];?>">></td>
					</tr>
					<tr>
						<td width="55%">Имя</td>
						<td width="35%"><input type="text" name="T5" size="20" value="<?echo $_POST["T5"];?>">></td>
					</tr>
					<tr>
						<td width="55%">Пол</td>
						<td width="35%"><select size="1" name="D1">
						<option>мужской</option>
						<option>женский</option>
						</select></td>
					</tr>
					<tr>
						<td width="55%">Являетесь ли вы студентом/студенткой?</td>
						<td width="35%"><input type="radio" value="V1" name="R1">да
						<input type="radio" name="R1" value="V2">нет</td>
					</tr>
					<tr>
						<td width="55%">Ваш <span lang="en-us">e-mail</span></td>
						<td width="35%"><input type="text" name="T6" size="20"></td>
					</tr>
					<tr>
						<td width="55%">Получать рассылку с нашего сайта?</td>
						<td width="35%"><input type="checkbox" name="C1" value="ON"></td>
					</tr>
				</table>
			</div>
			<p><input type="submit" value="Подтвердить" name="B1"></p>
		</form>
		
		</div>

		<div id="info">
		
		<img src="PHP.png" align="left">
		<p>
		PHP&nbsp;(англ.&nbsp;PHP (пи-эйч-пи): Hypertext Preprocessor&nbsp;— «PHP:&nbsp;препроцессор&nbsp;гипертекста»; 
		первоначально&nbsp;Personal Home Page Tools&nbsp;— «Инструменты для создания 
		персональных веб-страниц»)&nbsp;—&nbsp;скриптовый язык&nbsp;программирования общего 
		назначения, интенсивно применяемый для разработки веб-приложений. В 
		настоящее время поддерживается подавляющим большинством&nbsp;хостинг-провайдеров&nbsp;и 
		является одним из лидеров среди языков программирования, применяющихся 
		для создания&nbsp;динамических веб-сайтов.</p>
		</div>
	</div>
	