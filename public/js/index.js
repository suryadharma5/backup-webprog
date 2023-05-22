let textRecom = ' '
var yes;
var no;
let temp = ''


const changeColorYes = ()=> {
    yes = document.getElementById('yes-recom').style.color = '#FFB8C7';
    no = document.getElementById('no-recom').style.color = 'black';
}

const changeColorNo = ()=> {
    yes = document.getElementById('no-recom').style.color = '#FFB8C7';
    no = document.getElementById('yes-recom').style.color = 'black';
}

$('input[name=rate]').change(function(){
    var value = $( 'input[name=rate]:checked').index();
    // console.log(value); 
    
    if (value == 8){
        document.getElementById('star-perfect').style.display = 'none'
        document.getElementById('star-good').style.display = 'none'
        document.getElementById('star-neutral').style.display = 'none'
        document.getElementById('star-bad').style.display = 'none'
        document.getElementById('star-worst').style.display = 'block'
        document.getElementById('star-text').innerHTML = 'Worst'
    }else if (value == 6){
        document.getElementById('star-perfect').style.display = 'none'
        document.getElementById('star-good').style.display = 'none'
        document.getElementById('star-neutral').style.display = 'none'
        document.getElementById('star-bad').style.display = 'block'
        document.getElementById('star-worst').style.display = 'none'
        document.getElementById('star-text').innerText = 'Bad'
    }else if (value == 4){
        document.getElementById('star-perfect').style.display = 'none'
        document.getElementById('star-good').style.display = 'none'
        document.getElementById('star-neutral').style.display = 'block'
        document.getElementById('star-bad').style.display = 'none'
        document.getElementById('star-worst').style.display = 'none'
        document.getElementById('star-text').innerText = 'Neutral'
    }else if ( value == 2){
        document.getElementById('star-perfect').style.display = 'none'
        document.getElementById('star-good').style.display = 'block'
        document.getElementById('star-neutral').style.display = 'none'
        document.getElementById('star-bad').style.display = 'none'
        document.getElementById('star-worst').style.display = 'none'
        document.getElementById('star-text').innerText = 'Good'
    }else {
        document.getElementById('star-perfect').style.display = 'block'
        document.getElementById('star-good').style.display = 'none'
        document.getElementById('star-neutral').style.display = 'none'
        document.getElementById('star-bad').style.display = 'none'
        document.getElementById('star-worst').style.display = 'none'
        document.getElementById('star-text').innerText = 'Perfect'
    }
});

