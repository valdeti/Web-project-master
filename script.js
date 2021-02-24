function changeForm(form) {
    let forms = document.querySelectorAll("form>div");
    if (form == 0) {
        forms[0].classList.remove("hidden");
        forms[0].classList.add("form-style");
        forms[1].classList.add("hidden");
        forms[1].classList.remove("form-style");
    } else {
        forms[1].classList.remove("hidden");
        forms[1].classList.add("form-style");
        forms[0].classList.add("hidden");
        forms[0].classList.remove("form-style");
    }
}

const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')

function validate() {
    // let inputs = document.querySelectorAll("input");
    // username = inputs[0].value;
    // password = inputs[1].value;
    // if (usernameReg.test(username) && password != "") {
    //     return true;
    // }
    // return false;
    return true;
}




                var divElements=document.getElementsByClassName('slider-content');
                var sliderIndex = 0;
                document.getElementsByClassName('slider')[0].addEventListener('click',function(event){
                divElements[sliderIndex].classList.remove('active');
                divElements[sliderIndex].classList.add('not-active');
                
                sliderIndex++;
                if(sliderIndex==divElements.length) sliderIndex=0;
                
                //sliderIndex=(sliderIndex+1)%3;
                
                divElements[sliderIndex].classList.add('active');
                divElements[sliderIndex].classList.remove('not-active');
                })
             
                
               
                //-----------------------------------
                // back button 
                
                document.getElementById('btn').addEventListener('click',function(event){
                event.stopPropagation();
                divElements[sliderIndex].classList.remove('active');
                divElements[sliderIndex].classList.add('not-active');
                
                sliderIndex--;
                if(sliderIndex<0) sliderIndex=divElements.length-1;
                
                //sliderIndex=(sliderIndex+1)%3;
                
                divElements[sliderIndex].classList.add('active');
                divElements[sliderIndex].classList.remove('not-active');
                })
                

                function validateForm(){
                    var name = document.getElementById("name").value;
                    var subject = document.getElementById("subject").value;
                    var phone = document.getElementById("phone").value;
                    var email = document.getElementById("email").value;
                    var message = document.getElementById("msg").value;
                    var error_message = document.getElementById("error_message");
                    
                    error_message.style.padding = "10px";
                    
                    var text;
                    if(name.length < 10){
                      text = "Please Enter valid Name";
                      error_message.innerHTML = text;
                      return false;
                    }
                    if(subject.length < 10){
                      text = "Please Enter Correct Subject";
                      error_message.innerHTML = text;
                      return false;
                    }
                    if(isNaN(phone) || phone.length != 10){
                      text = "Please Enter valid Phone Number";
                      error_message.innerHTML = text;
                      return false;
                    }
                    if(email.indexOf("@") == -1 || email.length < 6){
                      text = "Please Enter valid Email";
                      error_message.innerHTML = text;
                      return false;
                    }
                    if(msg.length <= 140){
                      text = "Please Enter More Than 140 Characters";
                      error_message.innerHTML = text;
                      return false;
                    }
                    alert("Form Submitted Successfully!");
                    return true;
                  }