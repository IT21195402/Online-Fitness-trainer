var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("psw-repeat");
function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
// password.onchange = validatePassword;
// confirm_password.onkeyup = validatePassword;




const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password");
     

    //   js code to show/hide password and change icon
    function myFunction() {
        var x = document.getElementById("pwd");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }

    function myFunction() {
        var x = document.getElementById("psw-repeat");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }
      
    // pwShowHide.forEach(eyeIcon =>{
    //     eyeIcon.addEventListener("click", ()=>{
    //         pwFields.forEach(pwField =>{
    //             if(pwField.type ==="password"){
    //                 pwField.type = "text";

    //                 pwShowHide.forEach(icon =>{
    //                     icon.classList.replace("uil-eye-slash", "uil-eye");
    //                 })
    //             }else{
    //                 pwField.type = "password";

    //                 pwShowHide.forEach(icon =>{
    //                     icon.classList.replace("uil-eye", "uil-eye-slash");
    //                 })
    //             }
    //         }) 
    //     })
    // })

    // // js code to appear signup and login form
    // signUp.addEventListener("click", ( )=>{
    //     container.classList.add("active");
    // });
    // login.addEventListener("click", ( )=>{
    //     container.classList.remove("active");
    // });


   /*const toggle= document.querySelector(".toggle"),
          input= document.querySelector("input");

          toggle.addEventListener("click",()=>{
            if (input.type==="password"){
                input.type="text";
                toggle.classList.replace("uil-eye-slash","uil-eye");
            }else{
              input.type="password";
              toggle.classList.replace("uil-eye","uil-eye-slash");
            }
          })*/
          