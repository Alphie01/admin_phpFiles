
/*
Template Name:Admin Panel
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Project overview init js
*/

/********** overview chart ********/

var tableContents = document.getElementById('tableContent').value;

var cont = tableContents.split(',')

console.log(cont);



var options = {

    chart: {
    height: 290,
    type: 'bar',
    toolbar: {
        show: false,
    }
    },
    plotOptions: {
    bar: {
        columnWidth: '14%',
        endingShape: 'rounded'
    }
    },
    dataLabels: {
    enabled: false
    },

    series: [{
    name: 'Overview',
    data: cont
    }],
    grid: {
        yaxis: {
            lines: {
                show: false,
            }
        }
    },
    yaxis: {
        title: {
            text: 'Count'
        }
    },
    xaxis: {
        labels: {
            rotate: -90
        },
        categories: ['1', '2', '3', '4', '5', '6', '7', '8','9', '10', '11' , '12'],
        title: {
                text: 'Month',
        }
    },
    colors: ['#556ee6'],


    }

    var chart = new ApexCharts(
    document.querySelector("#overview-chart"),
    options
    );

    chart.render();
