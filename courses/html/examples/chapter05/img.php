<?php
   $imageDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter05/" : "";
?>
<!DOCTYPE html>
<html>
<head>
<title>&lt;img&gt; Tag</title>
</head>

<body>
   <h1>&lt;img&gt; Tag</h1>

   <p>Sed venenatis egestas elit, ullamcorper suscipit arcu vehicula
      dignissim. Morbi interdum, nisl eget facilisis efficitur, ipsum
      dui malesuada urna, sed imperdiet nisl tellus nec lacus. Aliquam
      risus enim, feugiat non mi sed, molestie pharetra leo. Nam commodo
      urna ullamcorper mattis aliquet. Quisque mollis tincidunt rutrum.
      Pellentesque habitant morbi tristique senectus et netus et
      malesuada fames ac turpis egestas. Nulla tempus rutrum lorem, a
      ultrices neque elementum vel. Mauris id justo a tellus ornare
      lacinia. Donec quis luctus leo. Nam placerat nibh at mattis
      fermentum.</p>

   <h2>Brontosaurus</h2>

   <img src="<?= $imageDir ?>images/brontoStamp.300x238.jpg" 
        width="240" alt="Brontosaurus" title="Brontosaurus">

   <p>Ut mollis, sapien at placerat sagittis, velit nunc viverra lacus,
      eget congue diam urna at erat. Mauris scelerisque ligula ut enim
      suscipit porta. Suspendisse est massa, elementum quis porta vel,
      finibus quis nisi. Sed hendrerit molestie erat, et posuere enim
      accumsan ac. Integer dapibus metus vel eleifend egestas. Praesent
      nec consequat mauris, sit amet bibendum nunc. Duis eget est at
      orci pulvinar feugiat.</p>

   <h2>Coelacanth</h2>

   <img src="<?= $imageDir ?>images/coelacanth.381x248.jpg" 
        width="240" alt="Coelacanth" title="Coelacanth" align="right">

   <p>Pellentesque pulvinar lectus imperdiet leo congue, facilisis
      facilisis ex rhoncus. Praesent varius sapien ac metus consequat
      condimentum. Maecenas ullamcorper massa dui, convallis vulputate
      tellus pretium posuere. In enim nulla, venenatis eget sodales a,
      porta luctus nisl. Nunc non convallis mauris. Curabitur euismod
      vulputate diam sed feugiat. Sed vitae dolor eget ligula lobortis
      congue vulputate nec ligula. Suspendisse malesuada nisi ac magna
      posuere, sit amet mattis tortor suscipit. Cras vitae odio mauris.
      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
      posuere cubilia Curae; Praesent nec tortor commodo, gravida odio
      non, posuere leo. Nunc in ultrices elit.</p>

   <h2>Plesiosaur</h2>

   <img src="<?= $imageDir ?>images/plesiosaur.300x215.jpg" 
      width="240" alt="Plesiosaur" title="Plesiosaur" align="left">

   <p>In sagittis lectus vel sem dapibus lacinia. Integer aliquet metus
      a libero fringilla, vel tristique risus tempor. Aenean non tellus
      placerat, hendrerit risus vitae, fermentum nunc. Aenean sit amet
      ullamcorper dolor. Vestibulum justo risus, tristique quis lorem
      sed, bibendum rhoncus turpis. Etiam luctus libero in arcu accumsan
      varius. Mauris mollis accumsan sollicitudin. Nam consectetur
      consectetur turpis, vulputate bibendum magna aliquet in. Nunc vel
      sem vehicula, sagittis ligula et, convallis leo. Aliquam malesuada
      libero id nulla tincidunt commodo. In augue lacus, tempus vitae
      interdum ut, convallis eu turpis. Donec vehicula pellentesque
      metus a faucibus. Vivamus blandit scelerisque justo nec
      vestibulum.</p>

   <h2>Incan Stone</h2>

   <p>Fusce quis urna magna. Donec a dolor vel libero sagittis congue ut
      vitae sapien. Morbi vitae leo euismod, sodales sapien ac, volutpat
      nisl. Donec viverra neque at nisl viverra, vitae semper massa
      cursus. Maecenas sed consectetur mauris. Maecenas neque lorem,
      sagittis imperdiet est eget, consequat porta diam. Suspendisse
      rhoncus sodales lorem at feugiat. Vestibulum a odio massa. Donec
      feugiat posuere tristique. Nulla ullamcorper varius justo non
      cursus. Suspendisse enim nisl, fermentum eget scelerisque quis,
      scelerisque sit amet odio.</p>

   <img src="<?= $imageDir ?>images/incanStone.398x298.jpg" 
      width="240" title="Ica Stone" alt="Ica Stone">
</body>
</html>
