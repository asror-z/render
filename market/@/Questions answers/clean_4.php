<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search in list</title>

<script src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>

</head>
<body>

<div class="ui container">
    <div class="column">
        <div class="ui input focus">
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <div class="column">
        <ul class="ui middle aligned selection list">
            <li class="item">

                <div class="content">
                    <div class="header">
                        </div>
                </div>
            </li>
            <li class="item">

                <div class="content">
                    <div class="header"><p>
                            rtuyyjquery.min.js: 2 Uncaught TypeError: Bootstrap's tooltips require Popper.js
                        </p></div>
                </div>
            </li>
            <li class="item">

                <div class="content">
                    <div class="header"><p>
                            fkgimjquery.min.js: tttiii 2 Uncaught TypeError: Bootstrap's tooltips require Popper.js
                        </p></div>
                </div>
            </li>
            <li class="item">

                <div class="content">
                    <div class="header"><p>
                            dfvdvjquery.min.js: 2 Uncaught TypeError: Bootstrap's tooltips require Popper.js
                        </p></div>
                </div>
            </li>
            <li class="item">

                <div class="content">
                    <div class="header"><p>
                            sdfbsf.min.js: 2 Uncaught TypeError: Bootstrap's tooltips require Popper.js
                        </p></div>
                </div>
            </li>

        </ul>
    </div>

    <!--  <div class="column">
          <div class="ui input focus">
              <input type="text" placeholder="Search...">
          </div>
      </div>-->

</div>

<div class="container">
    <div class="row">
        <div class="col-2 d-flex flex-column justify-content-center align-items-center">
             <button id="upvote" class="bg-white border-0"">
                 <i class="fas fa-arrow-circle-up"></i>
             </button>
            <div id="votes d-flex flex-column">
                <span>10</span>
                <span>
                    votes
                </span>
            </div>
            <button id="downvote" class="bg-white border-0" onclick="downvote()">
                <i class="fas fa-arrow-circle-down"></i>
            </button>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-2">
                    Question:
                </div>
                <div class="col-10">
                    <a>
                        How heavy of items will this pick up....my son wants this to pick up his tiny aliens from Toy Story but wondering if they will be too heavy.
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Answers:
                </div>
                <div class="col-10 answers">
                    <p class="showMoreContent">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                    </p>

                    <div class="showmore">
                        <p class="showMoreContent">
                            It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                        </p>
                        <p class="showMoreContent">
                            It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                        </p>
                        <p class="showMoreContent">
                            It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                        </p>
                        <p class="showMoreContent">
                            It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                        </p>
                        <p class="showMoreContent">
                            It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                        </p>
                    </div>
                    <button class="showMoreBtn">
                        Show all answers
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".showmore").hide();
    $(".showMoreBtn").click(function () {
        $(".showmore").hide()
    })

</script>
<script>
    $('.showMoreContent').shorten({
        moreText: 'show more',
        lessText: 'show less',
        showChars: 150,
    });
</script>

</body>
</html>
