<?php

	/**
	 *
	 *
	 * Author:  Asror Zakirov
	 * https://www.linkedin.com/in/asror-zakirov
	 * https://github.com/asror-z
	 *
	 */

	use zetsoft\former\shop\ProductItemForm;
	use zetsoft\system\Az;
	use zetsoft\widgets\former\ZListViewWidget;
	use zetsoft\widgets\market\ZMProductCardWidget;
	use zetsoft\widgets\sorter\ZLinkSorterWidget;
	use zetsoft\service\market\Productold;
	use yii\helpers\Html;

	$model = new ProductItemForm();
//	$product = new Productold;
//	$data = $product->getProductItemForm();


    $data = Az::$app->market->product->getProductItemForm();

	echo ZListViewWidget::widget([
		
		'model' => $model,
		'data' => $data,
		
		'config' => [
			
			'itemOptions' => ['class' => 'item-element'], // har bir item atofidagi tag optionlari
			'layout' => "\n{pager}\n{items}\n{sorter}",
			
			'itemView' => function ($model, $key, $index, $widget) {
				return Html::tag('h1', $index.". ".$model->name." - ".$model->price);
			},



			'sorter' => [
				'attributes' => [
					'name',
					'price',
				]
			],
			'pageSize' => 5,
			'pager' => [
				'firstPageLabel' => '<i class="fa fa-home"></i>',
				'lastPageLabel' => 'last',
				'nextPageLabel' => 'next',
				'prevPageLabel' => '<i class="fa fa-arrow-left"></i>',
				'maxButtonCount' => 5,
			],
			
			'summary' => [],

			// widget container tag options
			'options' => [
				'tag' => 'div',
				'class' => 'col-sm-12',
				'id' => 'list-wrapper',
			],

		]
	]);


	
