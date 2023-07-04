const numb = document.querySelector(".numb");
let counter = 0;
let element = document.getElementById("demo");
let temp = element.innerHTML;
setInterval(()=>{
    if(counter==temp){
        clearInterval();
    }else{
        counter+=1;
        numb.textContent=counter;
    }
},120);