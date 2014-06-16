var distances = Array(46.001, 107.477, 147.098, 206.669, 740.573, 1353.572, 2748.938, 4452.940);
var objects = Array('mercury', 'venus', 'earth', 'mars', 'jupiter', 'saturn', 'uranus', 'neptune'); //voyager1,voyager2

distances.push((distances[distances.length - 1] + 100));

//Distances in millions of kms
/*
distances[0] =   57.910;
distances[1] =  108.200;
distances[2] =  147.098;
distances[3] =  206.669;
distances[4] =  740.573;
distances[5] = 1353.572;
distances[6] = 2748.938;
distances[7] = 4452.940;

distances[8] = 18762.018;
distances[9] = 15366.204;
*/

window.onresize = updatePlanets;

function setVisible() {
    $('#sun').css('display', 'block');
    $('#space').css('display', 'block');
}

function updatePlanets() {
    dist_controller();

    var value;

    for (var i = 0; i < objects.length; i++) {
        value = (distances[i] / (current_dist_km_v1s / 1000000) * 0.95 * ($('#space').width() - 25)) + 25;
        $('#' + objects[i]).css('left', value);
    };

    value = (0.95 * ($('#space').width() - 25)) + 25;
    $('#voyager1').css('left', value);

    value = ((current_dist_km_v2s / 1000000) / (current_dist_km_v1s / 1000000) * 0.95 * ($('#space').width() - 25)) + 25;
    $('#voyager2').css('left', value);

    $('#sun').css('top', ($(window).height() * 0.5) - 100);
    $('#space').css('top', ($(window).height() * 0.5) - 52);
}

function updateUnit() {
    unit = $('#selectUnit').val();
}