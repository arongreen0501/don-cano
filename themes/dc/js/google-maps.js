// // jQuery(document).ready(function( $ ) {

//     console.log('rdy');

//     function initMap() {
//     var customMapType = new google.maps.StyledMapType([
//         {
//             stylers: [
//             // {hue: '#36415a'},
//             {visibility: 'simplified'},
//             // {gamma: 0.8},
//             // {weight: 1.5}
//             ]
//         },
//         {
//             elementType: 'labels',
//             stylers: [{visibility: 'on'}]
//         },
//         {
//             featureType: 'water',
//             stylers: [{color: '#fff'}]
//         }
//         ], {
//         name: 'Custom Style'
//     });
//     var customMapTypeId = 'custom_style';




//     var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 19,
//         scrollwheel: false,
//         center: {lat: 64.145335, lng: -21.928201},  // Reykjavík.
//         mapTypeControlOptions: {
//         mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
//         }
//     });

//     marker = new google.maps.Marker({
//         // icon: "http://don-cano.dev/wp-content/uploads/2017/10/marker.png",
//         map: map,
//         draggable: false,
//         animation: google.maps.Animation.DROP,
//         position: {lat: 64.145335, lng: -21.928201}
//     });

//     map.mapTypes.set(customMapTypeId, customMapType);
//     map.setMapTypeId(customMapTypeId);
//     }

// // });


// <iframe src="https://snazzymaps.com/embed/27677" width="100%" height="600px" style="border:none;"></iframe>