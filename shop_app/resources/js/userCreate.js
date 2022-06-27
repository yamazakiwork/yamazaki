const password = document.getElementById("password");
const password_confirm = document.getElementById("password_confirm");
const password_error_msg = document.getElementById("password_error_msg");
const password_check = password_confirm.addEventListener('input', ()=>{
    if(password.value === password_confirm.value){
        password.style.backgroundColor = '#DDFFDD';
        password_error_msg.textContent = "";
    }else{
        password.style.backgroundColor = '#FADBDA';
        password_error_msg.textContent = "パスワードが一致しません";
    }
});

const add_user_btn = document.getElementById('add_user_btn');
const input_lists = Object.values(document.getElementsByClassName('input')); //入力欄リスト
window.blank_check = function(){
    var blank_ok = true;
    input_lists.forEach(input_item => {
        if(input_item.value == ''){
            blank_ok = false;
        }
    });
    if(blank_ok == false){
        alert("入力されていない項目があります");
        return false;
    }

    //下記は確認ダイアログがいいえ(false)だった時の条件
    if (window.confirm('この内容でユーザーを追加しますか？')){
        return true;
    }else{
        return false;
    }
};
