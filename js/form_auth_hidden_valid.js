
function init() {// Ожидание загрузки страницы

// Затухание авторизации

var login_button = document.getElementsByClassName('login')[0];
var login_popup = document.getElementsByClassName('login_popup')[0];
var close_button = document.getElementsByClassName('close')[0];

function handler() {
	login_popup.classList.toggle("hidden"); 
}

login_button.addEventListener("click", handler);
close_button.addEventListener("click", handler);

// Валидация формы авторизации

function valid_auth(form) {
			
	var login = form.login.value;
	var password = form.password.value;
	
	var err_login = (login.length < 1) ? 'Заполните login' : null;
	var err_password = (password.length < 1) ? 'Заполните password' : null;
	
	var error_message = err_login || err_password;
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
			
	var reg_form = document.getElementById('authorization_form');
	var submit_auth = document.getElementById('submit_auth');
	
	function submit_click() {
		if (valid_auth(reg_form)) {
			return true;
		}
				return false;
			}
			
	submit_auth.addEventListener("click", submit_click);
		
		

var log_reg = document.getElementsByClassName('log_reg')[0];
var avatar_info = document.getElementsByClassName('avatar_info')[0];

if (session_email) {
	log_reg.style.display="none";
} else {
	avatar_info.style.display="none";
}



var exit_acc = document.getElementsByClassName('exit_acc')[0];

exit_acc.addEventListener("click", exit);

function exit() {
	
	location.reload();
	
}
		




}


window.onload = init;


