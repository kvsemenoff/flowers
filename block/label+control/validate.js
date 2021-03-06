$(document).ready(function(){
 
    $("#formregist").validate({
  // правила
       rules:{ 
            uname:{
                required: true, // поле обязательное для заполнения
                minlength:2, // Минимальное число символов - 2
            },
            mail:{
                required: true, // поле обязательное для заполнения
                email: true,    // Пожалуйста, введите действительный адрес электронной почты
            },
            password:{
                required: true, // поле обязательное для заполнения
                minlength: 6, // Минимальное число символов - 6
                maxlength:20,// Максимальное число символов -20
            },
            r_password:{
                required: true, // поле обязательное для заполнения
                equalTo: "#password",
            },
       },
  // сообщение
       messages:{
 
            uname:{
                required: " <i class='err'>! Проверьте правильность заполнения поля Имя</i>", 
                minlength: "<i class='err err_grey'>Имя должно быть не менее 2 символов!</i>",
                maxlength: "<i class='err err_grey'>Имя должно быть не более 20 символов!</i>",
            },
            mail:{
                required: "<i class='err'>! Проверьте правильность заполнения поля E-mail</i>", 
                email: "<i class='err err_grey'>Введите корректный адрес электронной почты!</i>",
            },
            password:{
                required: "<i class='err'>! Проверьте правильность заполнения поля Пароль</i>", 
                minlength: "<i class='err err_grey'>Пароль должен быть не менее 6 символов!</i>",
                maxlength: "<i class='err err_grey'>Пароль должен быть не более 20 символов!</i>",
            },
            r_password:{
                required: "<i class='err'>! Повторите пароль</i>",
                equalTo: "<i class='err err_grey'>Пароль не совпадает!</i>",
            },
 
       }
 
    });
    
});