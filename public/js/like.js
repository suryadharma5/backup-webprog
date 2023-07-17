const toggle = document.getElementById('like-icon')

const like = (id, menfess_id, token, reply_id) => {
    $.ajax({
        url: '/menfess/detail/'+ menfess_id + '/like',
        type: 'POST',
        data: {
            // console.log(),
            reply_id: reply_id,
            _token: token
        },
        success: function(response) {
            
            $('#total-like').text(response.like + ' likes');
            // $('.like-icon').toggleClass('unlike-icon');
            // $('#like-icon').removeClass('bi-heart').addClass('bi-heart-fill')
            toggle.classList.remove('bi-heart')
            toggle.classList.remove('like-icon-'+id)
            toggle.classList.add('bi-heart-fill')
            toggle.classList.add('unlike-icon-'+id)
            // $('.like-icon').hide()
            // $('.unlike-icon').show()
            // $('#like-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
        },
        error: function(xhr, textStatus, error) {
            console.log('ajax error');
            console.log(xhr);
        }
    });
}

const unlike = (id, menfess_id, token, reply_id) => {
    $.ajax({
        url: '/menfess/detail/'+ menfess_id + '/unlike',
        type: 'POST',
        data: {
            // console.log(),
            reply_id: reply_id,
            _token: token
        },
        success: function(response) {
            console.log('unlike')
            $('#total-like').text(response.like + ' likes');
            // $('.unlike-icon').toggleClass('like-icon');
            // $('#like-icon').removeClass('like-icon').addClass('unlike-icon')
            // $('#like-icon').removeClass('bi-heart-fille').addClass('bi-heart')
            // $('.like-icon').show()
            // $('.unlike-icon').hide()
            toggle.classList.remove('bi-heart-fill')
            toggle.classList.remove('unlike-icon-'+id)
            toggle.classList.add('bi-heart')
            toggle.classList.add('like-icon'+id)
            // $('#like-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
            // $('.unlike-icon').removeClass('unlike-icon bi bi-heart-fill').addClass('like-icon bi bi-heart')
        }
        
    });
}