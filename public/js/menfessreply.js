const fileInput = document.getElementById('reply_image')
const changeFileName = document.querySelector('.filename')
const xbutton = document.getElementById('x-button')
var selectedFile = '';


function buttonClick(){
    const photoButton = document.querySelector('#reply_image')
    photoButton.click()
}

fileInput.addEventListener("change", function(event) {
    selectedFile = event.target.files[0];
    var fileName = selectedFile.name;
    xbutton.style.display = 'block'
    changeFileName.innerHTML = fileName
});

function removeFile(){
    changeFileName.innerHTML = "No file chosen"
    xbutton.style.display = 'none'
    selectedFile = null
}



