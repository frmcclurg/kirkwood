<?php
/**
 * Demonstrate visibility of properties in multiple sub-classes
 */
class BaseClass
{
    public $public = 'Public Initial';
    protected $protected = 'Protected Initial';
    private $private = 'Private Initial';

    // class constructor
    function BaseClass() {
       $this->setProperties();
    }

    function setProperties() {
       $spacer = str_repeat( "&nbsp;", 6);

       printf( "%s Inside method %s()<br>", $spacer, __METHOD__ );
       $this->public = 'Base Public';
       $this->protected = 'Base Protected';
       $this->private = 'Base Private';  // only base class can overwrite private property
    }

    function printBase() {
       $smlSpacer = str_repeat( "&nbsp;", 6);
       $lgSpacer = str_repeat( "&nbsp;", 12);

       printf( "%s Inside method %s()<br>", $smlSpacer, __METHOD__ );
       printf( "%s \$this->public: %s<br>", $lgSpacer, $this->public );
       printf( "%s \$this->protected: %s<br>", $lgSpacer, $this->protected );
       printf( "%s \$this->private: %s<br>", $lgSpacer, $this->private );
    }
}


/**
 * Define SubClass
 */
class SubClass extends BaseClass
{
    // class constructor
    function SubClass() {
       $this->setProperties();
    }

    // public and protected properties can be redeclared, but not private
    function setProperties() {
       $spacer = str_repeat( "&nbsp;", 6);

       printf( "%s Inside method %s()<br>", $spacer, __METHOD__ );
       $this->public = 'Sub Public';
       $this->protected = 'Sub Protected';
       $this->private = 'Sub Private';  // this sub-class can't overwrite private property
    }

    function printSub() {
       $smlSpacer = str_repeat( "&nbsp;", 6);
       $lgSpacer = str_repeat( "&nbsp;", 12);

       printf( "%s Inside method %s()<br>", $smlSpacer, __METHOD__ );
       printf( "%s \$this->public: %s<br>", $lgSpacer, $this->public );
       printf( "%s \$this->protected: %s<br>", $lgSpacer, $this->protected );
       printf( "%s \$this->private: %s<br>", $lgSpacer, $this->private );  // property undefined
    }
}


/**
 * Define SubSubClass
 */
class SubSubClass extends SubClass
{
    // class constructor
    function SubSubClass() {
       $this->setProperties();
    }

    // public and protected properties can be redeclared, but not private
    function setProperties() {
       $spacer = str_repeat( "&nbsp;", 6);

       printf( "%s Inside method %s()<br>", $spacer, __METHOD__ );
       $this->public = 'Sub Sub Public';
       $this->protected = 'Sub Sub Protected';
       $this->private = 'Sub Sub Private';  // sub-class can't overwrite property
    }

    function printSubSub() {
       $smlSpacer = str_repeat( "&nbsp;", 6);
       $lgSpacer = str_repeat( "&nbsp;", 12);

       printf( "%s Inside method %s()<br>", $smlSpacer, __METHOD__ );
       printf( "%s \$this->public: %s<br>", $lgSpacer, $this->public );
       printf( "%s \$this->protected: %s<br>", $lgSpacer, $this->protected );
       printf( "%s \$this->private: %s<br>", $lgSpacer, $this->private );
    }
}

$spacer = str_repeat( "&nbsp;", 3);

printf( "<br><br> Create new BaseClass<br>" );
$base = new BaseClass();

printf( "<br><br> Call \$base->printBase();<br>" );
$base->printBase(); // Shows Public, Protected and redeclared Private

printf( "<br><br>Outside class: \$base->public = '%s'<br>", $base->public ); // works
// printf( "%s<br>", $base->protected ); // Cannot access protected property
// printf( "%s<br>", $base->private ); // Cannot access private property

printf( "<br><br> Create new SubClass<br>" );
$sub = new SubClass();

printf( "<br><br> Call \$sub->printBase();<br>" );
$sub->printBase();  // Shows Public, Protected, Private initial base value

printf( "<br><br> Call \$sub->printSub();<br>" );
$sub->printSub();

printf( "<br><br>Outside class: \$sub->public = '%s'<br>", $sub->public ); // Works
// echo $sub->protected; // Cannot access protected property
// echo $sub->private; // Cannot access private property

printf( "<br><br> Create new SubSubClass<br>" );
$subSub = new SubSubClass();

printf( "<br><br> Call \$subSub->printBase() <br>" ); // Works
$subSub->printBase(); // Shows Public, Protected, Private initial base value

printf( "<br><br> Call \$subSub->printSub() <br>" ); // Works
$subSub->printSub(); // Shows Public, Protected, Undefined

printf( "<br><br> Call \$subSub->printSubSub() <br>" ); // Works
$subSub->printSubSub(); // Shows Public, Protected, Undefined

printf( "<br><br> Outside class: \$subSub->public = '%s'<br>", $subSub->public ); // Works
// echo $subSub->protected; // Cannot access protected property
// echo $subSub->private; // Cannot access private property

?>
