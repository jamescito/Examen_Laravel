<?php

namespace Tests\Unit;

use App\Models\Compra;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
       

    
    
    }
    public function test_delete()
    {
        $compra = Compra::delete();

        $view = $this->view('compra.index/1' );

        $view->assertSee('');
    }


    
}
