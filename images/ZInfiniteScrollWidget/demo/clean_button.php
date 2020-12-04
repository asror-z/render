<!doctype html>
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>-->
<body>
<h1>Infinite Scroll - button</h1>

<style>
    body {
        font-family: sans-serif;
        line-height: 1.4;
        font-size: 18px;
        padding: 20px;
        padding-bottom: 200px;
        max-width: 640px;
        margin: 0 auto;
    }

    .post {
        border-top: 1px solid #DDD;
        margin: 60px 0;
    }

    .post img {
        display: block;
        max-width: 100%;
    }

    button {
        font-size: 20px;
        padding: 10px 20px;
        border-radius: 5px;
        background: #CCC;
        border: none;
    }

    .page-load-status {
        display: none; /* hidden by default */
        padding-top: 20px;
        border-top: 1px solid #DDD;
        text-align: center;
        color: #777;
    }

</style>

<div class="container">
    <article class="post">
        <h1>1a - Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris nec sapien efficitur, sit amet varius est interdum. Curabitur quis sem felis. Curabitur at quam sit amet mi tempor tristique quis in lorem. Cras id felis sit amet erat accumsan ornare.</p>
        <p><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange-tree" /></p>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        <p>Nullam vel odio nec turpis consequat iaculis at ut nibh. Nulla interdum lacus vitae sapien porttitor congue sagittis ac felis.Curabitur in ligula porttitor, varius purus sed, elementum nibh. Nunc ut libero posuere.</p>
    </article>
    <article class="post">
        <h1>1b - Ullamcorper quam at</h1>
        <p>Ullamcorper quam at, hendrerit eros. Mauris quis vehicula enim.</p>
        <p><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose"></p>
        <p>Duis elementum nisi tortor, ut elementum quam mattis condimentum. Aenean vitae massa sit amet ligula sollicitudin venenatis. Praesent ultrices laoreet hendrerit. Duis tempus ullamcorper enim, ac volutpat augue faucibus sit amet.</p>
        <p>Donec at consequat elit. Suspendisse dignissim ante vitae urna rutrum cursus. Morbi finibus semper facilisis. In varius sem ut turpis molestie volutpat. Duis ut posuere est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis malesuada placerat luctus. In eget feugiat sapien. Sed gravida ultrices accumsan.</p>
        <p>In nec ex at mi scelerisque malesuada.</p>
        <p>Nullam arcu diam, mollis sit amet condimentum et, finibus in ex. Morbi bibendum magna vel tortor fringilla efficitur. Aliquam sed lectus lacus.</p>
    </article>
    <article class="post">
        <h1>1c - Orci varius natoque penatibus et magnis dis parturient montes</h1>
        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius turpis ipsum, et porta eros eleifend ullamcorper. Sed arcu nisl, rhoncus porta fermentum in, eleifend non dolor.</p>
        <p>Mauris sagittis a lectus eu fringilla. Maecenas varius cursus aliquam.</p>
        <p>Suspendisse maximus congue augue eu venenatis. Aliquam urna purus, suscipit ut purus vel, iaculis rhoncus nulla. Donec a velit elementum, pellentesque metus blandit, lacinia erat. Fusce pulvinar mattis erat ac efficitur. Pellentesque aliquam eleifend ligula, eu ullamcorper elit pretium sit amet.</p>
        <p>Praesent placerat eros sem, vel pretium libero pharetra nec. Morbi hendrerit eleifend commodo. Morbi sodales nunc purus, consequat eleifend nulla dignissim non.</p>
    </article>
    <article class="post">
        <h1>1d - Donec a urna in turpis maximus</h1>
        <p>Donec a urna in turpis maximus faucibus a nec mauris.</p>
        <p>Donec iaculis, justo a egestas venenatis, dui nisl faucibus urna, sit amet condimentum quam dui ut libero. Etiam aliquet urna quis nisi aliquam, vitae tincidunt est feugiat.</p>
        <p>Integer viverra at arcu quis faucibus. Praesent nec venenatis odio. Donec non mattis massa, quis vestibulum leo. Etiam eleifend diam ac magna egestas aliquam. Sed vulputate risus eget efficitur auctor. Mauris aliquam ac purus at semper. Praesent vulputate hendrerit eros, vitae semper turpis venenatis et. Proin et est felis. Etiam sem risus, elementum id cursus quis, laoreet quis orci. Cras eget fermentum lorem, vitae pharetra augue. Etiam tincidunt nulla faucibus, egestas lacus sed, semper metus.</p>
    </article>
</div>

<div class="page-load-status">
    <div class="loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
    </div>
    <p class="infinite-scroll-last">End of content</p>
    <p class="infinite-scroll-error">No more pages to load</p>
</div>



<p>
    <button class="view-more-button">View more</button>
</p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>


<script>
    //-------------------------------------//
    // hack CodePen to load pens as pages
    
        
          var nextPenSlugs = [
        '3d9a3b8092ebcf9bc4a72672b81df1ac',
        '2cde50c59ea73c47aec5bd26343ce287',
        'd83110c5f71ea23ba5800b6b1a4a95c4',
    ];

    function getPenPath() {
        var slug = nextPenSlugs[this.loadCount];
        if ( slug ) {
            return 'render/images/ZInfiniteScrollWidget/clean/demo/cleanMirshod2_variable_path.php' + slug;
        }
    }

    //-------------------------------------//
    // init Infinite Scroll

    $('.container').infiniteScroll({
        path: getPenPath,
        append: '.post',
        button: '.view-more-button',
        // using button, disable loading on scroll
        scrollThreshold: false,
        status: '.page-load-status',
    });

</script>
</body>
</html>
