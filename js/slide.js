var aImgs = document.querySelectorAll('.container img');
var aLis = document.querySelectorAll('.container li');
var btnLeft = document.querySelector('.container .left');
var btnRight = document.querySelector('.container .right');

var index = 0;
var lastIndex = 0;

function right() {
    lastIndex = index;

    aImgs[lastIndex].className = '';
    aLis[lastIndex].className = '';

    index++;
    index %= aImgs.length;
    aImgs[index].className = 'on';
    aLis[index].className = 'active';
}

function left() {
    lastIndex = index;
    aImgs[lastIndex].className = '';
    aLis[lastIndex].className = '';

    index--;
    if (index < 0) {
        index = aImgs.length - 1;
    }
    aImgs[index].className = 'on';
    aLis[index].className = 'active';
}

//Timed display
var timer = null;
clearInterval(timer);
timer = setInterval(right, 4000);

//Button switch
btnRight.onclick = right;
btnLeft.onclick = left;