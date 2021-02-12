function validate(number){
    var asd = document.getElementsByClassName("input");
    if(number == 0){
        if(asd[0].value == "" || asd[1].value == ""){
            alert("plesae fill ur data")
        }else{alert("login sucess");}
    }else if (number == 1){
        if(asd[3].value == "" || asd[4].value == ""|| asd[4].value == ""){
            alert("plesae fill ur data")
        }else{alert("login sucess");}   
    

    }
}



    


function changeForm(param){
    var qwe = document.getElementsByClassName("forms");
    if(param==0){
    qwe[0].classList.add('form-style');
    qwe[0].classList.remove('hidden');
        console.log('test')
    qwe[1].classList.remove('form-style');
    qwe[1].classList.add('hidden');
}else if(param==1){
    qwe[1].classList.add('form-style');
    qwe[1].classList.remove('hidden');

    qwe[0].classList.add('hidden');
    qwe[0].classList.remove('form-style');
}
}

            