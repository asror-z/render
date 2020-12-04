<?

use zetsoft\system\Az;
use zetsoft\widgets\market\ZMenuWidget;
$category = Az::$app->market->category->generateDBMenuItems();
//vdd($category);
?>


<div class="container">
    <div class="row">
    <? foreach (array_slice($category, 0, 12)  as $key => $value) {?>
        <div class="col-2 px-2 d-flex border category-name">
            <a class="p-1 text-decoration-none d-flex category-text d-flex align-items-center" href="#third">
                <i class="fas fa-2x fa-heart"></i>
                <h5 class="px-2 mb-0 fe-12"><?= $value->label?></h5>
            </a>
        </div>
    <? } ?>


    </div>
    






    <div id="first" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="second" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="fourth" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <!--<div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>
            <div class="col-3">
                <a href="#" class="text-muted">Платья</a>
            </div>

        </div>
    </div>
    <div id="third" class="category-list border-bottom py-3 px-5 my-4">
        <h3 id="id">Odejda</h3>
        <div class="row">
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
            <div class="col-3">
                <a href="#">Платья</a>
            </div>
        </div>
    </div>-->



</div>
<script>
    $(document).ready(function () {
        $('.category-name').on("click", function () {
            $(this).addClass('border-success');
            var categoryText = $(this).children('.category-text');
            categoryText.addClass('text-success')
        })
    })
</script>


