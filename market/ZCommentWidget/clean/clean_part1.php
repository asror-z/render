<?php

use zetsoft\widgets\inputes\ZKStarRatingWidget; ?>


<div class="comment border-left pl-3 mt-1">
    <div class="comment-box-header d-flex align-items-center">
        <div class="reply-comment-box-image">
            <img class="rounded-circle" src="http://placekitten.com/50/50"/>
        </div>
        <div class="reply-comment-box-title ml-1 d-flex flex-column">
            <span class="fe-15">Shoxruh</span>
            <div class="">
                <?
                echo ZKStarRatingWidget::widget([
                    'name' => 'gggfg',
                    'config' => [
                        'show' => false
                    ]
                ]);
                ?>
            </div>
        </div>
        <p class="question mt-2 ml-1 w-25 align-self-start font-weight-bold text-truncate">
            I'm not satisfied from the quality of product
        </p>
        <span class="fe-08 font-weight-normal align-self-start mt-1 ml-auto">on March 5th, 2014</span>
    </div>
    <div class="commentText d-flex flex-column justify-content-between">
        <p class="comment-box-text">
            I was very pleased with the quality of the product as I received it. But
            after about one week of charging it became intermittent for a couple of days and then
            stopped working
        </p>
        <div class="d-flex button-links align-items-center">
            <button class="rounded btn-outline-inverse shadow-none reply-btn bg-white mr-3">
                <i class="fas fa-reply mr-1"></i> <span>reply</span>
            </button>
            <a href="#" class="like text-black-50">
                <i class="fas fa-thumbs-up mr-1"></i>
                <span class="text-black-50">15</span>
            </a>
            <a href="#" class="dislike ml-4 text-muted">
                <i class="fas fa-thumbs-down mr-1"></i>
                <span class="text-black-50">10</span>
            </a>
        </div>
        <div class="hidden-reply-box w-75 d-none">
            <div class="d-flex">
                <div class="comment-text-input w-75">
                    <input class="form-control w-100 rounded-pill reply-comment-text-input" type="text" placeholder="Your comments"/>
                </div>
                <div class="w-25 add-btn">
                    <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
