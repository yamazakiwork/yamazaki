const validates = {
    name_empty_ok: false, //名前空欄チェック
    tel_check_ok: false, //電話番号検証
    tel_empty_ok: false, //電話番号空欄チェック
    post_num_empty_ok: false, //郵便局番号空欄チェック
    region_empty_ok: false, //都道府県空欄チェック
    locality_empty_ok: false, //市町村空欄チェック
    street_address_empty_ok: false, //町域空欄チェック
    email_check_ok: false, //メールアドレス検証
    email_empty_ok: false, //メールアドレス空欄チェック
    title_length_check_ok: false, //件名長さ検証
    title_empty_ok: false, //件名空欄チェック
    content_length_check_ok: false, //内容長さ検証
    content_empty_ok: false, //内容空欄チェック
    code_check_ok: false, //認証コード検証
    code_empty_ok: false  //認証コード空欄チェック
};

var input_tel = document.getElementById("tel");
var tel_pattern = /^[0-9]{9,11}$/;
var tel_error = document.getElementById("tel_error");
const tel_check = input_tel.addEventListener('input', ()=>{
    if(tel_pattern.test(input_tel.value)){
        input_tel.style.backgroundColor = '#DDFFDD';
        tel_error.textContent = "";
        validates.tel_check_ok = true;
    }else{
        input_tel.style.backgroundColor = '#FADBDA';
        tel_error.textContent = "9~11桁の数字で入力してください";
        validates.tel_check_ok = false;
    }
});

var input_email = document.getElementById("email");
var email_pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
var email_error = document.getElementById("email_error");
const email_check = input_email.addEventListener("input",(e)=>{
    if(email_pattern.test(input_email.value)){
        input_email.style.backgroundColor = "#DDFFDD";
        email_error.textContent = "";
        validates.email_check_ok = true;
    }else{
        input_email.style.backgroundColor = "#FADBDA";
        email_error.textContent = "メールアドレス形式で入力してください"
        validates.email_check_ok = false;
    }
});


var input_title = document.getElementById('title');
var title_error =  document.getElementById('title_error');
const title_length_check = input_title.addEventListener('input', (e)=>{
    if(input_title.value.length <= 10){
        input_title.style.backgroundColor = '#DDFFDD';
        title_error.textContent = "";
        validates.title_length_check_ok = true;
    }else{
        input_title.style.backgroundColor = '#FADBDA';
        title_error.textContent = `文字数制限を${input_title.value.length-10}文字超えています`;
        validates.title_length_check_ok = false;
    }
});

var input_content = document.getElementById('content');
var content_error = document.getElementById('content_error');
const content_length_check = input_content.addEventListener('input', (e)=>{
    if(input_content.value.length <= 1000){
        input_content.style.backgroundColor = '#DDFFDD';
        content_error.textContent = "";
        validates.content_length_check_ok = true;
    }else{
        input_content.style.backgroundColor = '#FADBDA';
        content_error.textContent = `文字数制限を${input_content.value.length-1000}文字超えています`;
        validates.content_length_check_ok = false;
    }
});

var input_code = document.getElementById("code");
var code_pattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,15}$/;
var code_error = document.getElementById("code_error");
const code_check = input_code.addEventListener("input", (e)=>{
    if(code_pattern.test(input_code.value)){
        input_code.style.backgroundColor = '#DDFFDD';
        code_error.textContent = "";
        validates.code_check_ok = true;
    }else{
        input_code.style.backgroundColor = "#FADBDA";
        code_error.textContent = "半角英子文字大文字数字をそれぞれ1種類以上8文字以上15文字以内で入力してください";
        validates.code_check_ok = false;
    }
});

empty_check = (input_item, error_id) => {
    if(input_item.value === ""){
        input_item.style.backgroundColor = "#FADBDA";
        error_id.textContent = "この項目は入力必須です";
        validates[`${input_item.id}_empty_ok`] = false;
    }else if((input_item === input_tel)|(input_item === input_email)|(input_item === input_title)|(input_item === input_content)){
        validates[`${input_item.id}_empty_ok`] = true;
    }else{
        console.log(input_item);
        input_item.style.backgroundColor = "#DDFFDD";
        error_id.textContent = "";
        validates[`${input_item.id}_empty_ok`] = true;
    }
}

input_list = document.getElementsByClassName("input");
var form_submit = document.getElementById("form_submit");

const form_validate_input_check =  form_submit.addEventListener('click', (e)=>{
    e.preventDefault();
    Object.values(input_list).forEach(input_item => {
        var error_id =  document.getElementById(`${input_item.id}_error`);
        empty_check(input_item, error_id);
    });

    var submit_go = true;

    Object.values(validates).forEach(empty_ok =>{
        if (empty_ok === false){
            submit_go = false;
        }
    });


    if (submit_go === true){
        alert("送信しました");
    }else{
        alert("すべての項目を正しく入力してください");
    }
});