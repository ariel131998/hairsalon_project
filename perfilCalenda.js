mobiscroll.setOptions({
    locale: mobiscroll.localeEs,
    theme: 'ios',
    themeVariant: 'light'
});

mobiscroll.datepicker('#demo-inline', {
    controls: ['calendar'],
    display: 'inline'
});

mobiscroll.datepicker('#demo-anchored', {
    controls: ['calendar'],
    display: 'anchored'
});

mobiscroll.datepicker('#demo-top', {
    controls: ['calendar'],
    display: 'top'
});

mobiscroll.datepicker('#demo-bottom', {
    controls: ['calendar'],
    display: 'bottom'
});

mobiscroll.datepicker('#demo-center', {
    controls: ['calendar'],
    display: 'center'
});

mobiscroll.datepicker('#demo-booking-multiple', {
    controls: ['calendar', 'timegrid'],
    display: 'center',
    min: '2022-02-28T00:00',
    max: '2022-08-28T00:00',
    minTime: '08:00',
    maxTime: '19:59',
    stepMinute: 60,
    // example for today's labels and invalids
    labels: [{
        start: '2022-02-27',
        textColor: '#e1528f',
        title: '3 SPOTS'
    }],
    invalid: [{
        start: '2022-02-28T08:00',
        end: '2022-02-28T13:00'
    }, {
        start: '2022-02-28T15:00',
        end: '2022-02-28T17:00'
    }, {
        start: '2022-02-28T19:00',
        end: '2022-02-28T20:00'
    }]
});