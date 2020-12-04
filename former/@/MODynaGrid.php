<?

use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\helpers\Html;
use kartik\sortable\Sortable;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidget;
use kartik\dynagrid\DynaGrid;
use zetsoft\widgets\former\ZExportWidget2D;

?>
test data with <span> html span tags </span>
<br>
<?php
$model = User::findOne(['id' => 76]);
$query = User::find();
$dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => [
            'id' => SORT_DESC,
        ]
    ],
]);
 

$columns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'email',
    'name',
    ['class' => 'kartik\grid\ActionColumn', 'urlCreator' => function () {
        return '#';
    }]
];

echo ExportMenu::widget([
        'dataProvider' => $model->search(),
        'columns' => $columns,
        'dropdownOptions' => [
            'label' => 'Export All',
            'class' => 'btn btn-secondary'
        ]
    ]) . "<hr>\n" .
    ZExportWidget2D::widget([
        'model' => $model,
        'config' => [
            'dataProvider' => $dataProvider,
            'columns' => $columns
        ]
    ])
    . "<hr>\n" .
    DynaGrid::widget([
        'columns' => $columns,
        'theme' => 'panel-info',
        'showPersonalize' => true,
        'storage' => 'db',

        'userSpecific' => true,
        'dbUpdateNameOnly' => false,
        'enableMultiSort' => true,

        'allowPageSetting' => true,
        'allowThemeSetting' => true,
        'allowFilterSetting' => true,
        'allowSortSetting' => true,
        'matchPanelStyle' => true,

        'toggleButtonGrid' => [
            'label' => '<span class="fas fa-wrench fa-fw"></span>',
            'title' => Az::l('Personalize grid settings'),
            'data-pjax' => true,
        ],
        'toggleButtonFilter' => [
            'label' => '<span class="fas fa-filter fa-fw"></span>',
            'title' => Az::l('Save / edit grid filter'),
            'data-pjax' => true,
        ],
        'toggleButtonSort' => [
            'label' => '<span class="fas fa-sort fa-fw"></span>',
            'title' => Az::l('Save / edit grid sort'),
            'data-pjax' => true,
        ],

        'sortableOptions' => [
            /**
             * list
             * Sortable::TYPE_LIST or list
             * Sortable::TYPE_GRID or grid
             */
            'type' => Sortable::TYPE_LIST,
            'connected' => false,
            'disabled' => false,
            'showHandle' => false,
            //  'handleLabel' => '<i class="fas fa-arrows-alt"><i>',
            'itemOptions' => [],
            /*   'items' => [
                   'content' => '',
                   'disabled' => false,
                   'options' => ''
               ],*/
            'options' => [],
            /**
             * pluginOptions
             * https://github.com/lukasoppermann/html5sortable
             */
            'pluginOptions' => [
                /**
                 *
                 *  items: ':not(.disabled)',
                 *  handle: 'h2',
                 *  forcePlaceholderSize: true,
                 *  onnectWith: 'connected',
                 *  acceptFrom: '.selector,.anotherSortable',
                 *  placeholder: '<tr><td colspan="7">&nbsp;</td></tr>',
                 *  hoverClass: 'is-hovered is-hovered-class' // Defaults to false
                 *  maxItems: 3 // Defaults to 0 (no limit)
                 *  copy: true // Defaults to false
                 */
            ],
            /**
             * pluginEvents
             * https://github.com/lukasoppermann/html5sortable
             */
            /*'pluginEvents' => [
                'sortstart' => $this->eventCode('eventSortStart'),
                'sortstop' => $this->eventCode('eventSortStop'),
                'sortupdate' => $this->eventCode('eventSortUpdate'),
            ],*/

        ],

        'sortableHeader' => ['class' => 'alert alert-info dynagrid-column-header'],
        'submitMessage' => Az::l('Saving and applying configuration'),
        'deleteMessage' => Az::l('Trashing all personalizations'),
        'messageOptions' => [],
        'deleteConfirmation' => Az::l(' Are you sure you want to delete the setting?'),
        'submitButtonOptions' => [
            'icon' => 'save',
            'label' => '',
            'title' => Az::l('Save grid settings'),
        ],
        'resetButtonOptions' => [
            'icon' => 'redo',
            'label' => '',
            'title' => Az::l('trashRemove saved grid setting'),
        ],
        'iconVisibleColumn' => '<i class="fas fa-eye-open"></i>',
        'iconHiddenColumn' => '<i class="fas fa-eye-close"></i>',


        'gridOptions' => [
            'dataProvider' => $dataProvider,
            /*new ArrayDataProvider([
                'key'=>'id',
                'allModels' => $query->all(),
                'sort' => [
                    'attributes' => ['id', 'name', 'email'],
                ],
            ]),*/

            'pager' => null,
            'pjax' => true,


            //'dataProvider' => null,
            'filterModel' => null,
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'responsiveWrap' => true,
            'hover' => true,
            'containerOptions' => [],
            'perfectScrollbar' => true,
            'perfectScrollbarOptions' => [],
            'tableOptions' => [],
            'footerRowOptions' => [
                // 'class' => 'kv-table-footer'
            ],
            'captionOptions' => [
                'class' => 'kv-table-caption',

            ],
            'headerRowOptions' => [],

            // 'filterModel' => $model,
            'showPageSummary' => true,
            'floatHeader' => true,
            //'pjax' => true,
            // 'responsiveWrap' => false,
            /*'panel' => [
                'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
                'before' => '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this asset as you scroll</em></div>',
                'after' => false
            ],*/
            'toolbar' => [
                ['content' =>
                    Html::button('<i class="fas fa-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
                    Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-outline-secondary', 'title' => 'Reset Grid'])
                ],
                ['content' => '{dynagridFilter}{dynagridSort}{dynagrid}'],
                '{export}',
            ]
        ],
        'options' => ['id' => null] // a unique identifier is important
    ]);

?>
