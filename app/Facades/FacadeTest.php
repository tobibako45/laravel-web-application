<?php


namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class FacadeTest extends Facade
{

    // getFacadeAccessorメソッドの返り値にサービスプロバイダーで設定したキー名を指定します。
    protected static function getFacadeAccessor()
    {
        return 'chika';
    }
}
