<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;

?>


<div class="detailBox w-75 border m-3">
    <div class="titleBox p-2">
        <label class="m-0 text-secondary">Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>

    <div class="actionBox border p-2">
        <ul style=" list-style: none;" class="commentList overflow-auto p-0">
            <li class="m-0 mt-2 pb-1">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="http://placekitten.com/50/50"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">
                    
                       
                        <div class="d-flex justify-content-between">
                            <p class="m-0 ">Shoxruh</p>
                            <div class="d-flex">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="m-0 ml-2 font-weight-bold">lorem ipsum takoy delaw</p>
                            </div>
                        </div>
                        <p class="comment w-75">I was very pleased with the quality of the product as I received it. But
                            after about one week of charging it became intermittent for a couple of days and then
                            stopped working.</p>

                        <div class="d-flex button-links align-items-center">
                            <button class="rounded btn-outline-primary reply-btn bg-white mr-3">
                                <i class="fas fa-reply mr-1"></i> <span>reply</span>
                            </button>
                            <a href="#" class="like">
                                <i class="fas fa-thumbs-up mr-1"></i>
                                <span>15</span>
                            </a>
                            <a href="#" class="dislike ml-4">
                                <i class="fas fa-thumbs-down mr-1"></i>
                                <span>10</span>
                            </a>
                        </div>
                        <form class="form-inline hidden-reply-box d-none" role="form">
                            <div class="form-group w-75">
                                <input class="form-control w-100" type="text" placeholder="Your comments"/>
                            </div>
                            <div class="form-group w-25">
                                <button class="btn btn-default w-100">Add</button>
                            </div>
                        </form>

                    </div>
                    <span class="date text-dark fe-10 float-right">on March 5th, 2014</span>

                </div>
            </li>
            <li class="m-0 mt-2 pb-1">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="http://placekitten.com/50/50"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">


                        <div class="d-flex justify-content-between">
                            <p class="m-0 ">Shoxruh</p>
                            <div class="d-flex">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="m-0 ml-2 font-weight-bold">lorem ipsum takoy delaw</p>
                            </div>
                        </div>
                        <p class="comment w-75">I was very pleased with the quality of the product as I received it. But
                            after about one week of charging it became intermittent for a couple of days and then
                            stopped working.</p>

                        <div class="d-flex button-links align-items-center">
                            <button class="rounded btn-outline-primary reply-btn bg-white mr-3">
                                <i class="fas fa-reply mr-1"></i> <span>reply</span>
                            </button>
                            <a href="#" class="like">
                                <i class="fas fa-thumbs-up mr-1"></i>
                                <span>15</span>
                            </a>
                            <a href="#" class="dislike ml-4">
                                <i class="fas fa-thumbs-down mr-1"></i>
                                <span>10</span>
                            </a>
                        </div>
                        <form class="form-inline hidden-reply-box d-none" role="form">
                            <div class="form-group w-75">
                                <input class="form-control w-100" type="text" placeholder="Your comments"/>
                            </div>
                            <div class="form-group w-25">
                                <button class="btn btn-default w-100">Add</button>
                            </div>
                        </form>

                    </div>
                    <span class="date text-dark fe-10 float-right">on March 5th, 2014</span>

                </div>
            </li>
            <li class="m-0 mt-2 pb-1">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="http://placekitten.com/50/50"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">


                        <div class="d-flex justify-content-between">
                            <p class="m-0 ">Shoxruh</p>
                            <div class="d-flex">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="m-0 ml-2 font-weight-bold">lorem ipsum takoy delaw</p>
                            </div>
                        </div>
                        <p class="comment w-75">I was very pleased with the quality of the product as I received it. But
                            after about one week of charging it became intermittent for a couple of days and then
                            stopped working.</p>

                        <div class="d-flex button-links align-items-center">
                            <button class="rounded btn-outline-primary reply-btn bg-white mr-3">
                                <i class="fas fa-reply mr-1"></i> <span>reply</span>
                            </button>
                            <a href="#" class="like">
                                <i class="fas fa-thumbs-up mr-1"></i>
                                <span>15</span>
                            </a>
                            <a href="#" class="dislike ml-4">
                                <i class="fas fa-thumbs-down mr-1"></i>
                                <span>10</span>
                            </a>
                        </div>
                        <form class="form-inline hidden-reply-box d-none" role="form">
                            <div class="form-group w-75">
                                <input class="form-control w-100" type="text" placeholder="Your comments"/>
                            </div>
                            <div class="form-group w-25">
                                <button class="btn btn-default w-100">Add</button>
                            </div>
                        </form>

                    </div>
                    <span class="date text-dark fe-10 float-right">on March 5th, 2014</span>

                </div>
            </li>

        </ul>
        <form class="form-inline" role="form">
            <div class="form-group w-75">
                <input class="form-control w-100" type="text" placeholder="Your comments"/>
            </div>
            <div class="form-group w-25">
                <button class="btn btn-default w-100">Add</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('.reply-btn').on("click", function () {
            var parent = $(this).parent('.button-links');
            var form = parent.next('.hidden-reply-box');
            parent.removeClass('d-flex');
            parent.addClass('d-none');
            form.removeClass('d-none');
        })
        $(document).mouseup(function (event)
        {
            var container = new Array();
            container.push($('.hidden-reply-box'));

            $.each(container, function(key, value) {
                if (!$(value).is(e.target) // if the target of the click isn't the container...
                    && $(value).has(e.target).length === 0) // ... nor a descendant of the container
                {
                    $(value).addClass('d-none');
                    var parent = $(this).prev('.button-links');
                    parent.addClass('d-flex');
                    parent.removeClass('d-none');

                }
            });
        });
    })
</script>
