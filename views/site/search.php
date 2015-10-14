<?php
use yii\helpers\Html;

$this->title = 'Search Results | '.Yii::$app->name;
$this->params['breadcrumbs'][] = 'Search Results';

function word_limiter($string, $number_of_words)
{
    $words = explode(' ', $string);
    $endPixels = count($words)>$number_of_words ? ' ..' : '';
    return strip_tags(implode(' ', array_slice($words, 0, $number_of_words)).$endPixels);
}
?>
    <h1>Search Results</h1>
    <style type="text/css">
        .founded{background-color: #ffff00;}
        .search-result{color: #444;
            margin-bottom: 24px;}
        .search-result .title a{font-size: 17px;}
    </style>
<?php
if($page)
    foreach($page as $result)
    {
        ?>
        <div class="search-result" >
            <div class="title"><?=Html::a($result['title'], ['/page/view','id'=>$result['id']]);?></div>
            <?php
            $text=word_limiter($result['content'],50);
            $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
            echo $text;?>
        </div>
    <?php
    }
    if($undergrads)
    {
        foreach($undergrads as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/undergraduate/view','id'=>$result['id']]);?> | Undergraduate Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($business)
    {
        foreach($business as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/business/view','id'=>$result['id']]);?> | Business Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($law){
        foreach($law as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/law/view','id'=>$result['id']]);?> | Law Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($dental){
        foreach($dental as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/dental/view','id'=>$result['id']]);?> | Dental Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($nursing){
        foreach($nursing as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/nursing/view','id'=>$result['id']]);?> | Nursing Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($medical){
        foreach($medical as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/medical/view','id'=>$result['id']]);?> | Medical Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($optometry){
        foreach($optometry as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/optometry/view','id'=>$result['id']]);?> | Optometry Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($physical){
        foreach($physical as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/physical/view','id'=>$result['id']]);?> | Physical Therapy Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($engineering){
        foreach($engineering as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/engineering/view','id'=>$result['id']]);?> | Engineering Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($pharmacy){
        foreach($pharmacy as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/pharmacy/view','id'=>$result['id']]);?> | Pharmacy Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($occupational){
        foreach($occupational as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['name'], ['/occupational/view','id'=>$result['id']]);?> | Occupational Therapy Schools</div>
                <?php
                $text=word_limiter($result['about'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($announcement){
        foreach($announcement as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['title'], ['/announcement/view','id'=>$result['id']]);?></div>
                <?php
                $text=word_limiter($result['description'],50);
                $text=preg_replace("/{$_POST['search']}/i", "<span class='founded' >{$_POST['search']}</span>", $text);
                echo $text;?>
            </div>
        <?php
        }
    }
    if($users){
        foreach($users as $result)
        {
            ?>
            <div class="search-result" >
                <div class="title"><?=Html::a($result['username'], ['/user/view','id'=>$result['id']]);?></div>
                <?=$result['city'].", ".$result['state'];?>
            </div>
        <?php
        }
    }

    if(!$page && !$undergrads && !$business && !$law && !$dental && !$nursing && !$medical
        &&!$optometry && !$physical && !$engineering && !$pharmacy && !$occupational&& !$announcement&& !$users) echo 'Nothing has been found by your request.';
?>