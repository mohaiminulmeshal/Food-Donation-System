<?php	require './components/header.php'; ?>

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/dbg3.jpg" alt="bg1" width="1920" height="893">
          <div class="carousel-caption">
              <h2  style="color:black;"><b> Make a Donation </b></h2>
            <p5 style="font-family:courier;color:black;"><b> We are here to help </b></p5>
          </div>   
        </div>
       

      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

<?php require './components/footer.php'; ?>