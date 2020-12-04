<?php

?>







<!--<div class="col-md-3 mb-3">
    <label for="validationTooltip04">State</label>
    <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
    </select>
    <div class="invalid-tooltip">
        Please select a valid state.
    </div>
</div>
-->
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div class="bg-white pl-0 rounded">
            <nav class="nav border border-success shadow-sm rounded w-auto">
                <span class="mt-2 mx-2">Сортировать по: </span>
                
                <a class="nav-link border-right text-success" href="#">
                    <div class="d-inline-flex">
                        по дате добавления

                    </div>
                </a>
                <a class="nav-link border-right text-success" href="#">
                    <div class="d-inline-flex">
                        от дешёвых к дорогим

                    </div>
                </a>
                <a class="nav-link border-right text-success" href="#">
                    <div class="d-inline-flex">
                        от дорогих к дешёвым

                    </div>
                </a>
            </nav>
        </div>


        <div class="">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>


<div class="d-flex justify-content-between align-items-center">
    <div class="d-flex w-50">
        <select class="browser-default custom-select mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="icons">
        <a class="border py-2 px-3" href="#"><i class="fa fa-th-list pr-1" aria-hidden="true"></i>Сравнить</a>
        <a class="border py-2 px-3" href="#"><i class="fa fa-tags" aria-hidden="true"></i></a>
        <a class="border py-2 px-3" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </div>
</div>

</div>



<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <?
        echo \zetsoft\widgets\cards\ZHCommonSaleWidget::widget([])
        ?>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <?/*
            echo \zetsoft\widgets\cards\newWidgets\ZVerticalCardWidget::widget([])
        */?>
    </div>

</div>


