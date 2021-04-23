// Flot Charts sample data for SB Admin template

// Flot Line Chart with Tooltips
$(document).ready(function() {
    console.log("document ready");
    var offset = 0;
    //plot();

    /*function plot() {
        var sin = [],
            cos = [];
        for (var i = 0; i < 12; i += 0.2) {
            sin.push([i, Math.sin(i + offset)]);
            cos.push([i, Math.cos(i + offset)]);
        }

        var options = {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true //IMPORTANT! this is needed for tooltip to work
            },
            yaxis: {
                min: -1.2,
                max: 1.2
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        };
    } */
});

// Flot Pie Chart with Tooltips
$(function() {

    var data = [{
        label: "Receitas",
        data: 1,
        color: "green"
    }, {
        label: "Despesas",
        data: 2,
        color: "red"
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: true  
        }
    });

});

// Flot Chart Bar Graph

$(function() {

    var barOptions = {
        series: {
            bars: {
                show: true,
                barWidth: 60200000
            }
        },
        xaxis: {
            mode: "time",
            timeformat: "%d",
            minTickSize: [1, "day"]
        },
        grid: {
            hoverable: true
        },
        legend: {
            show: false
        },
        tooltip: true,
        tooltipOpts: {
            content: "x: %x, y: %y"
        }
    };
    var barData = {
        label: "bar",
        data: [
            [1354521600000, 1000],
            [1355040000000, 2000],
            [1355223600000, 3000],
            [1355306400000, 4000],
            [1355487300000, 5000],
            [1355571900000, 6000]
        ]
    };
    $.plot($("#flot-bar-chart"), [barData], barOptions);

});

    // Bar Chart ///////////////////////////////////MORRIS/////////////////////////////
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            mes: 'Janeiro',
            receitas: 136,
            despesas: 110
        }, {
            mes: 'Fevereiro',
            receitas: 137,
            despesas: 125
        }, {
            mes: 'Março',
            receitas: 275,
            despesas: 200
        }, {
            mes: 'Abril',
            receitas: 380,
            despesas: 287
        }, {
            mes: 'Mail',
            receitas: 655,
            despesas: 699
        }, {
            mes: 'Junho',
            receitas: 1571,
            despesas: 1600
        }],
        xkey: 'mes',
        ykeys: ['receitas', 'despesas'],
        labels: ['Receitas', 'Despesas'],
        barColors: ["green", "red"],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true,
    }); 
