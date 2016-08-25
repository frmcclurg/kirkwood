<?php
   /**
    * @file index.php
    * @abstract Main page for class slides and examples
    * @author Fred R. McClurg
    * @date March 30, 2014
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
	         "href" => "slides/itinerary.pptx",
	         "parent" => false,
         ),
      ),
      array
      (
         "label" => "Chapter 02",
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
	         "href" => "slides/chapter02.pptx",
	         "parent" => false,
         ),
      ),
      array
      (
         "label" => "Chapter 03",
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
	         "href" => "slides/chapter03.pptx",
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
               "label" => "Hello World",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter03/helloWorld.html&lang=html&title=Hello World",
		         "parent" => false,
            ),
            array
            (
               "label" => "Character Entities",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter03/charEntity.html&lang=html&title=Character Entities",
		         "parent" => false,
            ),
            array
            (
               "label" => "Comments",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter03/comment.html&lang=html&title=Comments",
		         "parent" => false,
            ),
            array
            (
               "label" => "Conditional Comments",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter03/commentConditional.html&lang=html&title=Conditional Comments",
		         "parent" => false,
            ),
            array
            (
               "label" => "Tag Nesting",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter03/tagNesting.html&lang=html&title=Tag Nesting",
		         "parent" => false,
            )
         )
      ),
      array
      (
         "label" => "Chapter 04",
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
	         "href" => "slides/chapter04.pptx",
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
               "label" => "div Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/div.html&lang=html&title=div Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "span Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/span.html&lang=html&title=span Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Paragraph Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/p.html&lang=html&title=Paragraph Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Heading Tags",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/headings.html&lang=html&title=Heading Tags",
		         "parent" => false,
            ),
            array
            (
               "label" => "center Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/center.html&lang=html&title=center Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Content-Based Tags",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/contentBased.html&lang=html&title=Content-Based Tags",
		         "parent" => false,
            ),
            array
            (
               "label" => "Physical-Based Tags",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/physicalBased.html&lang=html&title=Physical-Based Tags",
		         "parent" => false,
            ),
            array
            (
               "label" => "br Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/br.html&lang=html&title=br Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "nobr Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/nobr.html&lang=html&title=nobr Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "pre Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/pre.html&lang=html&title=pre Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "xmp Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/xmp.html&lang=html&title=xmp Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "address Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/address.html&lang=html&title=address Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "blockquote Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter04/blockquote.html&lang=html&title=blockquote Tag",
		         "parent" => false,
            ),
         )
      ),
      array
      (
         "label" => "Chapter 05",
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
	         "href" => "slides/chapter05.pptx",
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
               "label" => "hr Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/hr.html&lang=html&title=hr Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "img Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/img.php&lang=html&title=img Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "svg Image Format",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/svg.html&lang=html&title=svg Image Format",
		         "parent" => false,
            ),
            array
            (
               "label" => "bgcolor Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.bgcolor.html&lang=html&title=bgcolor Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "background Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.background.html&lang=html&title=background Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "background Horiz Ramp",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.background.rampHorz.html&lang=html&title=background Horiz Ramp",
		         "parent" => false,
            ),
            array
            (
               "label" => "background Vert Ramp",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.background.rampVert.html&lang=html&title=background Vert Ramp",
		         "parent" => false,
            ),
            array
            (
               "label" => "bgproperties Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.bgproperties.html&lang=html&title=properties Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "leftmargin Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.leftmargin.html&lang=html&title=leftmargin Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "topmargin Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter05/body.topmargin.html&lang=html&title=topmargin Attribute",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 06",
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
	         "href" => "slides/chapter06.pptx",
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
               "label" => "Hypertext Links",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_href.html&lang=html&title=Hypertext Links",
		         "parent" => false,
            ),
            array
            (
               "label" => "Linking Images",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_img.php&lang=html&title=Linking Images",
		         "parent" => false,
            ),
            array
            (
               "label" => "Linking Named Anchors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_anchor.html&lang=html&title=Linking Named Anchors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Link Opening New Tab",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_target-blank.html&lang=html&title=Link Opening New Tab",
		         "parent" => false,
            ),
            array
            (
               "label" => "Link Opening Same Tab",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_target-wiki.html&lang=html&title=Link Opening Same Tab",
		         "parent" => false,
            ),
            array
            (
               "label" => "Linking Email Addresses",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/a_href_mailto.html&lang=html&title=Linking Email Addresses",
		         "parent" => false,
            ),
            array
            (
               "label" => "Image Map",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter06/imageMap.php&lang=html&title=Image Map",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 07",
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
	         "href" => "slides/chapter07.pptx",
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
               "label" => "Unordered List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ul.html&lang=html&title=Unordered List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Unordered List Style Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ul_type.html&lang=html&title=Unordered List Style Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "Nested Unordered List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ul_nested.html&lang=html&title=Nested Unordered List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Horizontal Unordered List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ul_horz.html&lang=html&title=Horizontal Unordered List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Ordered List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ol.html&lang=html&title=Ordered List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Nested Ordered List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ol_nested.html&lang=html&title=Nested Ordered List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Ordered List Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/ol_type.html&lang=html&title=Ordered List Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "dl Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter07/dl.html&lang=html&title=dl Tag",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 08",
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
	         "href" => "slides/chapter08.pptx",
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
               "label" => "Inline Style Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/inlineStyle.html&lang=html&title=Inline Style Attribute",
		         "parent" => false,
            ),
            array
            (
               "label" => "Document-Level Stylesheet",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/docLevelStyle.html&lang=html&title=Document-Level Stylesheet",
		         "parent" => false,
            ),
            array
            (
               "label" => "External Stylesheet Link",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/externalStyle.php&lang=html&title=External Stylesheet Link",
		         "parent" => false,
            ),
            array
            (
               "label" => "External Stylesheet File",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/css/styles.css&lang=css&title=External Stylesheet File",
		         "parent" => false,
            ),
            array
            (
               "label" => "Contextual Selectors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/contextualSelector.html&lang=html&title=Contextual Selectors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Regular Class Selectors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/regularClass.html&lang=html&title=Regular Class Selectors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Generic Class Selectors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/genericClass.html&lang=html&title=Generic Class Selectors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Hover Pseudoclass Selectors",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/a_hover.html&lang=html&title=Hover Pseudoclass Selectors",
		         "parent" => false,
            ),
            array
            (
               "label" => "Important Style Overriding",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/importantOverride.html&lang=html&title=Important Style Overriding",
		         "parent" => false,
            ),
            array
            (
               "label" => "Stylesheet Specificity",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/cssSpecificity.html&lang=html&title=Style Sheet Specificity",
		         "parent" => false,
            ),
            array
            (
               "label" => "Equally Specific Styles",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/equallySpecific.html&lang=html&title=Equally Specific Styles",
		         "parent" => false,
            ),
            array
            (
               "label" => "CSS Inheritance",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/cssInheritance.html&lang=html&title=CSS Inheritance",
		         "parent" => false,
            ),
            array
            (
               "label" => "Forcing Inheritance",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/forceInheritance.html&lang=html&title=Forcing Inheritance",
		         "parent" => false,
            ),
            array
            (
               "label" => "Background Image",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/bgImage.php&lang=html&title=Background Image",
		         "parent" => false,
            ),
            array
            (
               "label" => "Floating Elements",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/floatElement.php&lang=html&title=Floating Elements",
		         "parent" => false,
            ),
            array
            (
               "label" => "List Style Image",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/listStyleImage.php&lang=html&title=List Style Image",
		         "parent" => false,
            ),
            array
            (
               "label" => "Table Border Collapse",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/borderCollapse.html&lang=html&title=Table Border Collapse",
		         "parent" => false,
            ),
            array
            (
               "label" => "Border Radius",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/borderRadius.html&lang=html&title=Border Radius",
		         "parent" => false,
            ),
            array
            (
                 "label" => "nth-child Selector",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/nth-child.html&lang=html&title=nth-child Selector",
		         "parent" => false,
            ),
            array
            (
                 "label" => "nth-of-type Selector",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/nth-of-type.html&lang=html&title=nth-of-type Selector",
		         "parent" => false,
            ),
            array
            (
               "label" => "Media Queries",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter08/mediaQueries.html&lang=html&title=Media Queries",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 09",
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
	         "href" => "slides/chapter09.pptx",
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
               "label" => "Emailing Form via Encoding",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/enctype.html&lang=html&title=Emailing Form via Encoding",
		         "parent" => false,
            ),
            array
            (
               "label" => "Radio Input Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/radio.html&lang=html&title=Check Box Input Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "Check Box Input Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/checkbox.html&lang=html&title=Check Box Input Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "Label Element",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/label.html&lang=html&title=Label Element",
		         "parent" => false,
            ),
            array
            (
               "label" => "Input Type Buttons",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputButtons.html&lang=html&title=Input Type Buttons",
		         "parent" => false,
            ),
            array
            (
               "label" => "Button Tag with Text",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/buttonText.html&lang=html&title=Button Tag with Text",
		         "parent" => false,
            ),
            array
            (
               "label" => "Button Tag with Image",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/buttonImg.php&lang=html&title=Button Tag with Image",
		         "parent" => false,
            ),
            array
            (
               "label" => "Image Input Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputImg.php&lang=html&title=Image Input Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "Text Input Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputText.html&lang=html&title=Text Input Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "Text Input Attributes",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputTextAttribute.html&lang=html&title=Text Input Attributes",
		         "parent" => false,
            ),
            array
            (
               "label" => "Password Input Type",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/password.html&lang=html&title=Password Input Type",
		         "parent" => false,
            ),
            array
            (
               "label" => "New Input Types",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputHtml5.html&lang=html&title=New Input Types",
		         "parent" => false,
            ),
            array
            (
               "label" => "Date/Time Input Types",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputDateTime.html&lang=html&title=Date/Time Input Types",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multiple Line Text",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/textArea.html&lang=html&title=Multiple Line Text",
		         "parent" => false,
            ),
            array
            (
               "label" => "Dropdown List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/dropdownList.html&lang=html&title=Dropdown List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Multiple Select List",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/selectList.html&lang=html&title=Multiple Select List",
		         "parent" => false,
            ),
            array
            (
               "label" => "Fieldset and Legend",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/fieldset.html&lang=html&title=Fieldset and Legend",
		         "parent" => false,
            ),
            array
            (
               "label" => "Semantic Tags",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/semanticTags.php&lang=html&title=Semantic Tags",
		         "parent" => false,
            ),
            array
            (
               "label" => "Details and Summary",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/detailsSummary.html&lang=html&title=Details and Summary",
		         "parent" => false,
            ),
            array
            (
               "label" => "Datalist Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/datalist.html&lang=html&title=Datalist Tag",
		         "parent" => false,
            ),
         	/*
            array
            (
               "label" => "Speech Input Attribute",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/inputSpeech.html&lang=html&title=Speech Input Attribute",
		         "parent" => false,
            ),
            */
            array
            (
               "label" => "Meter Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/meter.html&lang=html&title=Meter Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Progress Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter09/progress.html&lang=html&title=Progress Tag",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 10",
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
	         "href" => "slides/chapter10.pptx",
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
               "label" => "Table Header Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/th.html&lang=html&title=Table Header Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Table Data Tag",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/td.html&lang=html&title=Table Data Tag",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple Table Example",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/simpleTable.html&lang=html&title=Simple Table Example",
		         "parent" => false,
            ),
            array
            (
               "label" => "Simple Table with CSS",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/simpleTableCss.html&lang=html&title=Simple Table with CSS",
		         "parent" => false,
            ),
            array
            (
               "label" => "Complete Table Example",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/completeTable.html&lang=html&title=Complete Table Example",
		         "parent" => false,
            ),
            array
            (
               "label" => "Table with Rowspan",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/rowspan.html&lang=html&title=Table with rowspan",
		         "parent" => false,
            ),
            array
            (
               "label" => "Table with Colspan",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/chapter10/colspan.html&lang=html&title=Table with colspan",
		         "parent" => false,
            ),
         ),
      ),
      array
      (
         "label" => "Chapter 11",
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
	         "href" => "slides/chapter11.pptx",
	         "parent" => false,
         ),
      ),
      array
      (
         "label" => "HTML 5",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
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
               "label" => "Details/Summary",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/html5/detailsSummary.html&lang=html&title=Details/Summary",
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

<title>HTML: Definitive Guide</title>

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
<link href="../../common/startbootstrap/css/sb-admin.css" 
      rel="stylesheet">

<!-- local CSS styling -->
<link href="../../common/css/bootstrapStyles.css" 
      rel="stylesheet">

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
			   // url: "geshiPrintFile.php?file=index.html&lang=html&title=Hello+World",
			   type: "POST",
			   url: "geshiPrintFile.php",
			   // data: { file: "examples/chapter02/helloWorld.html", lang: "html", title: "Hello World" },
			   data: { file: param['file'], lang: param['lang'], title: param['title'] },
			   dataType: "html"
			}).done( function( html ) {
			   $( "#coderize" ).html( html );
			   $( "#codelink" ).html( 'Open page <a href="' + param['file'] + '" target="html" >' + param['title'] + '</a> in new window.'  );
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

               <li class="active"><a href="javascript:void(0);">HTML</a> </li>

               <li><a href="../javascript">JavaScript</a></li>

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
   <script
      src="../../common/startbootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>

   <!-- Page-Level Plugin Scripts - Dashboard -->
   <script
      src="../../common/startbootstrap/js/plugins/morris/raphael-2.1.0.min.js"></script>
   <script src="../../common/startbootstrap/js/plugins/morris/morris.js"></script>

   <!-- SB Admin Scripts - Include with every page -->
   <script src="../../common/startbootstrap/js/sb-admin.js"></script>

   <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
   <script src="../../common/startbootstrap/js/demo/dashboard-demo.js"></script>

   <!--  Google Analytics -->
   <script src="../../common/js/googleAnalytics.js"></script>
</body>

</html>
