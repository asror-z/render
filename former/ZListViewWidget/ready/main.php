<?php

	/**
     *
	 *
	 *
	 * Author:  Asror Zakirov
	 * https://www.linkedin.com/in/asror-zakirov
	 * https://github.com/asror-z
	 *
	 */

use zetsoft\dbitem\shop\MultiProductItem;
use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\former\shop\ProductItemForm;
	use zetsoft\system\Az;
	use zetsoft\widgets\former\ZListViewWidget;
	use zetsoft\widgets\market\ZMProductCardWidget;
	use zetsoft\widgets\sorter\ZLinkSorterWidget;
	use zetsoft\service\market\Productold;
	use yii\helpers\Html;

	$model = new ProductItemForm();
	//$data = $product->getProductItemForm();
    //vdd($data);

$property_group = new PropertyItem();
$property_group->name = '182sad';
$property_group->branch = '00421sa';
$property_group->items = [
    'huihuih',
    'okjio',
    'juijiio'
];

$product = new MultiProductItem();

$product->id = 18;
$product->catalogId = 19;
$product->name = 'Product Name';
$product->amount = 0;
$product->properties = [
    $property_group,
    $property_group,
    $property_group,
];
$product->allProperties = [
    $property_group
];
$product->status = ['new', 'hot_)', 'sale'];
$product->categoryId = 20;
$product->categoryName = 'catalogName';
$product->categoryUrl = '';
$product->title = '';
$product->text = '';
$product->brand = '';
$product->brandImage = '';
$product->rating = '';
$product->reviewCount = 8;
$product->url = '';
$product->visible = true;
$product->image = [];
$product->is_multi = true;
$product->in_wish = '';
$product->in_compare = '';
$product->cart_amount = '';
$product->items = [];
$product->barcode = '';
$product->max_price = 5200;
$product->min_price = 4500;
    //$data = Az::$app->market->product->getProductItemForm();

	echo ZListViewWidget::widget([
		
		//'model' => $model,
		'data' => $product,
		
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


	
