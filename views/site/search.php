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
if($results)
    foreach($results as $result)
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
else
    echo Yii::t('dictionary', 'Nothing has been found by your request.')
?>