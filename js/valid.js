function init() {
	
function valid(form) {
			
	var name = form.name.value;
	var surname = form.surname.value;
	var email = form.email.value;
	var password_1 = form.password_1.value;
	var password_2 = form.password_2.value;
	var err_name = (name.length < 1) ? 'Заполните имя' : null;
	var err_surname = (surname.length < 1) ? 'Заполните фамилию' : null;
	var err_email = (email.length < 1) ? 'Заполните email' : null;
	var err_password_1 = (password_1 < 6) ? 'Пароль не менее 6 символов' : null;
	var err_password_2 = (password_1 != password_2) ? 'Пароли не совпадают' : null;
	var error_message = err_name || err_surname || err_email || err_password_1 || err_password_2;
	var error_message_p = document.getElementsByClassName('error_message_p')[0];
			
		if (error_message) {
			error_message_p.innerHTML = error_message;
			error_message_p.classList.add("visibility_visible");
			return false;
			
			} else {
			error_message_p.classList.remove("visibility_visible");
			return true;
			
			}
}
			
	var reg_form = document.getElementsByClassName('reg_form')[0];
	var submit_button = document.getElementsByClassName('submit_button')[0];
			
	submit_button.onclick = function() {
		if (valid(reg_form)) {
			return true;
		}
		return false;
		
	}
			
}
	window.onload = init;
	