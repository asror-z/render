$(document).ready(function () {
    $('.reply-btn').on("click", function () {
        var parent = $(this).parent('.button-links');
        var form = parent.next('.hidden-reply-box');
        parent.removeClass('d-flex');
        parent.addClass('d-none');
        form.removeClass('d-none');
    })
    $(document).mouseup(function (e) {
        var container = new Array();
        container.push($('.hidden-reply-box'));

        $.each(container, function (key, value) {
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
    $('.add-comment-btn').one("click", function () {
        var replyParent = $(this).parent('.add-btn');
        var replyTextParent = replyParent.prev('.comment-text-input');
        var replyTextChild = replyTextParent.children('.reply-comment-text-input').val();
        console.log(replyTextChild);
        var hiddenBox = replyParent.parents('.hidden-reply-box:first');
        var replyComment = hiddenBox.next('.reply-comment');
        var replyCommentList = replyComment.children('.list-group');
        //replyCommentList.("<li class='list-group-item text-success border-0'>" + replyTextChild + "</li>")
        replyCommentList.append("<li class='list-group-item border-0'>" +
            "<div class='reply-comment-box-header d-flex align-items-center'>" +
            "<div class='reply-comment-box-image'>" +
            "<img class='rounded-circle' src='http://placekitten.com/50/50' />" +
            "</div>" +
            "<div class='reply-comment-box-title ml-1 d-flex flex-column'>" +
            "<span>Shoxruh</span>" +
            "<span class='fe-08 font-weight-light'>on March 5th, 2014</span>" +
            "</div></div>" +
            "<p class='reply-comment-box-text'>" + replyTextChild + "</p></li>");
    })
})
var check = true;
function dislike_data(id) {

    $.ajax({
        method: 'GET',
        url: '/core/product/dislike.aspx',
        data: {
            id
        },
        success: function (data) {
            check = true;
            $('#text-dislike-' + id).html(data);

        }
    });

}

function like_data(id) {

    $.ajax({
        method: 'GET',
        url: '/core/product/like.aspx',
        data: {
            id
        },
        success: function (data) {
            check = true;
            $('#text-like-' + id).html(data);

        }
    });

}
function add_like(id) {
    if(check) {
        check = false;
        if (($('#like-element-' + id).hasClass('text-muted')) &&
            ($('#dislike-element-' + id).hasClass('text-muted'))) {

            like_data(id);

            $('#like-element-' + id).removeClass('text-muted');
            $('#like-element-' + id).addClass('text-success');

        } else if (($('#like-element-' + id).hasClass('text-muted')) && ($('#dislike-element-' + id).hasClass('text-success'))) {

            dislike_data(id);
            like_data(id);


            $('#like-element-' + id).removeClass('text-muted');
            $('#like-element-' + id).addClass('text-success');
            $('#dislike-element-' + id).removeClass('text-success');
            $('#dislike-element-' + id).addClass('text-muted');
        } else if (($('#like-element-' + id).hasClass('text-success')) && ($('#dislike-element-' + id).hasClass('text-muted'))) {

            like_data(id);

            $('#like-element-' + id).removeClass('text-success');
            $('#like-element-' + id).addClass('text-muted');
        }
    }
}


function dis_like(id) {
    if(check) {
        check = false;
        if (($('#like-element-' + id).hasClass('text-muted')) &&
            ($('#dislike-element-' + id).hasClass('text-muted'))) {

            dislike_data(id);

            $('#dislike-element-' + id).removeClass('text-muted');
            $('#dislike-element-' + id).addClass('text-success');

        } else if (($('#dislike-element-' + id).hasClass('text-muted')) && ($('#like-element-' + id).hasClass('text-success'))) {

            dislike_data(id);
            like_data(id);

            $('#dislike-element-' + id).removeClass('text-muted');
            $('#dislike-element-' + id).addClass('text-success');
            $('#like-element-' + id).removeClass('text-success');
            $('#like-element-' + id).addClass('text-muted');
        } else if (($('#dislike-element-' + id).hasClass('text-success')) && ($('#like-element-' + id).hasClass('text-muted'))) {

            dislike_data(id);

            $('#dislike-element-' + id).removeClass('text-success');
            $('#dislike-element-' + id).addClass('text-muted');
        }
    }
}




