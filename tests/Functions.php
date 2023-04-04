<?php

require_once '../functions.php';
require_once '../tree.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testReturnHtml_GivenTestArrayReturnString()
    {
        $array = [new Tree('name', 'sci_name','leaf_type','leaf_colour','flower_colour','image')];


        $expected = '<div class="card">'
            . '<div><img src="image" alt="A name"></div>'
            . '<h2>name</h2>'
            . '<p>sci_name</p>'
            . '</div>';

        $result = returnHtmlFromArray($array);

        $this->assertEquals($expected,$result);
    }

    public function testReturnHtml_GivenTypeArrayReturnTypeString()
    {
        $array = [new Tree('name', 'sci_name','leaf_type','leaf_colour','flower_colour','image')];

        $testResult = returnHtmlFromArray($array);

        $this->assertIsString($testResult,'Is a stringor not');
    }

    public function testReturnHtml_GivenErrorTypeReturnException()
    {
        $array = ['name', 'sci_name','leaf_type','leaf_colour','flower_colour','image'];

        $result = returnHtmlFromArray($array);
        $expected = 'Incorrect Data Supplied';

        $this->assertEquals($expected,$result);
    }
}
