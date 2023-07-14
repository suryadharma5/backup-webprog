$(function (){
    $.ajaxSetup({
        headers : {'X-CSRF-TOKEN' : $('meta[name = "csrf-token"]').attr('content')}
    })

    $(function(){
        $('#provinsi').on('change', function(){
            let id_provinsi = $('#provinsi').val()
            console.log(id_provinsi)
            $.ajax({
                type: 'POST',
                url : '/getKabupaten',
                data : {id_provinsi:id_provinsi},
                caches : false,

                success: function(msg){
                    $('#kabupaten').html(msg)
                }
            })
        })

        
    })

    $(function(){
        $('#kabupaten').on('change', function(){
            let id_kabupaten = $('#kabupaten').val()
            console.log(id_kabupaten)
            $.ajax({
                type: 'POST',
                url : '/getHospital',
                data : {id_kabupaten:id_kabupaten},
                caches : false,

                success: function(msg){
                    $('#hospital').html(msg)
                }
            })
        })

        
    })

    $(function(){
        $('#hospital').on('change', function(){
            let id_rs = $('#hospital').val()
            console.log(id_rs)
            $.ajax({
                type: 'POST',
                url : '/getDoctor',
                data : {id_rs:id_rs},
                caches : false,

                success: function(msg){
                    $('#listDoctor').html(msg)
                }
            })
        })

        
    })

})

const confirmDelete = () => {
    Swal.fire({
        title: 'Apakah anda yakin',
        text: "Booking anda akan hilang",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result.isConfirmed) {
          document.querySelector('.cancelbutton').submit();
        }
      })
}