let submit = document.querySelector('.btn-primary');
let error = document.querySelector('.error-message');

submit.addEventListener('click', function(e){
    e.preventDefault();
    let firstName = $("#firstname").val();
    let lastName = $("#lastname").val();
    let email = $("#email").val();
    let pass1 = $("#password1").val();
    let pass2 = $("#password2").val();

    if(pass1 != pass2){
        alert('password does not match with confirm password');
    }
    else if(firstname =='' || lastname ==''  || email =='' || password1 =='' || password2 ==''){
        alert('please fill all fields');
    }
    else{
        $.ajax({
            url:"/guvi/php/register.php",
            type:'post',
            data: {
                firstname: firstname,
                lastname:lastname,
                email:email,
                password1:password1
            },
            async:true,
            success:function(response){
                if(response == 1){
                   alert("registered successfully...");
                   document.getElementById("form").reset();
                }
                else{
                    alert("Email already exists...please try another email");
                }
            }
        });
        alert('Registered successfully...');
    }
}); 