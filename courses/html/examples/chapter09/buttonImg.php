<?php
   $imgDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter09/" : "";
?>

<style>
   div {
      padding: 10px;
   }

   .rightJustify {
      float: right;
      padding: 10px;
   }
   
   .roundCorner {
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
   }
</style>

<form action="javascript:alert('I told you not to press me!');"
      method="post" >
   <button type="submit"
           title="You better not press this!" 
           class="roundCorner" >
      <div>
         <img src="<?= $imgDir ?>images/cancel.32x32.png"
              alt="Push Button Warning">
         <span class="rightJustify">
            Don't Press Me
         </span>
      </div>
   </button>
</form>