$(function () {
    "use strict";
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