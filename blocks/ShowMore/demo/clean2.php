<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>


<style>


    a {
        color: #0254EB
    }
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
    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit. Vestibulum laoreet, <i>nunc eget laoreet sagittis, quam ligula</i></strong> sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit. Donec.
</div>
<div class="comment">
    Duis nisl nibh, egestas at fermentum at, viverra et purus. Maecenas lobortis odio id sapien facilisis elementum. Curabitur et magna justo, et gravida augue. Sed tristique pellentesque arcu quis tempor.
</div>
<div class="comment">
    consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.
</div>


<div class="comment"><br>Duisds nisl nibh, egestas at fermentum at, viverra et purus. Maecenas lobortis odio id sapien facilisis elementum.  <img alt="chicken" src="http://img.smileys.nl/466/chicken.gif">Curabitur et magna justo, et gravida augue. Sed tristique pellentesque arcu quis tempor.
</div>


<div class="comment-small">
    <a href="http://foo/bar/someverylongtextwithfoofoofoofoo">foo</a> bar
</div>

<script language="javascript">
    $(document).ready(function() {

        $(".comment").shorten();

        $(".comment-small").shorten({

            "showChars": "350",
            "moreText"  : "See More",
            "lessText"  : "Less",
            "ellipsesText": "...",

        });

    });
</script>
