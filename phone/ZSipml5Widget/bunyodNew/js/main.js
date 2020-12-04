/**
 *
 * Author:  Asror Zakirov
 * Created: 5/23/2020 12:58 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */
var Grid = function (width, height) {
    this.draw = function () {
        var ctxL = document.getElementById("lineChart1").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["8 AM", "10 AM", "12 PM", "2 PM", "4 PM", "6 PM", "8 PM"],
                datasets: [{
                    fill: false,
                    borderColor: "#673ab7",
                    pointBackgroundColor: "#673ab7",
                    data: [885, 884, 887, 883, 888, 889, 888]
                }]
            },
            options: {
                responsive: false,
                legend: {
                    display: false
                },
                elements: {
                    line: {
                        tension: 0.0
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            padding: 15,
                            height: 30
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 15,
                            min: 880,
                            max: 890
                        }
                    }]
                }
            }
        });
    }
}


/*var Grid = function (width, height) {
...
    this.draw = function () {
        var canvas = document.getElementById("canvas");
        if (canvas.getContext) {
            var context = canvas.getContext("2d");
            for (var i = 0; i < width; i++) {
                for (var j = 0; j < height; j++) {
                    if (isLive(i, j)) {
                        context.fillStyle = "lightblue";
                    } else {
                        context.fillStyle = "yellowgreen";
                    }
                    context.fillRect(i * 15, j * 15, 14, 14);
                }
            }
        }
    }
}*/
