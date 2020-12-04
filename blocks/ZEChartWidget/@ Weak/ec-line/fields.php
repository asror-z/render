<?
/** @var CallsCount $callCount */
/** @var ZStatMainItem $currStats */
/** @var DateRangeItem $callDates */


use asrorz\assets\ZPeriodAsset;
use asrorz\actives\Field;
use asrorz\zitems\DateRangeItem;
use asrorz\zitems\CallsCount;
use asrorz\zitems\CallSubject;
use asrorz\zitems\ZStatMainItem;     
use asrorz\wgets\ZChartWidget;
use yii\web\JsExpression;

?>


<div class="row">


	<div class="col-md-6">

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


				$data = [];
				if (is_array($callField))
					foreach ($callField as $callField) {
						$data[] = [
							'name' => $callField->title,
							'value' => $callField->custom,
						];

					}

				?>




				<?= ZChartWidget::widget([

					'theme' => 'shine',
					'responsive' => true,

					'options' => [
						'style' => 'height: 480px; width: 100%'
					],
					'pluginOptions' => [
						'option' => [

							'tooltip' => [
								'trigger' => 'axis'
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

							'series' => [
								[
									'name' => 'pie',
									'type' => 'pie',
									'radius' => [0, '70%'],
									'center' => ['50%', '50%'],
									'data' => $data,
								],
							]
						]
					]
				]); ?>


			</div>
			<!-- /.row -->
		</div>
		<!-- /.box-body -->

	</div>
	<!-- /.box -->
</div>
