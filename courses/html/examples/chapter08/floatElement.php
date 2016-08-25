<?php
   $imageDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter08/" : "";
?>

<style>
   div.floatLeft {
      float: left;
   }

   div.floatRight {
      float: right;
   }

   div.picture {
      width: 33%;
      border-radius: 10px;
      border: medium outset purple;
      padding: 10px;
      margin: 10px;
   }

   span.author {
      float: right;
   }
   
   p.para {
      padding-top: 0.5em;
      padding-bottom: 0.5em;
   }
</style>

<div class="picture floatRight">
   <img src="<?= $imageDir ?>images/andy_andrews.jpg"
        style="width: 100%;">
</div>

<p class="para">
   One way to define wisdom is the ability to see, into the
   future, the consequences of your choices in the present.
   That ability can give you a completely different
   perspective on what the future might look like.
   <span class="author">&mdash; Andy Andrews</span>
</p>

<p class="para">
   It is not enough to recognize what is right and true.
   One must control the impulse to do what is wrong and
   easy. <span class="author">&mdash; Andy Andrews</span>
</p>

<div class="picture floatLeft">
   <img src="<?= $imageDir ?>images/andy_andrews.jpg"
        style="width: 100%;">
</div>

<p class="para">
   Have you ever considered how often we judge ourselves by
   our intentions while we judge others by their actions?
   Yet intention without action is an insult to those who
   expect the best from you.
   <span class="author">&mdash; Andy Andrews</span>
</p>

<p class="para">
   Your time on this earth is a gift to be used wisely.
   Don't squander your words or your thoughts. Consider
   that even the simplest actions you take for your lives
   matter beyond measure ... and they matter forever.
   <span class="author">&mdash; Andy Andrews</span>
</p>

<p class="para">
   My life &ndash; my personality, my habits, even my
   speech &ndash; is a combination of the books I choose
   to read, the people I choose to listen to, and the
   thoughts I choose to tolerate in my mind.
   <span class="author">&mdash; Andy Andrews</span>
</p>

<p class="para">
   Self-discipline is the ability to make yourself do
   something you don't necessarily want to do, to get a
   result you would really like to have.
   <span class="author">&mdash; Andy Andrews</span>
</p>