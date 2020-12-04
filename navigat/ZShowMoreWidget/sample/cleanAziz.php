<style>



    a:visited {
        color: #0254EB
    }
    a.morelink {
        text-decoration:none;
        outline: none;
    }
    .morecontent span {
        display: none;
    }
    .comment {
        width: 400px;
        background-color: #f0f0f0;
        margin: 10px;
    }
</style>

<br/>

<div class="comment">
    consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.
</div>




<div class="comment-small">
    <a href="http://foo/bar/someverylongtextwithfoofoofoofoo">foo</a> bar
</div>

<script language="javascript">
    $(document).ready(function() {

        $(".comment").shorten();

        $(".comment-small").shorten({

            "showChars": "200",
            "moreText"	: "See More",
            "lessText"	: "Less",
            "ellipsesText": "..."
            });

    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>

