const input = document.getElementById('text');
const log = document.getElementById('view');
const input_log = input.addEventListener('input', function(){
    log.textContent = input.value;
});

const colors = document.getElementById("color_list");
const change_color = colors.addEventListener('change',function() {
    log.style.color = `${colors.value}`;
});

const fonts = document.getElementById("font_list");
const change_font = fonts.addEventListener('change',function() {
    log.style.fontFamily= `${fonts.value}`;
});
