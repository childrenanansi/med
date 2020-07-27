    <div class="row">
    	<div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Должность</th>
                    <th>Специальность</th>
                    <th> Уникальный буквенно-цифровой код мед. работника</th>
                    <th>Дата начала работы в мед. учреждении</th>
                    <th>Дата окончания в мед. учреждении</th>
                    <th>Учереждение</th>
                    <th>Вышестоящий сотрудник</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
            <?php

            if(!empty($data['task'])) {
                foreach ($data['task'] as $row) {
                    echo '<tr><td><input type="text" id="first_' . $row['id'] . '" value="' . $row['first'] . '" />';
                    echo '</td><td><input type="text" id="last_' . $row['id'] . '" value="' . $row['last'] . '" />';
                    echo '</td><td><input type="text" id="second_' . $row['id'] . '" value="' . $row['second'] . '" />';
                    echo '</td><td><input type="text" id="position_' . $row['id'] . '" value="' . $row['position'] . '" />';
                    echo '</td><td><input type="text" id="specialty_' . $row['id'] . '" value="' . $row['specialty'] . '" />';
                    echo '</td><td><input type="text" id="code_' . $row['id'] . '" value="' . $row['code'] . '" />';
                    echo '</td><td><input type="date" id="date_from_' . $row['id'] . '" value="' . $row['date_from'] . '" />';
                    echo '</td><td><input type="date" id="date_to_' . $row['id'] . '" value="' . $row['date_to'] . '" />';
                    echo '</td><td><input type="text" id="code_' . $row['id'] . '" value="' . $row['code'] . '" />';
                    echo '</td><td><select id="id_institution_' . $row['id'] . '">
							  <option value="0">------</option>';
	                        foreach($data['medych'] as $rows):
							  echo '<option value="'.$rows['id'].'"';
							  if($rows['id'] == $row['id_institution']){echo 'selected';}
							  echo '>'.$rows['name'].'</option>';
							endforeach; 
						echo '</select>';
                    echo '</td><td><select id="id_employee_' . $row['id'] . '">
							  <option value="0">------</option>';
	                        foreach($data['medrab'] as $rows):
							  echo '<option value="'.$rows['id'].'"';
							  if($rows['id'] == $row['id_employee']){echo 'selected';}
							  echo '>'.$rows['first'].' '.$rows['last'].' '.$rows['second'].'</option>';
							endforeach; 
						echo '</select></td>';
                    echo '<td><button class="update_em btn btn-primary" type="button"  id="save_row_' . $row['id'] . '" data-id="' . $row['id'] . '">Обновить</button></td></tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
