
<nav class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
           <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home"><p class="cursive">Campfire  <i class="ion-bonfire" id="custom-icon"></i></p></a>
       </div>
       <div class="navbar-collapse collapse" id="bs-navbar">
           <ul class="nav navbar-nav">
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#intro">Intro</a>
                 </li>
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#highlights">Highlights</a>
                 </li>
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#gallery">Gallery</a>
                 </li>
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#features">Features</a>
                 </li>
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#about">About</a>
                 </li>
                 <li>
                     <a class="page-scroll" href="<?php if(!isActive("home")) echo base_url("index.php/home");?>#contact">Contact</a>
                 </li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li <?php if(isActive("login")) echo "class='active' "; ?> id="login"><a href="<?php echo base_url(); ?>index.php/login">Log in</a></li>
             <li <?php if(isActive("signup")) echo "class='active' "; ?> id="signup"><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
           </ul>
       </div>
   </div>
</nav>


<?php
//Find which page is currently on, then make it active on navbar
function isActive($arg) {
  //$ci is used instead of $this because of "Using $this when not in object context" error
  $ci =& get_instance();
  if($arg === $ci->uri->segment(1))
    return true;


  return false;
}
?>
