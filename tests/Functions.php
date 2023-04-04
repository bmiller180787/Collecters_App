<?php

require_once '../tests/Functions.php';

use PHPUnit\Framework\TestCase;

class Functions
{
    public function testReturnHtml_GivenTestArrayReturnString()
    {
        $array = ['name','sci_name','leaf_type','leaf_colour','flower_colour','image','id'];
        $expected = '<div class="card">'
            . '<div><img src="image" alt="A name"></div>'
            . '<h2>name</h2>'
            . '<p>sci_name</p>'
            . '</div>';

        $result = returnHtmlFromArray($array);

        $this->assertEquals($expected,$result);
    }
}