<div id="right">
    
    <div id="info"> 
    <img src="CSS.png" align="left">
    <p>  CSS используется создателями веб-страниц для задания цветов, шрифтов, 
	расположения отдельных блоков и других аспектов представления внешнего вида 
	этих веб-страниц. Основной целью разработки CSS являлось разделение описания 
	логической структуры веб-страницы (которое производится с помощью HTML или 
	других языков разметки) от описания внешнего вида этой веб-страницы (которое 
	теперь производится с помощью формального языка CSS). Такое разделение может 
	увеличить доступность документа, предоставить большую гибкость и возможность 
	управления его представлением, а также уменьшить сложность и повторяемость в 
	структурном содержимом. </p>
	</div>
    
    <div id="reg">
    
    <form method="POST">
		<div align="center">
		<table border="0" width="90%" id="table2">
			<tr>
				<td colspan="3">
		<p align="center">Расчет выражений</p></td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Первое число</span></td>
				<td width="29%"><input type="text" name="T7" size="20" value="<?echo $_POST['T7'];?>"></td>
				<td width="41%">Тип расчета</td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Второе число</span></td>
				<td width="29%"><input type="text" name="T8" size="20" value="<?echo $_POST['T8'];?>"></td>
				<td width="41%"><select size="1" name="D2">
				<option <?if ($_POST['D2']=='сумма') echo 'selected'; else echo'';?>>сумма</option>
				<option <?if ($_POST['D2']=='среднее') echo 'selected'; else echo'';?>>среднее</option>
				<option <?if ($_POST['D2']=='максимальное') echo 'selected'; else echo'';?>>максимальное</option>
				<option <?if ($_POST['D2']=='минимальное') echo 'selected'; else echo'';?>>минимальное</option>
				</select></td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Ответ</span></td>
				<td width="29%"><input type="text" name="T9" size="20"  value=
					"<?if ($_POST['D2']=='сумма') echo $_POST['T7']+$_POST['T8'];  
					 else if ($_POST['D2']=='среднее') echo ($_POST['T7']+$_POST['T8'])/2;
					 else if ($_POST['D2']=='максимальное')

					  if ($_POST['T7'] > $_POST['T8']) echo $_POST['T7'];                                          
					  else echo $_POST['T8']; 

                     else if ($_POST['D2']=='минимальное') if ($_POST['T7']<$_POST['T8'])echo $_POST['T7'];
                     else echo $_POST['T8'];?>"></td>
				<td width="41%">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">
				<p align="center">
				<input type="submit" value="Рассчитать" name="B3"></p></td>
			</tr>
		</table>
		</div>
	</form>
	<p>&nbsp;</p>
  </div>
    </div>