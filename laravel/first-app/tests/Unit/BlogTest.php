<?php

namespace Tests\Unit;

use App\Models\Blog;
use PHPUnit\Framework\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_all_data()
    {
        $someArr = Blog::all();
        $length = count($someArr);
        $this->assertIsArray($someArr);
        $this->assertTrue($length == 2);
    }

    public function test_get_single_data()
    {
        $someArr = Blog::find("judul-blog-kedua");
        $length = count($someArr);
        $this->assertIsArray($someArr);
        $this->assertTrue($length == 1);
    }
}
