<?


use asrorz\assets\ZPeriodAsset;
use asrorz\wgets\ZChartWidget;
use yii\web\JsExpression;


?>

<?
ZPeriodAsset::register($this);
$this->title = 'Статистика звонков';
$this->params['breadcrumbs'][] = $this->title;
?>


<?
$this->params['loading'] = [
	'element' => 'body', // or #my-id_element, or .my-class_element
	'options' => [
		'stoppable' => true,
		'theme' => 'dark',
		'message' => 'Working...'
		// and more here http://carlosbonetti.github.io/jquery-loading
	]
]
?>

<div class="row">


    <div class="col-md-7">

        <div class="box box-default">
            <div class="box-header with-border">

                <b>Графические данные</b>


                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


				<?
				// Registers the theme JS files.
				ZChartWidget::registerTheme('shine');

				?>





				<?= ZChartWidget::widget([
					'theme' => 'shine',
					'responsive' => true,
					'options' => [
						'style' => 'height: 480px; width: 100%'
					],
					'pluginEvents' => [
						'click' => [
							new JsExpression('function (params) {console.log(params)}'),
							new JsExpression('function (params) {console.log("ok")}')
						],
						'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
					],
					'pluginOptions' => [
						'option' => [

							'tooltip' => [
								'trigger' => 'axis'
							],
							'legend' => [
								'show' => true,
								'align ' => 'right',
								'left ' => '20%',
								'textStyle' => [
									'fontWeight' => 'bold',
									'fontSize' => 12,
									'fontFamily' => 'Verdana',
								],
								'data' => [
									'Общее количество',
									'Входящие звонки',
									'Исходящие звонки'
								]

							],
							'grid' => [
								'show' => true,
								'left' => '3%',
								'right' => '4%',
								'bottom' => '3%',
								'containLabel' => true
							],
							'toolbox' => [
								'feature' => [
									'saveAsImage' => [],
									'restore' => [],
									'dataZoom' => [],
									'magicType' => [],
									'brush' => [],
								]
							],
							'xAxis' => [
								'name' => 'Время',
								'type' => 'category',
								'boundaryGap' => true,
								'nameLocation' => 'middle',
								'nameTextStyle' => [
									'fontWeight' => 'bold',
									'fontSize' => 14,
									'fontFamily' => 'Verdana',
								],

								'data' => [
									[
										'value' => 'Сегодня',
										'textStyle' => [
											'fontWeight' => 'bold',
											'fontSize' => 11,
											'fontFamily' => 'Verdana',
										],
									],
									[
										'value' => 'Месяц',
										'textStyle' => [
											'fontWeight' => 'bold',
											'fontSize' => 11,
											'fontFamily' => 'Verdana',
										],
									],
										[
											'value' => 'Год',
											'textStyle' => [
												'fontWeight' => 'bold',
												'fontSize' => 11,
												'fontFamily' => 'Verdana',
											],
										],
										[
											'value' => 'Все',
											'textStyle' => [
												'fontWeight' => 'bold',
												'fontSize' => 11,
												'fontFamily' => 'Verdana',
											],
										]

								]

							],
							'yAxis' => [
								'type' => 'value',
								'name' => 'Количество',
								'nameTextStyle' => [
									'fontWeight' => 'bold',
									'fontSize' => 12,
									'fontFamily' => 'Verdana',
								],


							],
							'dataZoom' => [
								'type' => 'inside'
							],
							'series' => [
								[
									'name' => 'Общее количество',
									'type' => 'line',

									'label' => [
										'normal' => [
											'position' => 'inside',
											'show' => 'true',
										],
									],
									'data' => [
										100,
										10
									]
								],
								[
									'name' => 'Входящие звонки',
									'type' => 'line',
									'label' => [
										'normal' => [
											'position' => 'inside',
											'show' => 'true',
										],
									],
									'data' => [
										33,
										73,
										63,
										33,
										44
									]
								],
								[
									'name' => 'Исходящие звонки',
									'type' => 'line',
									'label' => [
										'normal' => [
											'position' => 'inside',
											'show' => 'true',
										],
									],
									'data' => [
										33,
										35,
										36,
										37,
										52
									]
								],


							]
						]
					]
				]);

				?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->


    </div>
    <!-- /.box -->
</div>
