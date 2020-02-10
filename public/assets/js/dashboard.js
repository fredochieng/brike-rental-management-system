$(function () {
    "use strict";
    MorrisArea();
});
//======
function MorrisArea() {

    Morris.Area({
        element: 'area_chart',
        parseTime: false,
        data: [{
                Month: 'Jan',
                Payments: 5,
                Expese: 12,
                Profit: 5
            }, {
                Month: 'Feb',
                Payments: 62,
                Expese: 10,
                Profit: 5
            }, {
                Month: 'Mar',
                Payments: 20,
                Expese: 84,
                Profit: 36
            }, {
                Month: 'Apr',
                Payments: 108,
                Expese: 12,
                Profit: 7
            }, {
                Month: 'May',
                Payments: 30,
                Expese: 95,
                Profit: 19
            }, {
                Month: 'Jun',
                Payments: 25,
                Expese: 25,
                Profit: 67
            }, {
                Month: 'July',
                Payments: 75,
                Expese: 10,
                Profit: 16
            }, {
                Month: 'Aug',
                Payments: 65,
                Expese: 18,
                Profit: 30
            }, {
                Month: 'Sept',
                Payments: 58,
                Expese: 25,
                Profit: 36

            }, {
                Month: 'Oct',
                Payments: 96,
                Expese: 35,
                Profit: 31
            }

        ],
        lineColors: ['#ffc107', '#17a2b8', '#28a745'],
        xkey: 'Month',
        ykeys: ['Payments', 'Expese', 'Profit'],
        labels: ['Payments', 'Expese', 'Profit'],
        pointSize: 2,
        lineWidth: 1,
        resize: true,
        fillOpacity: 0.5,
        behaveLikeLine: true,
        gridLineColor: '#ffffff',
        hideHover: 'auto'
        // '#e0e0e0',
    });

}

$(function () {
    "use strict";
    var mapData = {
        "US": 298,
        "AU": 760,
        "CA": 870,
        "IN": 2000000,
        "GB": 120,
    };

    if ($('#world-map-markers').length > 0) {
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            borderColor: '#fff',
            borderOpacity: 0.25,
            borderWidth: 0,
            color: '#e6e6e6',
            regionStyle: {
                initial: {
                    fill: '#ebebeb'
                }
            },

            markerStyle: {
                initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity': 1,
                    'stroke': '#000',
                    'stroke-width': 1,
                    'stroke-opacity': 0.4
                },
            },

            markers: [{
                    latLng: [37.09, -95.71],
                    name: 'America'
                },
                {
                    latLng: [-25.27, 133.77],
                    name: 'Australia'
                },
                {
                    latLng: [56.13, -106.34],
                    name: 'Canada'
                },
                {
                    latLng: [20.59, 78.96],
                    name: 'India'
                },
                {
                    latLng: [55.37, -3.43],
                    name: 'United Kingdom'
                },
            ],

            series: {
                regions: [{
                    values: {
                        "US": '#bdf3f5',
                        "AU": '#f9f1d8',
                        "IN": '#ffd4c3',
                        "GB": '#e0eff5',
                        "CA": '#efebf4',
                    },
                    attribute: 'fill'
                }]
            },
            hoverOpacity: null,
            normalizeFunction: 'linear',
            zoomOnScroll: false,
            scaleColors: ['#000000', '#000000'],
            selectedColor: '#000000',
            selectedRegions: [],
            enableZoom: false,
            hoverColor: '#fff',
        });
    }
});
// progress bars
$('.progress .progress-bar').progressbar({
    display_text: 'none'
});

$('.sparkline-pie').sparkline('html', {
    type: 'pie',
    offset: 90,
    width: '155px',
    height: '155px',
    sliceColors: ['#02b5b2', '#445771', '#ffcd55']
})

$('.sparkbar').sparkline('html', {
    type: 'bar'
});