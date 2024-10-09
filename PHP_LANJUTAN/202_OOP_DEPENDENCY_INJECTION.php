<?php 

Class Foo 
{
    function foo()
    {
        return "Foo";
    }
}

Class Bar 
{
    // public Foo $foo;

    // public function __construct($foo)
    // {
    //     $this->foo = $foo;
    // }

    public function __construct(
        protected Foo $foo,
    )
    {
        // php 8
    }

    public function bar()
    {
        return $this->foo->foo() . " and Bar";
    }
}

$foo = new Foo;
$bar = new Bar($foo);

echo $foo->foo() . PHP_EOL;
echo $bar->bar();
