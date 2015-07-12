$(function() {
Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2005',
            a: 20
           
        }, {
            y: '2006',
            a: 100
            
        }, {
            y: '2007',
            a: 75
        }, {
            y: '2008',
            a: 50
        }, {
            y: '2009',
            a: 75
            
        }, {
            y: '2010',
            a: 50
            
        }, {
            y: '2011',
            a: 75
            
        }, {
            y: '2012',
            a: 100
           
        }, {
            y: '2013',
            a: 100
           
        }, {
            y: '2014',
            a: 100
           
        }, {
            y: '2015',
            a: 50
           
        }],
        xkey: 'y',
        ykeys: 'a',
        labels: 'Series A',
        hideHover: 'auto',
        resize: true
    });
});
