<?php
/**
 * Created by PhpStorm.
 * User: huangfs
 * Date: 2020/1/4
 * Time: 19:24
 */
/**
 * \HomeController
 */
class HomeController extends BaseController
{
    public function home()

    {
        $this->view = View::make('home')->with('article',Article::first())
            ->withTitle('MFFC :-D')
            ->withFuckMe('OK!');
        $this->mail = Mail::to(['2321580693@qq.com'])

            ->from('MotherFucker <1213885869@qq.com>')

            ->title('Fuck Me!')

            ->content('<h1>Hello~~</h1>');
            //phpinfo();
        Redis::set('key1','value1');

        echo Redis::get('key1');
    }
}