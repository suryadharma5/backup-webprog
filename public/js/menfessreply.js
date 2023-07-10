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

$(document).ready(function() {
    $('.like-icon').on('click', function() {
        console.log('like')
        var icon = $(this);
        var reply_id = icon.data('reply-id');
        var liked = icon.hasClass('fa-solid');
        var menfess_id = icon.data('menfess-id')
        var token = icon.data('token-id')

        // Kirim permintaan AJAX untuk mengubah status like
        $.ajax({
            
            url: '/menfess/detail/'+ menfess_id + '/like',
            type: 'POST',
            data: {
                // console.log(),
                reply_id: reply_id,
                liked: !liked,
                _token: token
            },
            success: function(response) {
                console.log('like')
                $('#total-like').text(response.like + ' likes');
                // $('.like-icon').toggleClass('unlike-icon');
                $('#like-icon').removeClass('like-icon').addClass('unlike-icon')
                $('#like-icon').removeClass('bi-heart').addClass('bi-heart-fill')
                // $('#like-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
            },
            error: function(xhr, textStatus, error) {
                console.log('ajax error');
                console.log(xhr);
            }
        });
    });

    $('.unlike-icon').on('click', function() {
        console.log('unlike');
        var icon = $(this);
        var reply_id = icon.data('reply-id');
        var liked = icon.hasClass('fa-solid');
        var menfess_id = icon.data('menfess-id')
        var token = icon.data('token-id')
        var user_id = icon.data('user-id')

        // Kirim permintaan AJAX untuk mengubah status like
        $.ajax({
            url: '/menfess/detail/'+ menfess_id + '/unlike',
            type: 'POST',
            data: {
                // console.log(),
                reply_id: reply_id,
                user_id : user_id,
                liked: !liked,
                _token: token
            },
            success: function(response) {
                console.log('unlike')
                $('#total-like').text(response.like + ' likes');
                $('.unlike-icon').toggleClass('like-icon');
                // $('#like-icon').removeClass('like-icon').addClass('unlike-icon')
                $('#like-icon').removeClass('bi-heart-fille').addClass('bi-heart')
                // $('#like-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
                // $('.unlike-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
            }
            
        });
    });
});


