jQuery(function() {

    /**
     * update 
     */
    jQuery('.update_institution').click(function(){
        let id = jQuery(this).data('id');
        let number_ych = jQuery('#number_ych_'+id).val();
        let name_ych = jQuery('#name_ych_'+id).val();
        let short_name_ych = jQuery('#short_name_ych_'+id).val();
        let ych_email = jQuery('#ych_email_'+id).val();
        let type_ych = jQuery('.type_ych_'+id).val();
        let phones_ych = jQuery('#phones_ych_'+id).val();
    	let address_ych = jQuery('#address_ych_'+id).val();
            jQuery.ajax({
                url: '/ajax',
                method: "POST",
                data: {
                    type: 'update_instation',
                    id: id,
                    number_ych: number_ych,
                    name_ych: name_ych,
                    short_name_ych: short_name_ych,
                    ych_email: ych_email,
                    type_ych: type_ych,
                    phones_ych: phones_ych,
                    address_ych: address_ych,
                },
                success: function (data){
                    let result = jQuery.parseJSON(data);
                    let button = jQuery('#save_row_' + id);
                        button.removeClass('btn-primary');
                    if(result.status == 'Fal') {
                        button.html('Ошибка!');
                        button.addClass('btn-danger');
                    }else{
                        button.html('Обнавлено!');
                        button.addClass('btn-success');
                    }
                }
            });
    });
    
     /**
     * update 
     */
    jQuery('.update_em').click(function(){
        let id = jQuery(this).data('id');
        let first = jQuery('#first_'+id).val();
        let last = jQuery('#last_'+id).val();
        let second = jQuery('#second_'+id).val();
        let position = jQuery('#position_'+id).val();
        let specialty = jQuery('#specialty_'+id).val();
        let code = jQuery('#code_'+id).val();
    	let date_from = jQuery('#date_from_'+id).val();
    	let date_to = jQuery('#date_to_'+id).val();
    	let id_institution = jQuery('#id_institution_'+id).val();
    	let id_employee = jQuery('#id_employee_'+id).val();
            jQuery.ajax({
                url: '/ajax',
                method: "POST",
                data: {
                    type: 'update_em',
                    id: id,
                    first: first,
                    last: last,
                    second: second,
                    position: position,
                    specialty: specialty,
                    code: code,
                    date_from: date_from,
                    date_to: date_to,
                    id_institution: id_institution,
                    id_employee: id_employee,
                },
                success: function (data){
                    let result = jQuery.parseJSON(data);
                    let button = jQuery('#save_row_' + id);
                        button.removeClass('btn-primary');
                    if(result.status == 'Fal') {
                        button.html('Ошибка!');
                        button.addClass('btn-danger');
                    }else{
                        button.html('Обнавлено!');
                        button.addClass('btn-success');
                    }
                }
            });
    });


    /**
     * save 
     */
    jQuery('#save_institution').click(function(){
        let number_ych = jQuery('#addInstitutionModal #number-ych').val();
        let name_ych = jQuery('#addInstitutionModal #name-ych').val();
        let short_name_ych = jQuery('#addInstitutionModal #short-name-ych').val();
        let ych_email = jQuery('#addInstitutionModal #ych-email').val();
        let type_ych = jQuery('#addInstitutionModal #type-ych').val();
        let phones_ych = jQuery('#addInstitutionModal #phones-ych').val();
    	let address_ych = jQuery('#addInstitutionModal #address-ych').val();

        jQuery.ajax({
            url: '/ajax',
            method: "POST",
            data: {
                type: 'save_instation',
                number_ych: number_ych,
                name_ych: name_ych,
                short_name_ych: short_name_ych,
                ych_email: ych_email,
                type_ych: type_ych,
                phones_ych: phones_ych,
                address_ych: address_ych,
            },
            success: function (data){
                let result = jQuery.parseJSON(data)
                if(result.status == 'Fal') {
                    jQuery('.form-group-task-rep .text-danger').html(result.desc);
                }else{
                    window.location.href = '/';
                }
            }
        });
        
    });
    
    jQuery('#save_employee').click(function(){
        let first = jQuery('#addEmployeeModal #first').val();
        let last = jQuery('#addEmployeeModal #last').val();
        let second = jQuery('#addEmployeeModal #second').val();
        let position = jQuery('#addEmployeeModal #position').val();
        let specialty = jQuery('#addEmployeeModal #specialty').val();
        let code = jQuery('#addEmployeeModal #code').val();
    	let date_from = jQuery('#addEmployeeModal #date_from').val();
    	let date_to = jQuery('#addEmployeeModal #date_to').val();
    	let id_institution = jQuery('#addEmployeeModal #id_institution').val();
    	let id_employee = jQuery('#addEmployeeModal #id_employee').val();

        jQuery.ajax({
            url: '/ajax',
            method: "POST",
            data: {
                type: 'save_employee',
                first: first,
                last: last,
                second: second,
                position: position,
                specialty: specialty,
                code: code,
                date_from: date_from,
                date_to: date_to,
                id_employee: id_employee,
                id_institution: id_institution,
            },
            success: function (data){
                let result = jQuery.parseJSON(data)
                if(result.status == 'Fal') {
                    jQuery('.form-group-task-rep .text-danger').html(result.desc);
                }else{
                    window.location.href = '/';
                }
            }
        });
        
    });
    
    jQuery('.ych_s').click(function(){
    	if(!jQuery(this).hasClass('active')){
    		jQuery(this).addClass('active')
    		jQuery(this).parent('.ych').children('.sot').css('display','block');
    	}else{
    		jQuery(this).removeClass('active')
    		jQuery(this).parent('.ych').children('.sot').css('display','none');
    	}
    });
    
    jQuery('.vrach').click(function(){
    	if(!jQuery(this).hasClass('active')){
    		jQuery(this).addClass('active')
    		jQuery(this).parent('.glav').parent('.sot').children('.pod').css('display','flex');
    	}else{
    		jQuery(this).removeClass('active')
    		jQuery(this).parent('.glav').parent('.sot').children('.pod').css('display','none');
    	}
    });
    
    jQuery('.info_gl_vrach').click(function(){
    	let data = jQuery(this).parent('.glav').children('.title_gl').html();
        jQuery('#showInfo .modal-body').html(data);
        $('#showInfo').modal('show')
    });
    
    jQuery('.info_sotr').click(function(){
    	let data = jQuery(this).parent('.pod').children('.title_sot').html();
        jQuery('#showInfo .modal-body').html(data);
        $('#showInfo').modal('show')
    });
    
    jQuery('.info_ych').click(function(){
    	let data = jQuery(this).parent('.ych').children('.title_ych').html();
        jQuery('#showInfo .modal-body').html(data);
        $('#showInfo').modal('show')
    });
});