<!--//start|FozilZayn|2020-10-10-->

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>-->
<!---->
<!--<div class="container h-50 w-50">-->
<!--    <canvas id="myChart"></canvas>-->
<!--</div>-->

<!--<script>-->
<!--    var ctx = document.getElementById('myChart').getContext('2d');-->
<!--    var myChart = new Chart(ctx, {-->
<!--        type: 'line',-->
<!--        data: {-->
<!--            labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11'],-->
<!--            datasets: [{-->
<!--                label: '# of Votes',-->
<!--                data: [4, 12, 7, 5, 2, 3,4, 12, 7, 5, 2, 3],-->
<!--                fill: false,-->
<!--                borderColor: [-->
<!--                    'rgba(51, 119, 255, 1)'-->
<!--                ],-->
<!--                borderWidth: 2-->
<!--            },-->
<!--                {-->
<!--                    label: '# of Votes',-->
<!--                    data: [5, 2, 3, 4, 12, 7, 5, 6 , 4, 8, 5, 6],-->
<!--                    fill: false,-->
<!--                    borderColor: [-->
<!--                        'rgba(51, 119, 255, .6)'-->
<!--                    ],-->
<!--                    borderWidth: 2-->
<!--                }-->
<!--            ]-->
<!--        },-->
<!--        options: {-->
<!--            scales: {-->
<!---->
<!--                xAxes: [{-->
<!--                    ticks: {-->
<!--                        beginAtZero: true-->
<!--                    },-->
<!--                    gridLines:{-->
<!--                        display: false,-->
<!--                        color: "#FFFFFF"-->
<!--                    },-->
<!--                }],-->
<!--                yAxes: [{-->
<!--                    ticks: {-->
<!--                        beginAtZero: true-->
<!--                    }-->
<!--                }]-->
<!--            },-->
<!--            gridLines:{-->
<!--               display: false,-->
<!--                color: "#FFFFFF"-->
<!--            },-->
<!--            animation: {-->
<!--                duration: 4000-->
<!--            }-->
<!--        }-->
<!--    });-->
<!---->
<!--</script>-->

<!--//end|FozilZayn|2020-10-10-->
<?php
use \zetsoft\widgets\charts\ZChartJsWidget;
echo ZChartJsWidget::widget([
        'config' => [
                'type' => ZChartJsWidget::type['line'],
        ]
]);
?>