<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testStatusCode()
    {
        // /homeにGETアクセス
        $responce = $this->get('/home');
        // ステータスコードが200を確認
        $responce->assertStatus(200);
    }

    public function testBody()
    {
        // /homeにGETアクセス
        $response = $this->get('/home');
        // assertSeeText 指定した文字列がレスポンステキストに含まれていることをアサート。
        // 「こんにちは！」がHTTPレスポンスにあるか確認
        $response->assertSeeText("こんにちは！");
    }

}
