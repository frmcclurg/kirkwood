<?php
   $imgDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter09/" : "";
?>

<style>
   .rightFloat {
      float: right;
      width: 33%;
      display: block;
      border: thin solid blue;
      margin: 20px;
      padding: 10px;
   }

   .leftFloat {
      float: left;
      border: thin solid magenta;
      margin: 20px;
      padding: 10px;
   }
   
   .centerAlign {
      text-align: center;
   }
</style>

<body>
   <header>
      <h1>Page title</h1>
      <h2>Page subtitle</h2>
      <p>This page contains wonderful ...</p>
   </header>

   <nav>
      <ul>
         <li> <a href="#">Home</a> </li>
         <li> <a href="#">About</a> </li>
         <li> <a href="#">Contact</a> </li>
      </ul>
   </nav>

   <section>
      <article>
         <header>
            <h2>Section article title</h2>
         </header>

         <figure class="leftFloat">
            <img src="<?= $imgDir ?>images/Pearl_Harbor.jpg" 
                 style="width: 200px;">
            <figcaption class="centerAlign">Photo of Battleship Row</figcaption>
         </figure>

         <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan faucibus velit sed finibus. Ut ac tellus eu tortor sodales sollicitudin vel et metus. Quisque rhoncus neque eu ex tristique, eget tempor enim sollicitudin. Nulla porta justo ex, sed venenatis odio ultricies at. Integer et dignissim diam. Sed congue est a libero maximus, ut commodo dolor tempus. Suspendisse ut augue at ipsum viverra blandit. Maecenas viverra auctor libero eu placerat. Etiam vitae turpis justo. Nunc nec ullamcorper augue. Proin viverra sagittis finibus. Sed mollis gravida dignissim.</section>
      </article>

      <article style="clear: both;">
         <header>
            <h2>Another section article title</h2>
         </header>

         <aside class="rightFloat">
            The attack on Pearl Harbor was a 
            surprise military strike conducted by 
            the Imperial Japanese Navy against the 
            United States naval base at Pearl Harbor, 
            in the United States Territory of Hawaii, 
            on the morning of 
            <time datetime="1941-12-07 07:48">December 7, 1941</time>. 
            The attack led to the United States' 
            entry into World War II.
         </aside>

         <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac nulla vitae enim dapibus sagittis sed eu nisi. Sed vestibulum efficitur risus id tristique. Suspendisse a tellus laoreet, pellentesque arcu at, porttitor odio. Fusce eget consectetur lorem, sed interdum arcu. Vivamus ullamcorper risus leo, in mattis est dictum nec. Phasellus velit justo, scelerisque ut orci viverra, ultricies pretium ipsum. Phasellus semper, ligula ut efficitur fringilla, magna arcu aliquet dolor, ornare molestie justo augue id lorem. Donec porttitor neque velit, vel feugiat ligula tincidunt at. Phasellus ac pellentesque est. Nullam egestas malesuada ultrices.</section>
      </article>
   </section>

   <br> <br>
   
   <footer class="centerAlign"
           style="clear: both;">
      Copyright &copy;
      All rights reserved.
   </footer>
</body>
