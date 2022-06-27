const submit = document.getElementById("form_submit");

const check = submit.addEventListener("click" ,function(e){
    var namecheck = document.getElementById("name").value;
    var emailcheck = document.getElementById("email").value;

    if((namecheck == "")&&(emailcheck == "")){
        alert("※名前とメールアドレスを入力してください");
        e.preventDefault();
    }else if(namecheck == ""){
        alert("※名前を入力してください");
        e.preventDefault();
    } else if(emailcheck == ""){
        alert("※メールアドレスを入力してください");
        e.preventDefault();
    } else {
        return true;
    }

});

