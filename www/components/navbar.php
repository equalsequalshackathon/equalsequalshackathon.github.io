<div class="navbar">
  <img class="icon" src="images/earth.svg">
  <span class="headers">
    <span class="head" dest="about">About</span> |
    <span class="head" dest="schedule">Schedule</span> |
    <span class="head" dest="staff">Staff</span> |
    <span class="head" dest="sponsors">Sponsors</span> |
    <span class="head" dest="contact">Contact</span>
  </span>
</div>

<style>

  .navbar{
    --img-rad:calc(var(--img-side) / 2);
    z-index:1;
    padding:var(--img-pad) 0;
    background-color:var(--green);
    color:var(--dkGreen);
    font-family:sans-serif;
    font-weight:bold;
    font-size:var(--navbar-font);
    position:fixed;
    width:100%;
    left:0;
    top:0;
  }

  .navbar .icon{
    cursor:pointer;
    position:absolute;
    height:auto;
    width:var(--img-side);
    left:var(--img-pad);
    top:calc(var(--navbar-h) - var(--img-rad));
    border:solid 2px var(--black);
    border-radius:100%;
  }
  .navbar .headers{
    --left:calc(var(--img-side) + calc(var(--img-pad) * 2));
    width:calc(100% - var(--left));
    position:relative;
    left:var(--left);
  }

  .navbar .head{
    cursor:pointer;
    color:white;
  }

</style>
