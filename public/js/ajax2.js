$(function (){
    $.ajaxSetup({
        headers : {'X-CSRF-TOKEN' : $('meta[name = "csrf-token"]').attr('content')}
    })

    $(function(){
        $('#provinsi2').on('change', function(){
            let id_provinsi = $('#provinsi2').val()
            console.log(id_provinsi)
            $.ajax({
                type: 'POST',
                url : '/getKabupaten',
                data : {id_provinsi:id_provinsi},
                caches : false,

                success: function(msg){
                    $('#kabupaten2').html(msg)
                }
            })
        })

        
    })

    $(function(){
        $('#kabupaten2').on('change', function(){
            let id_kabupaten = $('#kabupaten2').val()
            console.log(id_kabupaten)
            $.ajax({
                type: 'POST',
                url : '/getHospital',
                data : {id_kabupaten:id_kabupaten},
                caches : false,

                success: function(msg){
                    $('#hospital2').html(msg)
                }
            })
        })

        
    })

    $(function(){
        $('#hospital2').on('change', function(){
            let id_rs = $('#hospital2').val()
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