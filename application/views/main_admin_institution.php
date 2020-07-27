    <div class="row">
    	
    	<div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Номер учреждения</th>
                    <th>Наименование учреждения</th>
                    <th>Краткое наименование</th>
                    <th>Адрес</th>
                    <th>E-mail</th>
                    <th>Номера телефонов</th>
                    <th>Тип</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($data['task'])) {
                foreach ($data['task'] as $row) {
                    echo '<tr><td><input type="text" id="number_ych_' . $row['id'] . '" value="' . $row['number'] . '" />';
                    echo '</td><td><input type="text" id="name_ych_' . $row['id'] . '" value="' . $row['name'] . '" />';
                    echo '</td><td><input type="text" id="short_name_ych_' . $row['id'] . '" value="' . $row['short_name'] . '" />';
                    echo '</td><td><input type="text" id="address_ych_' . $row['id'] . '" value="' . $row['address'] . '" />';
                    echo '</td><td><input type="text" id="ych_email_' . $row['id'] . '" value="' . $row['email'] . '" />';
                    echo '</td><td><input type="text" id="phones_ych_' . $row['id'] . '" value="' . $row['phone'] . '" />';
                    echo '</td><td>
                    <select class="type_ych_' . $row['id'] . '">
						  <option value="1" ';
						  if ($row['type'] == 1){echo 'selected';}
					echo '>Гинекологическое</option>
						  <option value="2"';
						  if ($row['type'] == 2){echo 'selected';}
					echo '>Наркологическое</option>
						  <option value="3"';
						  if ($row['type'] == 3){echo 'selected';}
					echo '>Психиатрическое</option>
						  <option value="4"';
						  if ($row['type'] == 4){echo 'selected';}
					echo '>Онкологическое</option>
					</select>';
                    echo '<td><button class="update_institution btn btn-primary" type="button"  id="save_row_' . $row['id'] . '" data-id="' . $row['id'] . '">Обновить</button></td></tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>

</div>
