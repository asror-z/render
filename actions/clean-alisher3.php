
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .content {
            min-height: 100%;
        }
        .content-inside {
            padding: 20px;
            padding-bottom: 50px;
        }
        .footer {
            height: 50px;
            margin-top: -50px;
        }

        body {
            font: 16px Sans-Serif;
        }
        h1 {
            margin: 0 0 20px 0;
        }
        p {
            margin: 20px 0 0 0;
        }
        footer {
            background: #42A5F5;
            color: white;
            line-height: 50px;
            padding: 0 20px;
        }
    </style>
</head>
<body>

<div class="content">
    <div class="content-inside">
        <h1>Sticky Footer with Negative Margin 2</h1>
        <p><button id="add">Add Content</button></p>
    </div>
</div>

<footer class="footer">
    Footer
</footer>
<script src="https://code.jquery.com/jquery-2.2.4.min.js
"></script>
<script>
    // Not required!
    // This is just to demo functionality.

    $("#add").on("click", function() {
        $("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".content-inside");
    });
</script>
</body>
</html>
