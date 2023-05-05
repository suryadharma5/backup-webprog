$(function (){
    $.ajaxSetup({
        headers : {'X-CSRF-TOKEN' : $('meta[name = "csrf-token"]').attr('content')}
    })

    $(function(){
        $('#provinsi').on('change', function(){
            let id_provinsi = $('#provinsi').val()
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
})