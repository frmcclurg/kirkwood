<?php
   $imgDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter09/" : "";
?>

<style>
   span, label {
      padding: 10px;
   }

   .roundCorner {
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
   }
   
   #raisedBorder {
      border: 4px outset #dddddd;
      padding: 15px 10px;
      background-color: #eeeeee;
   }
</style>

<form action="javascript:alert('I told you not to press me!');"
      method="post" >
   <span id="raisedBorder" 
         class="roundCorner">
      <input type="image" 
             id="imageButton"
             title="You better not press this!"
             alt="Push Button Warning" 
             src="<?= $imgDir ?>images/cancel.32x32.png">
      <label for="imageButton">
         Don't Press Me
      </label>
   </span>
</form>