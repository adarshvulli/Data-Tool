<?php

$db=new mysqli("localhost","root","","health_science");
if(isset($_POST['sf'])){
    $fullname=$_POST['fullname'];
    $location=$_POST['location'];
    $iname=$_POST['iname'];
    $ppltrained=$_POST['ppltrained'];
    $researchers=$_POST['researchers'];
    $publications=$_POST['publications'];
    $students=$_POST['students'];
    $samples=$_POST['samples'];
    
   

    $q=$db->query("INSERT INTO `data`(`id`,`fullname`,`location`,`iname`,`ppltrained`,`researchers`,`publications`,`students`,`samples`) VALUES ('','$fullname','$location','$iname','$ppltrained','$researchers','$publications','$students','$samples')");
    if($q>0){
      header('Location:success.html');
    }
    else{
      header('Location:notsuccess.html');
    }
    
}
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->


    <title>Data</title>
</head>

<body>


    <form method="post" action="index.php">

        <input id="input-1" name="fullname" type="text" placeholder="John Doe" required />
        <label for="input-1">
          <span class="label-text">🦾 Name of the facility </span>
          <span class="nav-dot"></span>
          <div class="signup-button-trigger">Hey there :wave: !</div>
        </label>
        <input id="input-2" name="location" type="text" placeholder="Area" required />
        <label for="input-2">
          <span class="label-text">📍 Location</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-3" name="iname" type="text" placeholder="eg:Mass spectrometer" required />
        <label for="input-3">
          <span class="label-text">🔬 Instrument Name 🗜️</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-4" name="ppltrained" type="number" placeholder="Number" required />
        <label for="input-4">
          <span class="label-text">🧑🏻‍🤝‍🧑🏽 People trained 🧑🏻‍🤝</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-5" name="researchers" type="number" placeholder="Number" required />
        <label for="input-5">
          <span class="label-text">🥼 Researchers using them 🥼</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-6" name="publications" type="number" placeholder="Number" required />
        <label for="input-6">
          <span class="label-text">📢 Publications so far</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-7" name="students" type="number" placeholder="Number" required />
        <label for="input-7">
          <span class="label-text">👨‍🎓 Students 👩‍🎓</span>
          <span class="nav-dot"></span>
        </label>
        <input id="input-8" name="samples" type="number" placeholder="Number" required />

        <label for="input-8">
         <span class="label-text">✨ Samples processed ✨</span>
         
          <span class="nav-dot"></span>
          
         </label>

        <p class="tip">Press Tab</p>
        <button type="submit" id="sub" name="sf">Finally submitted! 🌟🎉🥳</button>
        <div class="signup-button">Hey there👋!</div>
    </form>

</body>

</html>