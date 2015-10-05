<?php
namespace app\components;

use yii\base\BootstrapInterface;
use Yii;

class DynamicUrl implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $db=Yii::$app->db;
        $result = $db->cache(function ($db) {
            return $db->createCommand("SELECT id,slug FROM pages")->queryAll();
        },3600);
        $rules=array();
        foreach($result as $page){
            $rules[$page['slug'].'/<id:'.$page['id'].'>'] = 'page/view';
        }
     $app->getUrlManager()->addRules($rules,false);
    }
}