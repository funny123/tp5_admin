<?php
/**
 * Created by 供货港.
 * User: 马凡
 * Date: 2017/12/21/021
 * Time: 17:32
 */

namespace app\index\controller;
use think\Controller;
class Demo extends Controller
{
//   public function index()
//   {
//       return 'index-demo';
//   }
   public function _initialize()
   {
       echo 'init<br/>';
   }
   public function hello()
   {
       return 'hello';
   }
   public function data()
   {
       return 'data';
   }

   public function view()
   {
       $this->assign('domain',$this->request->url(true));
       return $this->fetch('view');
   }
}