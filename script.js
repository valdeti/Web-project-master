        function validate (number){
             var inputList = document.getElementsByClassName("input");
            if (number == 0){
        //login
            if(inputList[0].value ==""|| inputList[1].value ==""){
            alert("Please fill data")
            }
            else{
             alert("Login successfull")
            }
        }    else if(number == 1){
                if(inputList[0].value ==""|| inputList[1].value ==""){
            alert("Please fill data")
            }
                else{
                alert("Login successfull")
            }
        }
        }

function changeForm(param){
    var divList =document.getElementsByClassName("forms");
            if (param == 0){
                //show login
                divList[0].classList.add('form-style');
                divList[0].classList.remove('hidden');
                //hide register
                divList[1].classList.remove('form-style');
                divList[1].classList.add('hidden');
                    } else if (param == 1) {
                //show register
                divList[1].classList.add('form-style');
                divList[1].classList.remove('hidden');
                //hide login
                divList[0].classList.remove('form-style');
                divList[0].classList.add('hidden');
                    }
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
                