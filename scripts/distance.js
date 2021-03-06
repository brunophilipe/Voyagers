// JavaScript Document

/*
	Handles updating of Voyager Distances from Earth and the Sun
*/

var epoch_0 = 1414425600;
var epoch_1 = 1414512000;

var current_time = 1414474788;

var dist_0_v1 = 19453141622.6483;
var dist_1_v1 = 19455982049.8515;

var dist_0_v2 = 15926289376.0615;
var dist_1_v2 = 15929627430.9169;

var dist_0_v1s = 19362268596.9664;
var dist_1_v1s = 19363734326.3207;

var dist_0_v2s = 15897025560.9408;
var dist_1_v2s = 15898322570.0578;

var current_dist_km_v1 = 0;
var current_dist_au_v1 = 0;

var current_dist_km_v2 = 0;
var current_dist_au_v2 = 0;

var current_dist_km_v1s = 0;
var current_dist_au_v1s = 0;

var current_dist_km_v2s = 0;
var current_dist_au_v2s = 0;

var au_const = 149597870.691;

function dist_controller() {

    current_dist_km_v1 = (((current_time - epoch_0) / (epoch_1 - epoch_0)) * (dist_1_v1 - dist_0_v1)) + dist_0_v1;
    current_dist_au_v1 = (current_dist_km_v1 / au_const) + '';
    current_dist_au_v1 = current_dist_au_v1.split('.');
    current_dist_au_v1 = current_dist_au_v1[0] + '.' + current_dist_au_v1[1].substring(0, 8);

    current_dist_km_v2 = (((current_time - epoch_0) / (epoch_1 - epoch_0)) * (dist_1_v2 - dist_0_v2)) + dist_0_v2;
    current_dist_au_v2 = (current_dist_km_v2 / au_const) + '';
    current_dist_au_v2 = current_dist_au_v2.split('.');
    current_dist_au_v2 = current_dist_au_v2[0] + '.' + current_dist_au_v2[1].substring(0, 8);

    current_dist_km_v1s = (((current_time - epoch_0) / (epoch_1 - epoch_0)) * (dist_1_v1s - dist_0_v1s)) + dist_0_v1s;
    current_dist_au_v1s = (current_dist_km_v1s / au_const) + '';
    current_dist_au_v1s = current_dist_au_v1s.split('.');
    current_dist_au_v1s = current_dist_au_v1s[0] + '.' + current_dist_au_v1s[1].substring(0, 8);

    current_dist_km_v2s = (((current_time - epoch_0) / (epoch_1 - epoch_0)) * (dist_1_v2s - dist_0_v2s)) + dist_0_v2s;
    current_dist_au_v2s = (current_dist_km_v2s / au_const) + '';
    current_dist_au_v2s = current_dist_au_v2s.split('.');
    current_dist_au_v2s = current_dist_au_v2s[0] + '.' + current_dist_au_v2s[1].substring(0, 8);

    current_dist_lt_v1 = current_dist_km_v1 * 2 / 299792.458;
    current_dist_lt_v2 = current_dist_km_v2 * 2 / 299792.458;

    if (unit === 'km') {
        document.getElementById('voy1_de').innerHTML = addCommas(Math.round(current_dist_km_v1) + " Km");
        document.getElementById('voy2_de').innerHTML = addCommas(Math.round(current_dist_km_v2) + " Km");
        document.getElementById('voy1_ds').innerHTML = addCommas(Math.round(current_dist_km_v1s) + " Km");
        document.getElementById('voy2_ds').innerHTML = addCommas(Math.round(current_dist_km_v2s) + " Km");
    } else if (unit === 'au') {
        document.getElementById('voy1_de').innerHTML = addCommas(current_dist_au_v1) + " AU";
        document.getElementById('voy2_de').innerHTML = addCommas(current_dist_au_v2) + " AU";
        document.getElementById('voy1_ds').innerHTML = addCommas(current_dist_au_v1s) + " AU";
        document.getElementById('voy2_ds').innerHTML = addCommas(current_dist_au_v2s) + " AU";
    } else if (unit === 'mi') {
        document.getElementById('voy1_de').innerHTML = addCommas(Math.round(current_dist_km_v1 * 1.60934) + " Mi");
        document.getElementById('voy2_de').innerHTML = addCommas(Math.round(current_dist_km_v2 * 1.60934) + " Mi");
        document.getElementById('voy1_ds').innerHTML = addCommas(Math.round(current_dist_km_v1s * 1.60934) + " Mi");
        document.getElementById('voy2_ds').innerHTML = addCommas(Math.round(current_dist_km_v2s * 1.60934) + " Mi");
    };

    // document.getElementById('voy1_lt').innerHTML = formatSeconds(current_dist_lt_v1);
    // document.getElementById('voy2_lt').innerHTML = formatSeconds(current_dist_lt_v2);

    //alert("dist_controller.addCommas( Math.round(current_dist_km_v1) ): " + addCommas( Math.round(current_dist_km_v1) ));

    current_time += 0.1;
}

function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');

    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

function formatSeconds(num) {
    var hours = Math.floor(num / 3600);

    num -= (hours * 3600);

    var minutes = Math.floor(num / 60);

    num -= (minutes * 60);

    var seconds = Math.floor(num);

    if (hours < 10)
        hours = "0" + hours;
    if (minutes < 10)
        minutes = "0" + minutes;
    if (seconds < 10)
        seconds = "0" + seconds;

    return hours + ":" + minutes + ":" + seconds;


}