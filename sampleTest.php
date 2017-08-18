<?php
require_once('./sample.php');
class SampleTest extends PHPUnit_Framework_TestCase {
    public function test() {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
        echo $Sample->helloWorld();
    }
}
