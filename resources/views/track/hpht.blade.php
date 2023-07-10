<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/hplhpht.css">
    <link rel="stylesheet" href="/css/navbar.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    @include('partials.navbar')
    <div class="col-lg-12 containers">
        <img src="/img/ibu-hamil.png" style="position: absolute;top:0;z-index:-1; width:100%">
        <div class="row g-0 justify-content-center align-items-center box-formulir-keseluruhan">
            <a href="/track/form" class="col-1 g-0 d-flex justify-content-center align-items-center">
                <img src="/img/back-form-kalender-hover.png" class="col-6" id="prev-bottom" onmouseenter="hoverinPrev(this)" onmouseleave="hoveroutPrev(this)">
            </a> 
            <div class="col-4 g-0 ">
                <div class="row g-0 formulir-kalender">
                    <form class="pt-5">
                        <div class="col-12 mb-5 form-group d-flex justify-content-center">
                            <div class="col-10">
                                <div class="row g-0 input-group date" id="datepicker">
                                    <input type="text" class="form-control col-10" placeholder="Masukkan hari haid terakhir (HPHT)" >
                                    <span class="input-group-append col-2">
                                        <span class="button-calendar bg-white d-block col-12 d-flex justify-content-center align-items-center "> 
                                            {{-- input-group-text  --}}
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1">
                
            </div>
        </div>
        <div class="bt-bayi" style="width: 100%">
            <a href="/track/trackRes" class="link-button-start-tracking" onclick="return dateDiff()">
                <img src="/img/button-tracking.png" class="button-kalender" style="position: absolute; z-index:1">
                <div class="text-start-tracking col-1 text-center" style="position: absolute; z-index: 2">
                    Start
                </div>
                <div class="text-tracking col-1 text-center" style="position: absolute; z-index: 2">
                    Tracking
                </div>
            </a>

        </div>
    </div>

           
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                'format': 'dd-mm-yyyy',
                'autoclose': true,
                'todayHighlight': true,
                endDate: new Date()
            });
        });
        function dateDiff() {
            var a = $( "#datepicker" ).datepicker("getDate");
            // alert(a);
            if (a === null) {
                window.location.href = '/track/form';
                alert('Sorry, we think you entered the wrong date');
            }
            var date = new Date();
            // 20 Mei 2020 + 9 bulan + (33-21) = 8 Februari 2021.
            var temp = new Date(a);
            temp.setDate(temp.getDate()+289);

            var sisahari = Math.ceil((temp - date)/ 86400000);
            var diff = Math.ceil(sisahari/7);
            var week = 42 - diff;
            localStorage.setItem('passingval', week);
            localStorage.setItem('passingdate', temp);
            localStorage.setItem('passingsisahari', sisahari);
            window.location.href = 'track.blade.php';
        }
    </script>
    
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="/js/calendar.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>
</html>