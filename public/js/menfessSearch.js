$(function(){
    $.ajaxSetup({
        headers : {'X-CSRF-TOKEN' : $('meta[name = "csrf-token"]').attr('content')}
    })

    $(document).ready(function(){
      $('#search').on('keyup', function(){
          var query = $(this).val();
        $.ajax({
          url : '/menfess/search',
          type : 'GET',
          data : {'search' : query},
          caches : false,
          success : function(data){
            // console.log(data)
            $('#menfessGila').html(data)
            console.log('berhasil')
          },
          error: function(xhr, textStatus, error) {
            console.log('ajax error');
            console.log(xhr);
          }
        })
      })
    })
})

const replydelete = () => {
  Swal.fire({
    title: 'Apakah anda yakin',
    text: "Menfess anda akan hilang",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
    }).then((result) => {
    if (result.isConfirmed) {
      document.querySelector('.deleteReply').submit();
    }
  })      
}