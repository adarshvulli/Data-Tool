<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <title>Survey</title>
</head>
<body>

 <div class="navigation-wrapper">
  <div class="navigation-button">
      <i class="fa fa-bars"></i>
        
  </div>

  <div class="navigation-menu">
      <ul>
          <br><br>
          <li><a href="#">HOME</a></li>
          <li><a href="../form/index.php">FORM</a></li>
          <li><a href="../form/data.php">VIEW DATA</a></li>
          <li><a href="../form/contact.php">CONTACT</a></li>
          <li><a href="../team/index.html">TEAM</a></li>
      </ul>
  </div>

</div>
 <div class="container">
  <h2 style="color: azure;"><span> Welcome  </span><br> To the Survey</h2>
 </div>
 <script src="anime.min.js"></script>
 <script>
  const container = document.querySelector('.container')
  for(var i = 0;i<=100;i++){
   const blocks = document.createElement('div');
   blocks.classList.add('block');
   container.appendChild(blocks);
   // console.log("hiii")

  }
  function animateBlocks(){
   anime({
    targets:'.block',
    translateX:function(){
     return anime.random(-700,700);
    },
    translateY:function(){
     return anime.random(-500,500);
    },
    scale:function(){
     return anime.random(1,5);
    },
    easing:'linear',
    duration:5000,
    delay:anime.stagger(15),
    complete:animateBlocks,
   })
  }
  animateBlocks()
   </script>
   <script>
    var navButton = document.querySelector('.navigation-button');
    var navMenu = document.querySelector('.navigation-menu');
    var win = window;

    function openMenu(event) {

        navButton.classList.toggle('active');
        navMenu.classList.toggle('active');

        event.preventDefault();
        event.stopImmediatePropagation();
    }

    function closeMenu(event) {
        if (navButton.classList.contains('active')) {
            navButton.classList.remove('active');
            navMenu.classList.remove('active');
        }
    }
    navButton.addEventListener('click', openMenu, false);

    win.addEventListener('click', closeMenu, false);
</script>

</body>
</body>
</html>