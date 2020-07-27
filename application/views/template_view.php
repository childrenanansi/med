<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>TEST</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/bootstrap/jquery.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <link href="/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addInstitutionModal">
                Добавить учереждение
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
                Добавить сотрудника
            </button>
        </div>

    </div>
</div>
                        <?php include 'application/views/'.$content_view; ?>

<div class="modal fade" id="addInstitutionModal" tabindex="-1" role="dialog" aria-labelledby="addInstitutionModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить учреждение</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-umber-ych">
                    <p>
                        <label for="number-ych">Номер учреждения</label><br/>
                        <input id="number-ych" type="text" placeholder="Номер учреждения" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-name-ych">
                    <p>
                        <label for="name-ych">Наименование учреждения</label><br/>
                        <input id="name-ych" type="text" placeholder="Наименование учреждения" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-short-name-ych">
                    <p>
                        <label for="short-name-ych">Краткое наименование</label><br/>
                        <input id="short-name-ych" type="text" placeholder="Краткое наименование" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-ych-email">
                    <p>
                        <label for="ych-email">E-mail</label><br/>
                        <input id="ych-email" type="email" class="mail" placeholder="E-mail" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-type-ych">
                    <p>
                        <label for="type-ych">Тип учреждения</label><br/>
                        <select id="type-ych">
						  <option value="1">Гинекологическое</option>
						  <option value="2">Наркологическое</option>
						  <option value="3">Психиатрическое</option>
						  <option value="4">Онкологическое</option>
						</select>
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-phones-ych">
                    <p>
                        <label for="phones-ych">Номера телефонов</label><br/>
                        <input id="phones-ych" type="text" placeholder="Номера телефонов" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-address-ych">
                    <p>
                        <label for="address-ych">Адрес</label>
                        <textarea class="form-control" id="address-ych"></textarea>
                        <span class="error text-danger"></span>
                    </p>
                </div>
            </div>
            <div class="form-group-task-rep">
                <span class="error text-danger"></span>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_institution" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить сотрудника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-first">
                    <p>
                        <label for="first">Фамилия</label><br/>
                        <input id="first" type="text" placeholder="Фамилия" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-lasth">
                    <p>
                        <label for="last">Имя</label><br/>
                        <input id="last" type="text" placeholder="Имя" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-second">
                    <p>
                        <label for="second">Отчество</label><br/>
                        <input id="second" type="text" placeholder="Отчество" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-position">
                    <p>
                        <label for="position">Должность</label><br/>
                        <input id="position" type="text"  placeholder="Должность" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-specialty">
                    <p>
                        <label for="specialty">Специальность</label><br/>
                        <input id="specialty" type="text" placeholder="Специальность" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-code">
                    <p>
                        <label for="code">Уникальный буквенно-цифровой код мед. работника</label><br/>
                        <input id="code" type="text" placeholder="Уникальный буквенно-цифровой код мед. работника" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-date_from">
                    <p>
                        <label for="date_from">Дата начала работы в мед. учреждении</label><br/>
                        <input id="date_from" type="date" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-date_to">
                    <p>
                        <label for="date_to"> Дата окончания в мед. учреждении</label><br/>
                        <input id="date_to" type="date" required />
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-id_institution">
                    <p>
                        <label for="id_institution"> Мед.учереждение</label><br/>
                        <select id="id_institution">
							  <option value="0">------</option>
	                        <?php foreach($data['medych'] as $row): ?>
							  <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
							<?php endforeach; ?>
						</select>
                        <span class="error text-danger"></span>
                    </p>
                </div>
                <div class="form-group-id_employee">
                    <p>
                        <label for="id_employee">Вышестоящий врач</label><br/>
                        <select id="id_employee">
							  <option value="0">------</option>
	                        <?php foreach($data['medrab'] as $row): ?>
							  <option value="<?php echo $row['id'] ?>"><?php echo $row['first'].' '.$row['last'].' '.$row['second'] ?></option>
							<?php endforeach; ?>
						</select>
                        <span class="error text-danger"></span>
                    </p>
                </div>
            </div>
            <div class="form-group-task-rep">
                <span class="error text-danger"></span>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_employee" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="showInfo" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Информация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        </div>
    </div>
</div>
</body>