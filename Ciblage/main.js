var js = document.querySelector('body').style.fontFamily = 'Slabo 27px';

var js1 = document.querySelector('section');
js1.childNodes[5].style.fontSize = '1.2em';

var js2 = document.querySelector('p');
js2.childNodes[15].style.color = 'red';
js2.childNodes[15].style.fontStyle = 'italic';
js2.childNodes[15].style.fontWeight = 'bold';
js2.nextSibling.childNodes[19].style.color = 'darkgrey';
js2.nextSibling.childNodes[19].style.fontStyle = 'italic';
js2.nextSibling.childNodes[19].style.fontWeight = 'bold';

$('article:last').css({
    fontSize : '1.2em',
    fontFamily : 'Slabo 27px'
})
$('span:eq(2)').css({
    color : 'darkgrey',
    fontStyle : 'italic',
    fontWeight : 'bold',
})
$('span:eq(3)').css({
    color : 'red',
    fontStyle : 'italic',
    fontWeight : 'bold',
})