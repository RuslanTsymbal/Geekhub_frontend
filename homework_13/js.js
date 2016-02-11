window.onload = function(){
    var seconds = document.getElementById('seconds');
    var minutes = document.getElementById("minutes");
    var hour = document.getElementById('hour');

    var s = 0;
    var m = 0;
    var h = 0;

    var timerFn = function () {
        if (m == 60) {
            m = 0;
            h++
        }
        if (s == 60) {
            s = 0;
            m++;
        }
        if (s < 10) {
            seconds.innerHTML = '0' + s;
        }
        else {
            seconds.innerHTML = s;
        }
        if (m < 10) {
            minutes.innerHTML = '0' + m + ':';
        }
        else {
            minutes.innerHTML = m + ':';
        }
        if (h < 10) {
            hour.innerHTML = '0' + h + ':';
        }
        else {
            hour.innerHTML = h + ':';
        }
        
        s++;

    };
    setInterval(timerFn, 1000);

};
