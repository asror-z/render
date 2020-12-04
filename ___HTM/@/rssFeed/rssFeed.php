<!DOCTYPE html>

<html>
<head>
    <title>
        RSS Feed
    </title>

    <style>
        .content{
            width: 60%;
            margin: 0 auto;
        }

        input[type=text]{
            padding: 5px 10px;
            width: 60%;
            letter-spacing: 1px;
        }

        input[type=submit]{
            padding: 5px 15px;
            letter-spacing: 1px;
            border: 0;
            background: gold;
            color: white;
            font-weight: bold;
            font-size: 17px;
        }

        h1{
            border-bottom: 1px solid gray;
        }

        h2{
            color: black;
        }
        h2 a{
            color: black;
            text-decoration: none;
        }

        .post{
            border: 1px solid gray;
            padding: 5px;
            border-radius: 3px;
            margin-top: 15px;
        }

        .post-head span{
            font-size: 14px;
            color: gray;
            letter-spacing: 1px;
        }

        .post-content{
            font-size: 18px;
            color: black;
        }


    </style>
</head>

<body>





<div class="content">

    <form method="post" action="">
        <input type="text" name="feedurl" placeholder="Enter website feed URL">&nbsp;<input type="submit" value="Submit" name="submit">
    </form>
    <?php

    $url = "https://makitweb.com/feed/";
    if(isset($_POST['submit'])){
        if($_POST['feedurl'] != ''){
            $url = $_POST['feedurl'];
        }
    }

    $invalidurl = false;
    if(@simplexml_load_file($url)){
        $feeds = simplexml_load_file($url);
    }else{
        $invalidurl = true;
        echo "<h2>Invalid RSS feed URL.</h2>";
    }


    $i=0;
    if(!empty($feeds)){

        $site = $feeds->channel->title;
        $sitelink = $feeds->channel->link;

        echo "<h1>".$site."</h1>";
        foreach ($feeds->channel->item as $item) {

            $title = $item->title;
            $link = $item->link;
            $description = $item->title;
            $postDate = $item->pubDate;
            $pubDate = date('D, d M Y',strtotime($postDate));


            if($i>=5) break;
            ?>
            <div class="post">
                <div class="post-head">
                    <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                    <span><?php echo $pubDate; ?></span>
                </div>
                <div class="post-content">
                    <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Read more</a>
                </div>
            </div>

            <?php
            $i++;
        }
    }else{
        if(!$invalidurl){
            echo "<h2>No item found</h2>";
        }
    }
    ?>
</div>






<?php
/*public function actionRss()
{
    $dataProvider = new ActiveDataProvider([
        'query' => Post::find()->with(['user']),
        'pagination' => [
            'pageSize' => 10
        ],
    ]);

    $response = Yii::$app->getResponse();
    $headers = $response->getHeaders();

    $headers->set('Content-Type', 'application/rss+xml; charset=utf-8');

    echo \Zelenin\yii\extensions\Rss\RssView::widget([
        'dataProvider' => $dataProvider,
        'channel' => [
            'title' => function ($widget, \Zelenin\Feed $feed) {
                    $feed->addChannelTitle(Yii::$app->name);
            },
            'link' => Url::toRoute('/', true),
            'title' => 'Posts ',
            'language' => function ($widget, \Zelenin\Feed $feed) {
                return Yii::$app->language;
            },
            'image'=> function ($widget, \Zelenin\Feed $feed) {
                $feed->addChannelImage('http://example.com/channel.jpg', 'http://example.com', 88, 31, 'Image title');
            },
        ],
        'items' => [
            'title' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return $model->name;
                },
            'title' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return StringHelper::truncateWords($model->content, 50);
                },
            'link' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return Url::toRoute(['post/view', 'id' => $model->id], true);
                },
            'author' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return $model->user->email . ' (' . $model->user->username . ')';
                },
            'guid' => function ($model, $widget, \Zelenin\Feed $feed) {
                    $date = \DateTime::createFromFormat('Y-m-d H:i:s', $model->updated_at);
                    return Url::toRoute(['post/view', 'id' => $model->id], true) . ' ' . $date->format(DATE_RSS);
                },
            'pubDate' => function ($model, $widget, \Zelenin\Feed $feed) {
                    $date = \DateTime::createFromFormat('Y-m-d H:i:s', $model->updated_at);
                    return $date->format(DATE_RSS);
                }
        ]
    ]);
}
*/?>
</body>




</html>
