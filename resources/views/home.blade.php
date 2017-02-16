@extends('template')
@include('header')
<div id="myCarousel" class="carousel slide newslider" data-ride="carousel"> 
  <!-- Wrapper for carousel items -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/banner1.jpg" class="imgre" alt="" width="100%">
      <div class="overlay"></div>
      <div class="hero">        
        <hgroup>
            <h1>FOCUS ON YOUR PASSION</h1>        
            <h3></h3>
        </hgroup>  
      </div>
    </div>
    <div class="item">
      <img src="images/banner4.jpg" class="imgre" alt="" width="100%">
      <div class="overlay"></div>
      <div class="hero">        
        <hgroup>
          <h3>HEY, SPORTY</h3>
          <p>We knew how dreams come true</p>
          <h1>Find the best coaches near you !</h1>        
        </hgroup>  
      </div>
    </div>
    <div class="item">
      <img src="images/banner3.jpg" class="imgre" alt="" width="100%">
      <div class="overlay"></div>
      <div class="hero">        
        <hgroup>
            <h1>LET US KNOW YOUR SPORT</h1>        
            <h3></h3>
        </hgroup>  
      </div>
    </div>
    <div class="item">
      <img src="images/banner2.jpg" class="imgre" alt="" width="100%">
      <div class="overlay"></div>
      <div class="hero">        
        <hgroup>
            <h1>IT'S NOT HARD TO BE A WINNER</h1>        
            <a href="#" class="btn orgin">Learn more</a>
        </hgroup>  
      </div>
    </div>
  </div>
  <!-- Carousel controls -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left glyphicon-menu-left icon-chevron-left"></span>
  </a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right glyphicon glyphicon-menu-right icon-chevron-right"></span>
  </a>
  <!-- Service start here -->
  <div class="servicess hero">
    <ul>
      <li>
        <a href="#searchid">
          <img src="images/Cricket_H.png">
          <div class="overshowdiv">Cricket <br /> (0-00-00-00)</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Swimming_H.png">
          <div class="overshowdiv">Swimming </div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Kick-Boxing_H.png">
          <div class="overshowdiv">Kick <br /> Boxing</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Badminton_h.png">
          <div class="overshowdiv">Badminton</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Hockey_H.png">
          <div class="overshowdiv">Hockey </div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Table-Tennis_H.png">
          <div class="overshowdiv">Table  <br /> Tennis</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Skate-Boarding_H.png">
          <div class="overshowdiv">Skate <br /> Boarding</div>
        </a>
      </li>
      <li>
        <a href="#searchid"searchid>
          <img src="images/Chess_H.png">
          <div class="overshowdiv">Chess</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Football_H.png">
          <div class="overshowdiv">Football</div>
        </a>
      </li>
      <li>
        <a href="#searchid">
          <img src="images/Cricket_H.png">
          <div class="overshowdiv">Cricket <br /> (0-00-00-00)</div>
        </a>
      </li>
      <div class="clearfix"></div>
    </ul>   
  </div>
  <!-- Service end here -->

  <!-- search start here -->
  <dvi class="searchbox" id="searchid">
    <div class="container">
      <form>
        <input type="search" name="" placeholder="Search">
        <button class="btn orgin"><i class="glyphicon glyphicon-search"></i> Search</button>
      </form>
    </div>
  </div>
  <!-- search end here -->
</div>
<!-- carousel end here -->

<!-- container start here -->
<section class="section">
  <div class="container text-center">
    <h1 class="headings">Chase your kids dream with sportzinga in a simple , safer and secure way</h1>
    <p class="textass">Sportzinga will connect you to perfect coach near you in an easiest and more secure way. We are a group of  <br />professional sports coaches who have come together to groom the sporty side of your kid and give shape to his/her dreams <br /> with world-class network of coaches and sports facilities (including infrastructure and sports kits)</p>

    <ul class="centernoxx">
      <li>
        <a href="#">
          <img src="images/Trustable_Coaches.png">
          <div class="overshowdiv">Trustable <br /> Coaches</div>
        </a>
        <span>Trust-able Coaches</span>
      </li>
      <li>
        <a href="#">
          <img src="images/Infrastructure_Kits.png">
          <div class="overshowdiv">Infrastructure <br /> Kits</div>
        </a>
        <span>Infrastructure & Kits</span>
      </li>
      <li>
        <a href="#">
          <img src="images/EasyConnect_Booking.png">
          <div class="overshowdiv">Easy connect <br /> Booking</div>
        </a>
        <span>Easy connect & Booking</span>
      </li>
      <li>
        <a href="#">
          <img src="images/Best_Training_Guaranteed.png">
          <div class="overshowdiv">Best training  <br /> Guraranteed</div>
        </a>
        <span>Best training Guraranteed</span>
      </li>
      <div class="clearfix"></div>
    </ul>   
  </div>
</section>

<section class="section">
    <iframe width="100%" height="450" src="https://www.youtube.com/embed/_lyAEL4Wqao" frameborder="0" allowfullscreen></iframe>
</section>

<section class="section">
  <div class="container text-center">
    <h1 class="headings">Event Galleries</h1>
    <div class="contentsss">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-xs-12">
                <div class="thumbnail adjust1">
                  <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="imgprofile">
                      <img class="media-object img-rounded img-responsive" src="images/pp.jpeg" width="100">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="caption">
                      <p class="text-info adjust2">Abhijit Goswami</p>
                      <blockquote class="adjust2">
                        <p>City, State</p>
                      </blockquote>
                      <p>Tell people more about this item. Give people the info they need to go ahead and take the action you want. To make this item your own, click here > Add & Manage Items.
</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-xs-12">
                <div class="thumbnail adjust1">
                  <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="imgprofile">
                      <img class="media-object img-rounded img-responsive" src="images/pp.jpeg" width="100">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="caption">
                      <p class="text-info adjust2">Abhijit Goswami</p>
                      <blockquote class="adjust2">
                        <p>City, State</p>
                      </blockquote>
                      <p>Tell people more about this item. Give people the info they need to go ahead and take the action you want. To make this item your own, click here > Add & Manage Items.
</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-xs-12">
                <div class="thumbnail adjust1">
                  <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="imgprofile">
                      <img class="media-object img-rounded img-responsive" src="images/pp.jpeg" width="100">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="caption">
                      <p class="text-info adjust2">Abhijit Goswami</p>
                      <blockquote class="adjust2">
                        <p>City, State</p>
                      </blockquote>
                      <p>Tell people more about this item. Give people the info they need to go ahead and take the action you want. To make this item your own, click here > Add & Manage Items.
</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls --> 
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
          <span class="glyphicon glyphicon-chevron-left"></span> 
        </a> 
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
          <span class="glyphicon glyphicon-chevron-right"></span> 
        </a> 
      </div>
    </div>
  </div>
</section>

<section class="section bg2 publicaciones-blog-home">
  <div class="container text-center">
    <h1 class="headings">Upcoming Events</h1>
    <div class="row-page row">
      <div class="col-page col-sm-8 col-md-6">
        <a href="" class="black fondo-publicacion-home">
          <div class="img-publicacion-principal-home">
            <img class="" src="images/banner3.jpg">
          </div>
          <div class="contenido-publicacion-principal-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="col-page col-sm-4 col-md-3">
        <a href=""  class="fondo-publicacion-home">
          <div class="img-publicacion-home">
            <img class="img-responsive" src="images/banner2.jpg">
          </div>
          <div class="contenido-publicacion-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="col-page col-sm-4 col-md-3">
        <a href="" class="fondo-publicacion-home">
          <div class="img-publicacion-home">
            <img class="img-responsive" src="images/banner4.jpg">
          </div>
          <div class="contenido-publicacion-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="col-page col-sm-4 col-md-3">
        <a href="" class="fondo-publicacion-home">
          <div class="img-publicacion-home">
            <img class="img-responsive" src="images/banner3.jpg">
          </div>
          <div class="contenido-publicacion-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="hidden-sm col-page col-sm-4 col-md-3">
        <a href="" class="fondo-publicacion-home">
          <div class="img-publicacion-home">
            <img class="img-responsive" src="images/banner1.jpg">
          </div>
          <div class="contenido-publicacion-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="hidden-sm col-page col-sm-4 col-md-3">
        <a href="" class="fondo-publicacion-home">
          <div class="img-publicacion-home">
            <img class="img-responsive" src="images/banner4.jpg">
          </div>
          <div class="contenido-publicacion-home">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
          </div>
          <div class="mascara-enlace-blog-home">
            <span>Lorem </span>
          </div>
        </a>
      </div>
      <div class="col-page col-sm-4 col-md-3">
        <a href="#" class="todas-las-publicaciones-home">
            <span>Neque porro quisquam est qui dolorem ipsum</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section publicaciones-blog-home">
  <div class="container text-center">
    <h1 class="headings">Blogs & Events</h1>
    <div class="contentsss">
      <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row-page row">
              <div class="col-page col-sm-12 col-md-12">
                <a href="" class="black fondo-publicacion-home">
                  <div class="img-publicacion-principal-home">
                    <img class="" src="images/banner3.jpg">
                  </div>
                  <div class="contenido-publicacion-principal-home">
                    <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                  </div>
                  <div class="mascara-enlace-blog-home">
                    <span>Lorem </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row-page row">
              <div class="col-page col-sm-12 col-md-12">
                <a href="" class="black fondo-publicacion-home">
                  <div class="img-publicacion-principal-home">
                    <img class="" src="images/banner3.jpg">
                  </div>
                  <div class="contenido-publicacion-principal-home">
                    <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                  </div>
                  <div class="mascara-enlace-blog-home">
                    <span>Lorem </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row-page row">
              <div class="col-page col-sm-12 col-md-12">
                <a href="" class="black fondo-publicacion-home">
                  <div class="img-publicacion-principal-home">
                    <img class="" src="images/banner3.jpg">
                  </div>
                  <div class="contenido-publicacion-principal-home">
                    <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                  </div>
                  <div class="mascara-enlace-blog-home">
                    <span>Lorem </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls --> 
        <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> 
        <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
      </div>
    </div>
  </div>
</section>
@include('footer')