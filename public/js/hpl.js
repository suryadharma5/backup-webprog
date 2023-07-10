$(function() {
    $('#datepicker').datepicker({
        'format': 'dd-mm-yyyy',
        'autoclose': true,
        'todayHighlight': true,
        startDate: new Date()
    });
    
});


function dateDiff() {
    var a = $( "#datepicker" ).datepicker("getDate");
    // console.log(a);
    // alert(a);
    // window.location.reload();
    if (a === null) {
        window.location.href = '/track/form';
        alert('Sorry, we think you entered the wrong date');
    }
    var date = new Date();
    var sisahari = Math.ceil((a - date)/ 86400000);
    var diff = Math.ceil(sisahari/7);
    var week = 43 - diff;
    localStorage.setItem('passingval', week);
    localStorage.setItem('passingdate', a);
    localStorage.setItem('passingsisahari', sisahari);
    window.location.href = 'track.blade.php';
}