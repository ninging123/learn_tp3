<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function pull(){
        $shell = "cd /www/wwwroot/learn_tp3/ && pwd && sudo git pull 2>&1";
        exec($shell,$out);
        if ($this->rmm($out) == False){
            echo 4;
            echo '<pre>';
            print_r($out);
        };
        echo 5;
    }
    public function p(){
        echo '2';
    }
    private function rmm($array = array()){
        $is = False;
        if ($array != ''){
            foreach ($array as $k=>$v){
                echo '1';
                if (strpos($v,'error') !== false){
                    echo 2;
                    $err = $k + 1;
                    $exec = 'rm -rf '.trim($array[0]).'/'.trim($array[$err]);
                    exec($exec);
                    $this->pull();
                    echo 3;
                    $is = True;
                    break;
                }
            }
        }
        return $is;

    }
}