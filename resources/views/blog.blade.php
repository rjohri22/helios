@include('layout.header')
<style>
      
.left{
  position: relative;
  transform: translateX(-150px);
  opacity: 0;
  transition: 1s all ease;
}

.left.active{
  transform: translateY(0);
  opacity: 1;
}  
.reveal21{
  position: relative;
  transform: translateX(-150px) scale(0);
  opacity: 0;
  transition: 1s all ease;
}

.reveal21.active{
  transform: translateX(0) scale(1);
  opacity: 1;
}
</style>
<script>
    
function reveal21() {
  var reveals21 = document.querySelectorAll(".reveal21");

  for (var i = 0; i < reveals21.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals21[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals21[i].classList.add("active");
    } else {
      reveals21[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal21);
function left() {
  var left = document.querySelectorAll(".left");

  for (var i = 0; i < left.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = left[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
        left[i].classList.add("active");
    } else {
        left[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", left);  
</script>


<div class="container">
            <div class="row">
                    <div class="col-lg-5 mt-5">
                        
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
  <img src="images/blogs/mutual.jpeg" alt="Chicago" class="d-block" style="width:100%;height:400px">
    <div class="carousel-caption">
     
    </div>
  </div>
  <div class="carousel-item">
  <img src="images/blogs/mf.jpg" alt="Los Angeles" class="d-block" style="width:100%;height:400px">
   
    <div class="carousel-caption">
    
    </div> 
  </div>
  <div class="carousel-item">
    <img src="images/blogs/pre.jpg" alt="New York" class="d-block" style="width:100%;height:400px">
    <div class="carousel-caption">
    
    </div>  
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>


                    </div>
                    <div class="col-lg-7">
                        <div class="row mt-5">
                          <div class="col-lg-6">
                            <img src="images/a11.jpg" style="height:190px;width:300px;"  alt="">
                          </div>
                          <div class="col-lg-6">
                          <img src="images/a22.jpg" style="height:190px;width:300px;"  alt="">
                          
                          </div>
                        </div> 
                        <div class="row mt-3">
                          <div class="col-lg-6">
                            <img src="images/a33.jpg" style="height:190px;width:300px;" alt="">
                          </div>
                          <div class="col-lg-6">
                          <img src="images/a44.jpg" style="height:190px;width:300px;"  alt="">
                          </div>
                        </div>   
                    </div>
            </div>
</div>


    <div class="container">
            <div class="row">
                    <div class="col-lg-5 mt-5">
                          <h4><strong style="color:">Why does someone start investing early and investment
options availability with us.</strong></h4>  
                         <img src="images/blogs/benefits.png"/>
                         <p style="font-size:18px;font-family:cursive;line-height:2">There is a saying taught at a very primary school level;
“Early to bed and early to rise makes a man healthy, wealthy and wise”. This is true
for early investors too. A lot of research and in-depth surveys show that the earlier you
invest, the richer you get. The right time to invest is during or after you complete your
graduation, the age around 20s. </p>
                    </div>
                    <div class="col-lg-7">
                      <center>
                      <img src="images/advisor.jpg" alt="">
</center>
                       <p style="font-size:18px;font-family:cursive;line-height:2">Investments can multiply in value over the years, and generally, the earlier you
invest, the more time your investment has to grow. One important advantage that
young people have is time. They usually have more time to allow an investment to
increase in value than older people.</p>     
                    </div>
            </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <div class="row">
                    <div class="col-lg-12">
                    
                      <button class="btn btn-default">Direct Equity Stocks</button>
                      <hr>
                      <button class="btn btn-default">Equity Mutual Funds</button>
                      <hr>
                      <button class="btn btn-default">Debt Mutual Funds </button>
                      <hr>
                      <button class="btn btn-default">Public Provident Fund (PPF)</button>
                      <hr>
                      <button class="btn btn-default">Bank Fixed Deposit</button>
                      <hr>
                      <button class="btn btn-default">Senior Citizens' Saving Scheme </button>
                      <hr>
                      <button class="btn btn-default">Insurance</button>
                      <hr>
                      <br>
                      <button class="btn btn-warning text-white">Invest Now Click Here</button>
                      <hr>
                    </div>
      </div>
    <div class="row">
      <div class="col-lg-12">
        <h4 style="color:black">Investments</h4>
        <p>Investments can multiply in value over the years, and generally, the earlier you
invest, the more time your investment has to grow. One important advantage that
young people have is time. </p>
      </div>
    </div>
    </div>
    <div class="col-lg-5">
      <div class="row left">
        <div class="col-lg-6">
          <img src="images/blogs/a1.jpg" alt="" style="height:200px;width:300px">
        </div>
        <div class="col-lg-6">
          <h4>EARLY LOSS RECOVERY</h4>
          <p>If you invest early and incur a loss, you have more time to make up for the loss on
investment.</p>
<i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp<?php echo date("d-m-y")?>
        </div>
      </div>
      <hr>
      <div class="row left">
        <div class="col-lg-6">
          <img src="images/blogs/a1.jpg" alt="" style="height:200px;width:300px">
        </div>
        <div class="col-lg-6">
          <h4>GROWTH IN SAVINGS</h4>
          <p>With early age investments, you develop a habit of saving more. The more you invest,
the more you get in future. 
</p>
<i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp<?php echo date("d-m-y")?>
        </div>
      </div>
      <hr>
      <div class="row left">
        <div class="col-lg-6">
          <img src="images/blogs/a1.jpg" alt="" style="height:200px;width:300px">
        </div>
        <div class="col-lg-6">
          <h4>RISK FACING CAPABILITY</h4>
          <p>If you invest at a very stage of life in your 20’s then your investment will be
compounded by the time you reach old age. </p>
<i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp<?php echo date("d-m-y")?>
        </div>
      </div>
<hr>
<div class="row left">
        <div class="col-lg-6">
          <img src="images/blogs/a1.jpg" alt="" style="height:200px;width:300px">
        </div>
        <div class="col-lg-6">
          <h4>RISK FACING CAPABILITY</h4>
          <p>If you invest at a very stage of life in your 20’s then your investment will be
compounded by the time you reach old age. </p>
<i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp<?php echo date("d-m-y")?>
        </div>
      </div>


    </div>
    <div class="col-lg-5">
      <div class="container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/BaYfMfSSdwc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="row">
                <div class="col-lg-6">
                  <img src="images/blogs/a1.jpg" alt="" style="height:200px;width:300px">
                </div>
              <div class="col-lg-6">
                <h4>RISK FACING CAPABILITY</h4>
                <p>If you invest at a very stage of life in your 20’s then your investment will be
      compounded by the time you reach old age. </p>
      <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp<?php echo date("d-m-y")?>
              </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12">
               <img src="images/mx.jpg" class="reveal21" alt="">
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- second part -->
<section style="background-image:url('images/b6.jpg');background-repeat:no-repeat;background-size:cover">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
          <h4 class="mt-5 left text-white">FINANCIAL INDEPENDENCE</h4>
          <p class="left" style="font-size:18px;font-family:cursive;line-height:2;color:white">A college student or a young professional who has invested timely can become
financially independent due to his thoughtful investments.
Most of the people start thinking of retirement plans mostly in their middle age when
they are already burdened with lots of financial responsibilities. But for a youngster
there are no such hurdles and they reach financial security much earlier.
With the technological advancements it has become much easier to gain knowledge
and plan about financial security. Then you can also take the guidance of financial
experts for strategic investments. So, IF YOU START INVESTING EARLY, YOUR
WEALTH MULTIPLIES EARLY.</p>
    </div>
  </div>
</div>
</section>

<!-- third part -->
<section class="mt-5">
<div class="container">
  <div class="row ">
  <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <img src="images/ipo11.jpg" class="left" style="height:150px;width:150px;border-radius:75px" alt="">
          </div>
        </div>
        <div class="row  mt-5">
          <div class="col-lg-12">
            <img src="images/fund-of-fund.jpg" class="left" style="height:150px;width:150px;border-radius:75px" alt="">
          </div>
        </div>
        <div class="row  mt-5">
          <div class="col-lg-12">
            <img src="images/fund-of-fund.jpg" class="left" style="height:150px;width:150px;border-radius:75px" alt="">
          </div>
        </div>
        <div class="row  mt-5">
          <div class="col-lg-12">
            <img src="images/fund-of-fund.jpg" class="left" style="height:150px;width:150px;border-radius:75px" alt="">
          </div>
        </div>
</div>
    <div class="col-lg-8">
         <div class="row mt-5">
          <div class="col-lg-12 mt-5">
                      <h5 class="reveal21">EARLY LOSS RECOVERY</h5>
                    <p class="reveal21" style="font-size:18px;font-family:cursive;line-height:2">If you invest early and incur a loss, you have more time to make up for the loss on
            investment. Whereas, an investor who starts investing at a later stage in life, will get
            less time to recover his losses. Thus, with early investments, your investment gets
            more time to grow in value.</p>
          </div>
         </div>

         <div class="row">
          <div class="col-lg-12">
                      <h5 class="reveal21">GROWTH IN SAVINGS</h5>
                    <p class="reveal21" style="font-size:18px;font-family:cursive;line-height:2">With early age investments, you develop a habit of saving more. The more you invest,
the more you get in future. To follow that thought process, you tend to save more by
cutting on unnecessary expenses and divert such saved money towards investment.
At an early age people have more strength and capability of taking risks and the
courage to face adversities. As the age increases investors are generally sceptical
about investing in riskier portfolios. So, the chances of gaining huge returns on
investments increases at a young age gets enhances with stronger capability of taking
risk.</p>
          </div>
         </div>

         <div class="row">
          <div class="col-lg-12">
                      <h5 class="reveal21">RISK FACING CAPABILITY</h5>
                    <p class="reveal21" style="font-size:18px;font-family:cursive;line-height:2">If you invest at a very stage of life in your 20’s then your investment will be
compounded by the time you reach old age. If you learn the strategies of the financial
world early then you can earn more by implementing them to get higher returns. This
is biggest advantage for early investors who gain much more than late investors.</p>
          </div>
         </div>

    </div>
    
  </div>
</div>

</section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 
 
 
    @include('layout.logofooter')  
    
   
    @include('layout.mutualfundfooter')
    @include('layout.footer')
