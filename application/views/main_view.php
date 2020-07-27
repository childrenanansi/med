<div class="container">
    <div class="row">
    	<div class='col-md-12'>
    	<?php
            if(!empty($data['task'])) :
                foreach ($data['task'] as $row) : 	?>
                <div class="ych"><span class='mm'> Мед. Учереждение: <?php echo $row['name']; ?> </span>
                	<span class="info_ych">Информация</span><i class="fa fa-caret-down ych_s" aria-hidden="true"></i>
                	
                	<div class="title_ych" style="display:none;">
                		<p>Номер учреждения: <?php echo $row['number']; ?></p>
	                    <p>Наименование учреждения: <?php echo $row['name']; ?></p>
	                    <p>Краткое наименование: <?php echo $row['short_name']; ?></p>
	                    <p>Адрес: <?php echo $row['address']; ?></p>
	                    <p>E-mail: <?php echo $row['email']; ?></p>
	                    <p>Номера телефонов: <?php echo $row['phone']; ?></p>
	                    <p>Тип: <?php echo $row['type']; ?></p>
            		</div>
            		
                	<div class="sot"  style="display:none">
                		<?php foreach ($data['medrab'] as $row_med) : ?>
                			<?php if($row_med['id_institution'] == $row['id']): ?>
	            				 <?php if($row_med['id_employee'] == 0): ?>
	            						<div class="glav">
	            							Главный врач: <?php echo $row_med['first'].' '.$row_med['last'].' '.$row_med['second']; ?>
	            							<span class="info_gl_vrach">Информация</span> <i class="fa fa-caret-down vrach" aria-hidden="true"></i> 
	            							<div class="title_gl" style="display:none;">
						                		<p>Должность: <?php echo $row['number']; ?></p>
							                    <p>Специальность: <?php echo $row['name']; ?></p>
							                    <p>Уникальный буквенно-цифровой код мед. работника: <?php echo $row['short_name']; ?></p>
							                    <p>Дата начала работы в мед. учреждении: <?php echo $row['address']; ?></p>
							                    <p>Дата окончания в мед. учреждении: <?php echo $row['email']; ?></p>
							                    <p>Вышестоящий сотрудник: <?php echo $row['phone']; ?></p>
						            		</div>
	        							</div>
	                					<?php foreach ($data['ap'][$row_med['id']] as $row_meds) : ?>
	            						<div class="pod" style="display:none">
	            							 Сотрудники: <?php echo $row_meds['first']; ?><span class="info_sotr">Информация</span>
	            							<div class="title_sot" style="display:none;">
						                		<p>Должность: <?php echo $row['number']; ?></p>
							                    <p>Специальность: <?php echo $row['name']; ?></p>
							                    <p>Уникальный буквенно-цифровой код мед. работника: <?php echo $row['short_name']; ?></p>
							                    <p>Дата начала работы в мед. учреждении: <?php echo $row['address']; ?></p>
							                    <p>Дата окончания в мед. учреждении: <?php echo $row['email']; ?></p>
							                    <p>Вышестоящий сотрудник: <?php echo $row['phone']; ?></p>
						            		</div>
	        							</div>
	                					<?php endforeach; ?>
	        					<?php endif ?>
        					<?php endif ?>
                		<?php endforeach; ?>
            		</div>
                </div>
		     <?php endforeach;
            endif;
            ?>
		</div>
	</div>


    <div class="row">
        <?php
            $page = $data['page'];
            $total = $data['total'];
            if ($page != 1) $pervpage = '<a href="?page=1"><<</a><a href= ./page?page='. ($page - 1) .'><</a> ';
            if ($page != $total) $nextpage = ' <a href= "?page='. ($page + 1) .'">></a><a href= ./page?page=' .$total. '>>></a>';
            $page2left = $page1right = $page1left = $pervpage = $page2right = $nextpage = '';
            if($page - 2 > 0) $page2left = ' <a href= "?page='. ($page - 2) .'">'. ($page - 2) .'</a> | ';
            if($page - 1 > 0) $page1left = '<a href= "?page='. ($page - 1) .'">'. ($page - 1) .'</a> | ';
            if($page + 2 <= $total) $page2right = ' | <a href="?page='. ($page + 2) .'">'. ($page + 2) .'</a>';
            if($page + 1 <= $total) $page1right = ' | <a href="?page='. ($page + 1) .'">'. ($page + 1) .'</a>';

            echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;

        ?>
    </div>
</div>
