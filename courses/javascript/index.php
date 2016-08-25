<?php
   /**
    * @file index.php
    * @abstract Main page for JavaScript slides and code examples
    * @author Fred R. McClurg
    * @date May 25, 2014
    */
	require_once( "../../common/php/errors.php" );
	require_once( "../../common/php/bootstrapUtils.php" );
	require_once( "../../common/geshi/geshi.php" );
	require_once( "../../common/php/geshiFunct.inc.php" );

   $menu =
   array
   (
      array
      (
         "label" => "Itinerary",
         "icon" => "fa-picture-o",
         "href" => "slides/itinerary.pptx",
         "parent" => false,
      ),
      array
      (
         "label" => "Introduction",
         "icon" => "fa-picture-o",
         "href" => "slides/introduction.pptx",
         "parent" => false,
      ),
      array
      (
         "label" => "Development Tools",
         "icon" => "fa-picture-o",
         "href" => "slides/devTools.pptx",
         "parent" => false,
      ),
      array
      (
         "label" => "Browsers",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/browsers.pptx",
	         "parent" => false,
         ),
         array
      		
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "JavaScript Console Output",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/browsers/consoleLog.html&lang=JavaScript&title=Javascript Console Output",
		         "parent" => false,
            ),
         )
      ),
      array
      (
         "label" => "Design Considerations",
         "icon" => "fa-picture-o",
         "href" => "slides/design.pptx",
         "parent" => false,
      ),
      array
      (
         "label" => "Comments",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/comments.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Inline Comment",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/comments/slashSlash.html&lang=javascript&title=Inline Comment",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multi-line Comment",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/comments/slashStar.html&lang=javascript&title=Multi-line Comment",
		         "parent" => false,
            ),
            array
            (
               "label" => "Comment Disabling Code",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/comments/disableCode.html&lang=javascript&title=Comment Disabling Code",
		         "parent" => false,
            ),
         )
      ),
      array
      (
         "label" => "Code Location",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/codeLocation.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Event Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/codeLocation/eventAttribute.html&lang=javascript&title=Event Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "Internal Script",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/codeLocation/internalScript.html&lang=javascript&title=Internal Script",
		         "parent" => false,
            ),
            array
            (
               "label" => "External Script (HTML)",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/codeLocation/externalScript.php&lang=html&title=External Script (HTML)",
		         "parent" => false,
            ),
            array
            (
               "label" => "External Script (JavaScript)",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/codeLocation/js/external.js&lang=javascript&title=External Script (JavaScript)",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Variables",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/variables.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Variable Examples",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/variables/variables.html&lang=javascript&title=Variable Examples",
		         "parent" => false,
            ),
            array
            (
               "label" => "Declaring and Initializing Variables",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/variables/declare.html&lang=javascript&title=Declaring and Initializing Variables",
		         "parent" => false,
            ),
            array
            (
               "label" => "Initializing Multiple Variables",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/variables/multiInit.html&lang=javascript&title=Initializing Multiple Variables",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Numbers",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/numbers.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "JavaScript Numbers",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/numbers/numbers.html&lang=javascript&title=JavaScript Numbers",
		         "parent" => false,
            ),
            array
            (
               "label" => "Numeric Property: +/- Infinity",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/numbers/infinity.html&lang=javascript&title=Numeric Property: +/- Infinity",
		         "parent" => false,
            ),
            array
            (
               "label" => "Numeric Property: NaN",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/numbers/nan.html&lang=javascript&title=Numeric Property: NaN",
		         "parent" => false,
            ),
            array
            (
               "label" => "Math Properties &amp; Methods",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/numbers/mathPropMeth.html&lang=javascript&title=Math Properties %26 Methods",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Dates",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/dates.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Setting Today's Date",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dates/dateSetToday.html&lang=javascript&title=Setting Today's Date",
		         "parent" => false,
            ),
            array
            (
               "label" => "Setting Date via Arguments",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dates/dateSetArgs.html&lang=javascript&title=Setting Date via Arguments",
		         "parent" => false,
            ),
            array
            (
               "label" => "Setting Date via String",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dates/dateSetStr.html&lang=javascript&title=Setting Date via String",
		         "parent" => false,
            ),
            array
            (
               "label" => "Getting Date Values",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dates/dateMethods.html&lang=javascript&title=Getting Date Values",
		         "parent" => false,
            ),
            array
            (
               "label" => "Day of Week Calculator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dates/dateDowPrompt.html&lang=javascript&title=Day of Week Calculator",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Strings",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/strings.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "String Examples",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/strings.html&lang=javascript&title=String Examples",
		         "parent" => false,
            ),
            array
            (
               "label" => "Quotes within Quotes",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/quotesInQuotes.html&lang=javascript&title=Quotes within Quotes",
		         "parent" => false,
            ),
            array
            (
               "label" => "Escaping Quotes",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/escapingQuotes.html&lang=javascript&title=Escaping Quotes",
		         "parent" => false,
            ),
            array
            (
               "label" => "Concatenating Strings",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/concatStr.html&lang=javascript&title=Concatenating Strings",
		         "parent" => false,
            ),
            array
            (
               "label" => "String Type Conversion",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/strTypeConvert.html&lang=javascript&title=String Type Conversion",
		         "parent" => false,
            ),
            array
            (
               "label" => "Line Continuation",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strings/lineCont.html&lang=javascript&title=Line Continuation",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "String Properties &amp; Methods",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/strPropMeth.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "String Properties",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strPropMeth/strProp.html&lang=javascript&title=String Properties",
		         "parent" => false,
            ),
            array
            (
               "label" => "String Methods",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/strPropMeth/strMeth.html&lang=javascript&title=String Methods",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Operators",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/operators.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Basic Arithmetic Operators",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/arithOper.html&lang=javascript&title=Basic Arithmetic Operators",
		         "parent" => false,
            ),
            array
            (
               "label" => "Modulo Operator Examples",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/moduloOper.html&lang=javascript&title=Modulo Operator Examples",
		         "parent" => false,
            ),
            array
            (
               "label" => "String Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/strOper.html&lang=javascript&title=String Operator",
		         "parent" => false,
            ),
            array
            (
               "label" => "Operator Precedence",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/operOrder.html&lang=javascript&title=Operator Precedence",
		         "parent" => false,
            ),
            array
            (
               "label" => "Numeric Short Cut Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/shortOpNum.html&lang=javascript&title=Numeric Short Cut Operator",
		         "parent" => false,
            ),
            array
            (
               "label" => "String Short Cut Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/shortOpStr.html&lang=javascript&title=String Short Cut Operator",
		         "parent" => false,
            ),
            array
            (
               "label" => "Unary Operators: Increment and Decrement",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/unaryOper.html&lang=javascript&title=Unary Operators: Increment and Decrement",
		         "parent" => false,
            ),
            array
            (
               "label" => "Prefix Increment Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/prefixIncOp.html&lang=javascript&title=Prefix Increment Operator",
		         "parent" => false,
            ),
            array
            (
               "label" => "Postfix Increment Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/operators/postfixIncOp.html&lang=javascript&title=Postfix Increment Operator",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Arrays",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/arrays.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Array Declared",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrays/arrayDeclare.html&lang=javascript&title=Array Declared",
		         "parent" => false,
            ),
            array
            (
               "label" => "Element Initialization",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrays/elementInit.html&lang=javascript&title=Element Initialization",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Initialization",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrays/arrayInit.html&lang=javascript&title=Array Initialization",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multiple Element Types",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrays/multiElemTypes.html&lang=javascript&title=Multiple Element Types",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Array Methods",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/arrayMethods.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Manipulating Arrays",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/manipArray.html&lang=javascript&title=Manipulating Arrays",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: pop()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayPop.html&lang=javascript&title=Array Method: push()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: push()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayPush.html&lang=javascript&title=Array Method: push()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: shift()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayShift.html&lang=javascript&title=Array Method: shift()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: unshift()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayUnshift.html&lang=javascript&title=Array Method: unshift()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: splice()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arraySplice.html&lang=javascript&title=Array Method: splice()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: slice()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arraySlice.html&lang=javascript&title=Array Method: slice()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Method: sort()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arraySort.html&lang=javascript&title=Array Method: sort()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array 'Copy by Reference'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayCopyByRef.html&lang=javascript&title=Array 'Copy by Reference'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array 'Copy by Value'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arrayCopyByValue.html&lang=javascript&title=Array 'Copy by Value'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Methods: split(), reverse(), join()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/arrayMethods/arraySplitRevJoin.html&lang=javascript&title=Array Methods: split(), reverse(), join()",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Regular Expressions",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/regExp.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Regular Expression: test()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/regExp/regexpTest.html&lang=javascript&title=Regular Expression: test()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Regular Expression Anchors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/regExp/regexpAnchors.html&lang=javascript&title=Regular Expression Anchors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Regular Expression: match()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/regExp/regexpMatch.html&lang=javascript&title=Regular Expression: match()",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Variable Types",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/varTypes.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Dynamically Typed Variables",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varTypes/dynTypedVar.html&lang=javascript&title=Dynamically Typed Variables",
		         "parent" => false,
            ),
            array
            (
               "label" => "Determine types via typeof()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varTypes/typeofTypes.html&lang=javascript&title=Determine types via typeof()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Object Test",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varTypes/arrayObjTest.html&lang=javascript&title=Array Object Test",
		         "parent" => false,
            ),
            array
            (
               "label" => "Non-Array Object Test",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varTypes/nonArrayObjTest.html&lang=javascript&title=Non-Array Object Test",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Conditional Statements",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/conditional.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "JavaScript Booleans",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/booleans.html&lang=javascript&title=JavaScript Booleans",
		         "parent" => false,
            ),
            array
            (
               "label" => "What is true?",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/true.html&lang=javascript&title=What is true%3F",
		         "parent" => false,
            ),
            array
            (
               "label" => "What is also true?",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/trueAlso.html&lang=javascript&title=What is also true%3F",
		         "parent" => false,
            ),
            array
            (
               "label" => "What is false?",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/false.html&lang=javascript&title=What is false%3F",
		         "parent" => false,
            ),
            array
            (
               "label" => "What is also false?",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/falseAlso.html&lang=javascript&title=What is also false%3F",
		         "parent" => false,
            ),
            array
            (
               "label" => "Dialog: confirm()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/confirm.html&lang=javascript&title=Dialog: confirm()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Statement: if",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/confirmIf.html&lang=javascript&title=Statement: if",
		         "parent" => false,
            ),
            array
            (
               "label" => "One Line 'if' Statement",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/ifOneLine.html&lang=javascript&title=One Line 'if' Statement",
		         "parent" => false,
            ),
            array
            (
               "label" => "Single Statement 'if' Condition",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/ifNoCurly.html&lang=javascript&title=Single Statement 'if' Condition",
		         "parent" => false,
            ),
            array
            (
               "label" => "Statements: if &amp; else",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/confirmIfElse.html&lang=javascript&title=Statements: if %26 else",
		         "parent" => false,
            ),
            array
            (
               "label" => "Statements: if, else if, &amp; else",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/promptElseIf.html&lang=javascript&title=Statements: if, else if, %26 else",
		         "parent" => false,
            ),
            array
            (
               "label" => "Logical Operators",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/logicOp.html&lang=javascript&title=Logical Operators",
		         "parent" => false,
            ),
            array
            (
               "label" => "Logic Operator Precedence",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/logicOpMulti.html&lang=javascript&title=Logic Operator Precedence",
		         "parent" => false,
            ),
            array
            (
               "label" => "Logical Equivalence",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/logicEquiv.html&lang=javascript&title=Logical Inverse",
		         "parent" => false,
            ),
            array
            (
               "label" => "Nesting 'if' Statements",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/nestedIf.html&lang=javascript&title=Nesting 'if' Statements",
		         "parent" => false,
            ),
            array
            (
               "label" => "Conditional: if and && (AND)",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/ifAnd.html&lang=javascript&title=Conditional: if and %26%26 (AND)",
		         "parent" => false,
            ),
            array
            (
               "label" => "Conditional: if and || (OR)",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/ifOr.html&lang=javascript&title=Conditional: if and || (OR)",
		         "parent" => false,
            ),
            array
            (
               "label" => "'if' and Regular Expressions",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/ifRegExp.html&lang=javascript&title='if' and Regular Expressions",
		         "parent" => false,
            ),
            array
            (
               "label" => "Statement: 'switch'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/switch.html&lang=javascript&title=Statement: 'switch'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Switch with Fall-Through",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/conditional/switchFallThru.html&lang=javascript&title=Switch with Fall-Through",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Looping Constructs",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/looping.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Simple 'while' Loop",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/while.html&lang=javascript&title=Simple 'while' Loop",
		         "parent" => false,
            ),
            array
            (
               "label" => "Complex 'while' Loop",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/whilePop.html&lang=javascript&title=Complex 'while' Loop",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple 'do while' Loop",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/doWhile.html&lang=javascript&title=Simple 'do while' Loop",
		         "parent" => false,
            ),
            array
            (
               "label" => "Complex 'do while' and 'random()'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/doWhileRandom.html&lang=javascript&title=Complex 'do while' and 'random()'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple 'for' Loop",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/for.html&lang=javascript&title=Simple 'for' Loop",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multiples via 'for', 'if', and '%'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/forIfModulo.html&lang=javascript&title=Multiples via 'for', 'if', and '%'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multiples via 'for' and '+='",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/forPlusEqual.html&lang=javascript&title=Multiples via 'for' and '+='",
		         "parent" => false,
            ),
            array
            (
               "label" => "Array Iteration with 'for'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/forArray.html&lang=javascript&title=Array Iteration with 'for'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple 'for in' Loop",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/looping/forIn.html&lang=javascript&title=Simple 'for in' Loop",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Break and Continue",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/breakContinue.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Simple 'break' within 'for'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/breakContinue/breakFor.html&lang=javascript&title=Simple 'break' within 'for'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Complex 'break' within 'while'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/breakContinue/breakWhile.html&lang=javascript&title=Complex 'break' within 'while'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple 'continue' within 'for'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/breakContinue/continueFor.html&lang=javascript&title=Simple 'continue' within 'for'",
		         "parent" => false,
            ),
            array
            (
               "label" => "Complex 'continue' within 'for'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/breakContinue/continueForModulo.html&lang=javascript&title=Complex 'continue' within 'for'",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Ternary Operators",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/ternary.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Simple Ternary Operator",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/ternary/ternary.html&lang=javascript&title=Simple Ternary Operator",
		         "parent" => false,
            ),
            array
            (
               "label" => "Ternary Solution: One",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/ternary/ternaryObj01.html&lang=javascript&title=Ternary Solution: One",
		         "parent" => false,
            ),
            array
            (
               "label" => "Ternary Solution: Two",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/ternary/ternaryObj02.html&lang=javascript&title=Ternary Solution: Two",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Custom Functions",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/customFunct.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Internal Functions",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/internalFunct.html&lang=javascript&title=Internal Functions",
		         "parent" => false,
            ),
            array
            (
               "label" => "External Functions",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/externalFunct.php&lang=javascript&title=External Functions",
		         "parent" => false,
            ),
            array
            (
               "label" => "Custom Function: randomInt()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/randomInt.html&lang=javascript&title=Custom Function: randomInt()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Custom Function: fuddify()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/fuddify.html&lang=javascript&title=Custom Function: fuddify()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Function within Function",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/evenOdd.html&lang=javascript&title=Function within Function",
		         "parent" => false,
            ),
            array
            (
               "label" => "Default Parameters and Arguments",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/defParam.html&lang=javascript&title=Default Parameters and Arguments",
		         "parent" => false,
            ),
            array
            (
               "label" => "Variable Length Parameters and Arguments",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/customFunct/varLenArgs.html&lang=javascript&title=Variable Length Parameters and Arguments",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Anonymous Functions",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/anonFunct.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "setTimeout() via Function",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/anonFunct/setTimeoutViaFunct.html&lang=javascript&title=setTimeout() via Function",
		         "parent" => false,
            ),
            array
            (
               "label" => "setTimeout() via Anonymous Function",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/anonFunct/setTimeoutAnonFunct.html&lang=javascript&title=setTimeout() via Anonymous Function",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Variable Scope",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/varScope.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Global Variable Scope",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varScope/globalScope.html&lang=javascript&title=Global Variable Scope",
		         "parent" => false,
            ),
            array
            (
               "label" => "Argument Variable Scope",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varScope/paramScope.html&lang=javascript&title=Argument Variable Scope",
		         "parent" => false,
            ),
            array
            (
               "label" => "Local Variable Scope",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/varScope/localScope.html&lang=javascript&title=Local Variable Scope",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Objects",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/objects.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Object Declared",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objDeclare.html&lang=javascript&title=Object Declared",
		         "parent" => false,
            ),
            array
            (
               "label" => "Object Properties Initialized",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objPropInit.html&lang=javascript&title=Object Properties Initialized",
		         "parent" => false,
            ),
            array
            (
               "label" => "Accessing Object Properties",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objAccessProp.html&lang=javascript&title=Accessing Object Properties",
		         "parent" => false,
            ),
            array
            (
               "label" => "Modifying Object Properties",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objModProp.html&lang=javascript&title=Modifying Object Properties",
		         "parent" => false,
            ),
            array
            (
               "label" => "Adding Object Properties",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objAddProp.html&lang=javascript&title=Adding Object Properties",
		         "parent" => false,
            ),
            array
            (
               "label" => "Deleting Object Properties",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objDelProp.html&lang=javascript&title=Deleting Object Properties",
		         "parent" => false,
            ),
            array
            (
               "label" => "Object Method Declared",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objMethDeclare.html&lang=javascript&title=Object Method Declared",
		         "parent" => false,
            ),
            array
            (
               "label" => "Using 'this' in Object Method",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objMethThis.html&lang=javascript&title=Using 'this' in Object Method",
		         "parent" => false,
            ),
            array
            (
               "label" => "Object 'Copy by Reference'",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/objects/objCopyRef.html&lang=javascript&title=Object 'Copy by Reference'",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Complex Data Structures",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/dataStruct.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Complex Arrays",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dataStruct/complexArrays.html&lang=javascript&title=Complex Arrays",
		         "parent" => false,
            ),
            array
            (
               "label" => "Accessing Complex Array Elements",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/dataStruct/complexArrayAccess.html&lang=javascript&title=Accessing Complex Array Elements",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Function Pass by Reference",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/functPassByRef.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Pass by Reference: Arrays",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/functPassByRef/arrayPassByRef.html&lang=javascript&title=Pass by Reference: Arrays",
		         "parent" => false,
            ),
            array
            (
               "label" => "Pass by Reference: Object",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/functPassByRef/objPassByRef.html&lang=javascript&title=Pass by Reference: Objects",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Document Object Model (DOM)",
         "icon" => "fa-picture-o",
         "href" => "slides/dom.pptx",
         "parent" => false,
      ),
      array
      (
         "label" => "Page Elements",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/pageElements.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Get Element by ID",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/getElementById.html&lang=javascript&title=Get Element by ID",
		         "parent" => false,
            ),
            array
            (
               "label" => "Text clock via setInterval()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/setIntervalClock.html&lang=javascript&title=Text clock via setInterval()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Slide Show via setInterval()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/setIntervalSlideShow.php&lang=javascript&title=Slide Show via setInterval()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Get Elements by Tag Name",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/getElementsByTagName.html&lang=javascript&title=Get Elements by Tag Name",
		         "parent" => false,
            ),
            array
            (
               "label" => "Getting Attributes via getAttribute()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/getAttribute.html&lang=javascript&title=Getting Attributes via getAttribute()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Getting Nested Elements",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/getNestedElem.html&lang=javascript&title=Getting Nested Elements",
		         "parent" => false,
            ),
            array
            (
               "label" => "Setting Attributes via setAttribute()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/setAttribute.html&lang=javascript&title=Setting Attributes via setAttribute()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Changing Content via innerHTML",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/pageElements/innerHTML.html&lang=javascript&title=Changing Content via innerHTML",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Event Handling",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/eventHandling.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Element Event Handling",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/eventViaElement.html&lang=javascript&title=Element Event Handling",
		         "parent" => false,
            ),
            array
            (
               "label" => "Event via Anonymous Function",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/eventViaAnonFunct.html&lang=javascript&title=Event via Anonymous Function",
		         "parent" => false,
            ),
            array
            (
               "label" => "Validation onblur() Event",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/eventOnblurValidation.html&lang=javascript&title=Validation onblur() Event",
		         "parent" => false,
            ),
            array
            (
               "label" => "Prompt value via onfocus() and onblur()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/eventOnblurOnFocus.html&lang=javascript&title=Prompt value via onfocus() and onblur()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Image hover with onmouseover() and onmouseout()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/hoverOnmouseoverOut.php&lang=javascript&title=Image hover with onmouseover() and onmouseout()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Toggle Classes onclick() via Chaining",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/toggleClassesOnclickViaChain.html&lang=javascript&title=Toggle Classes onclick() via Chaining",
		         "parent" => false,
            ),
            array
            (
               "label" => "Toggle Classes onclick() via Variables",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/toggleClassesOnclickViaVar.html&lang=javascript&title=Toggle Classes onclick() via Variables",
		         "parent" => false,
            ),
            array
            (
               "label" => "Event onkeyup() via text entry",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/eventHandling/eventOnkeyupTextCount.html&lang=javascript&title=Event onkeyup() via text entry",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Page Load",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/pageLoad.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Event onload() via body Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/onload/onloadViaBodyAttrib.html&lang=javascript&title=Event onload() via body Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "Page onload() via window event",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/onload/onloadViaWinEvent.html&lang=javascript&title=Page onload() via window event",
		         "parent" => false,
            ),
            array
            (
               "label" => "Show/Hide Page Elements",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/onload/styleDisplayShowHide.html&lang=javascript&title=Show/Hide Page Elements",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "JavaScript Errors",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/jsErrors.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Syntax Errors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/syntaxErrors.html&lang=javascript&title=Syntax Errors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Calling Non-existing Function",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/callNonExistingFunct.html&lang=javascript&title=Calling Non-existing Function",
		         "parent" => false,
            ),
            array
            (
               "label" => "Attribute or Method Typo",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/methodTypo.html&lang=javascript&title=Attribute or Method Typo",
		         "parent" => false,
            ),
            array
            (
               "label" => "Use Element Before Loaded",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/useBeforeLoaded.php&lang=javascript&title=Use Element Before Loaded",
		         "parent" => false,
            ),
            array
            (
               "label" => "Assignment vs Equality",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/assignVsEquality.html&lang=javascript&title=Assignment vs Equality",
		         "parent" => false,
            ),
            array
            (
               "label" => "Call Argument and Parameter Mismatch",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jsErrors/paramMismatch.html&lang=javascript&title=Call Argument and Parameter Mismatch",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "jQuery Introduction",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "slides/jQuery.pptx",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "'Hello World' via JavaScript",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/helloWorldViaJavaScript.php&lang=javascript&title='Hello World' via JavaScript",
		         "parent" => false,
            ),
            array
            (
               "label" => "'Hello World' via jQuery()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/helloWorldViajQuery.php&lang=javascript&title='Hello World' via jQuery()",
		         "parent" => false,
            ),
            array
            (
               "label" => "Element click() Event Handling",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/elementEventClick.html&lang=javascript&title=Element click() Event Handling",
		         "parent" => false,
            ),
            array
            (
               "label" => "Window Loading via ready()",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/windowLoadViaReadyEvent.html&lang=javascript&title=Window Loading via ready()",
		         "parent" => false,
            ),
            array
            (
               "label" => "fadeOut() Effects",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/effectsFadeOut.php&lang=javascript&title=fadeOut() Effects",
		         "parent" => false,
            ),
            array
            (
               "label" => "toggle() Effects",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/jQuery/effectsToggle.php&lang=javascript&title=toggle() Effects",
		         "parent" => false,
            ),
         ),
      ),
   );

   // printf( "<pre>%s</pre><br> <br>\n", print_r( $menu, true ) );
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>JavaScript: Definitive Guide</title>

<!-- Core CSS - Include with every page -->
<link href="../../common/startbootstrap/css/bootstrap.min.css"
   rel="stylesheet">
<link
   href="../../common/startbootstrap/font-awesome/css/font-awesome.css"
   rel="stylesheet">

<!-- Page-Level Plugin CSS - Dashboard -->
<link
   href="../../common/startbootstrap/css/plugins/morris/morris-0.4.3.min.css"
   rel="stylesheet">
<link
   href="../../common/startbootstrap/css/plugins/timeline/timeline.css"
   rel="stylesheet">

<!-- SB Admin CSS - Include with every page -->
<link href="../../common/startbootstrap/css/sb-admin.css" rel="stylesheet">

<!-- local CSS styling -->
<link href="../../common/css/bootstrapStyles.css" rel="stylesheet">

<!-- CSS Base, Reset, Normalize -->
<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssbase-context/cssbase-context-min.css" -->
   <!-- href="css/cssbase-context-min.css" -->
   <!-- rel="stylesheet"  -->
   <!-- type="text/css"> -->

<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssreset-context/cssreset-context-min.css" -->
   <!-- href="css/cssreset-context-min.css" -->
   <!-- rel="stylesheet"  -->
   <!-- type="text/css"> -->

<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssnormalize-context/cssnormalize-context-min.css" -->
<link
   href="../../common/css/cssnormalize-context.css"
   rel="stylesheet"
   type="text/css">

<!-- jQuery -->
<script src="../../common/jquery-ui/js/jquery-1.9.1.js"></script>

<script>
/*
	$('ul li a').click(function(e) {
		var $this = $(this);
	   if (!$this.hasClass('recent')) {
	      $this.addClass('recent');
	   }
	   e.preventDefault();
	});
*/

/*
$( document ).ready(function() {
   // alert( "jQuery is ready!" );
   $( "a" ).click(function( event ) {
      alert( "Thanks for visiting!" );
   });
});
*/

/*
$("input#submitButton").click( function() {
   $.ajax({
       url: "<?= $_SERVER['PHP_SELF'] ?>",
       type: 'get',
       dataType: 'json',
       data: $('form#myForm').serialize(),
       success: function(data) {
                  alert( "Inside function ..." );
                }
   });
});
*/

$( document ).ready(function() {
   $( "a.menu" ).click(function( event ) {

      var href = $(this).attr( "href" );
      // console.log( "href: ", href );
      var queryStr = href.split( "?" )[1];

      if ( typeof queryStr !== 'undefined' )  // if query string
      {
	      // console.log( "queryStr: ", queryStr );
	      var keyValuePair = queryStr.split( "&" );
	      // console.log( "keyValuePair: ", keyValuePair );
	      var param = new Array();
	
	      for ( var i = 0; i < keyValuePair.length; i++ )
	      {
	         key = keyValuePair[i].split( "=" )[0];
	         value = keyValuePair[i].split( "=" )[1];
	         param[ key ] = value;
	      }
	
	      // console.log( "param: ", param );
	
	      $.ajaxSetup ({
            // Disable caching of AJAX responses
            cache: false
         });

			// execute script to retrieve the formatted code
			$.ajax({
			   // url: "../../common/php/geshiPrintFile.php",  // could not get this to work
			   // url: "geshiPrintFile.php?file=index.html&lang=javascript&title=Hello+World",
			   url: "geshiPrintFile.php",
			   type: "POST",
			   // data: { file: "examples/chapter02/helloWorld.html", lang: "html", title: "Hello World" },
			   data: { file: param['file'], lang: param['lang'], title: param['title'] },
			   dataType: "html"
			}).done( function( html ) {
			   $( "#coderize" ).html( html );
			   $( "#codelink" ).html( 'Open page <a href="' + param['file'] + '" target="javascript" >' + param['title'] + '</a> in new window.'  );
			   $( "#renderize" ).load( param['file'] );
			});

		   event.preventDefault();
      }
   });
});

/*
$.get( "geshiPrintFile.php",
       { file: "index.html", lang: "html", title: "Hello World" } )
*/

</script>

</head>

<body>

   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle"
               data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span> <span
                  class="icon-bar"></span> <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Project name</a> -->
         </div>
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <li>
                  <a href="..">
                  <span class="glyphicon glyphicon-home"></span>
                  &nbsp; Home</a>
               </li>

               <li><a href="../html">HTML</a> </li>

               <li class="active"><a href="javascript:void(0);">JavaScript</a></li>

               <li><a href="../php">PHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="javascript:alert('&copy; Copyright <?= date('Y'); ?>\nFred R. McClurg, frmcclurg@gmail.com\nAll Rights Reserved');">Contact</a> </li>
            </ul>
         </div>
      </div>
   </div>

   <div class="panel panel-default">
	   <div class="panel-body" id="wrapper">
	      <div class="row">
	         <!-- <nav class="navbar-default navbar-static-side" role="navigation"> -->
	         <nav class="navbar-default col-lg-2 col-md-3 col-sm-4" role="navigation">
	
<?php
	buildNavigationMenu( $menu );
?>
	
	         </nav> <!-- /.navbar-static-side -->
	         <div class="col-lg-5 col-md-5 col-sm-4">
	            <div class="panel panel-default">
	               <div class="panel-heading"><h2>HTML Code</h2></div>
	               <div class="panel-body" id="coderize">
	               </div> <!-- panel-body -->
	               <div class="panel-body" id="codelink">
	               </div> <!-- panel-body -->
	            </div> <!-- panel panel-default -->
	         </div>
	         <!-- col -->
	         <div class="col-lg-5 col-md-4 col-sm-4">
	            <div class="panel panel-default">
	               <div class="panel-heading"><h2>HTML Rendered</h2></div>
	               <div class="panel-body">
	                  <!-- remove all CSS styling here -->
		               <!-- <div class="yui3-cssbase" id="yui3-normalized"> -->
		               <div class="normalized" id="renderize">  <!-- remove all CSS styling here -->
		               </div> <!-- renderized -->
	               </div> <!-- panel-body -->
	            </div> <!-- panel panel-default -->
	         </div> <!-- col -->
	      </div> <!-- row -->
	   </div> <!-- /#wrapper -->
   </div>  <!-- panel panel-default -->

   <div class="footer">
      &copy; Copyright <?= date('Y'); ?>, Fred McClurg, All Rights Reserved
   </div>

   <!-- Core Scripts - Include with every page -->
   <script src="../../common/startbootstrap/js/jquery-1.10.2.js"></script>
   <script src="../../common/startbootstrap/js/bootstrap.min.js"></script>
   <script src="../../common/startbootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>

   <!-- Page-Level Plugin Scripts - Dashboard -->
   <script src="../../common/startbootstrap/js/plugins/morris/raphael-2.1.0.min.js"></script>
   <script src="../../common/startbootstrap/js/plugins/morris/morris.js"></script>

   <!-- SB Admin Scripts - Include with every page -->
   <script src="../../common/startbootstrap/js/sb-admin.js"></script>

   <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
   <script src="../../common/startbootstrap/js/demo/dashboard-demo.js"></script>

   <!-- Google Analytics -->
   <script src="../../common/js/googleAnalytics.js"></script>
</body>

</html>
