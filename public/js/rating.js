// $(function(){
//     $.ajaxSetup({
//         headers : {'X-CSRF-TOKEN' : $('meta[name = "csrf-token"]').attr('content')}
//     })

//     $(document).ready(function(){
//       $('#search').on('keyup', function(){
//           var query = $(this).val();
//           console.log(query)
//         $.ajax({
//           url : '/rating/productSearch',
//           type : 'GET',
//           data : {'search' : query},
//           caches : false,
//           success : function(data){
//             //   data = decodeURI(data)
//               console.log(data)
//             // window.location.href = '/rating/sucessProd/' + encodeURIComponent(data);
//             // $('#productGila').innerHTML(data)
//             document.getElementById('productGila').innerHTML = data
//             console.log('berhasil')
//           },
//           error: function(xhr, textStatus, error) {
//             console.log('ajax error');
//             console.log(xhr);
//           }
//         })
//       })
//     })
// })