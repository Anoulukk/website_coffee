const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('re-password');


form.addEventListener('submit', function (e) {
    e.preventDefault();
    checkiput([username, email, password1, password2]);

    if (!validateEmail(email.value.trim())) {
        showerror(email, 'enter email again')
    } else {
        showsuccess(email,);
    }
    checkpassword(password1,password2);
    checkinputlength(username,5,15);
    checkinputlength(password1,5,15);
    


});
function showerror(input, message) {
    const formcontrol = input.parentElement;
    formcontrol.className = 'form-control error';
    const small = formcontrol.querySelector('small');
    small.innerText = message;
}
function showsuccess(input) {
    const formcontrol = input.parentElement;
    formcontrol.className = 'form-control success';
}
//kuad khuam thuek tong khorng email
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function checkiput(inputArray) {
    inputArray.forEach(function(input) {
        if (input.value.trim() === ''){
            showerror(input, `please enter ${input.id}`);
        } else {
            showsuccess(input);
        }


    });
}
function getinputCase(input){
    console.log(input);
    // return input.id.char(0).toUpperCase()+input.id.slice(1);
    return input.id.value;
}
function checkpassword(password1,password2){
    if(password1.value !== password2.value)
    showerror(password2,'password no same');

}
function checkinputlength(input,min,max){
if(input.value.length<=min){
    console.log('<5');
    showerror(input,`${getinputCase(input)} ต้องหลายกว่า ${min} ตวฮักษร`);
}else if(input.value.length>=max){
    showerror(input,`${getinputCase(input)} ต้องหลายกว่า ${max} ตวฮักษร`);
}else{
    showsuccess(input);
}
}
var x=10;
if(x===10){
    let y=111;
    console.log("y="+y);
}
console.log("y="+y);