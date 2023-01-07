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
                            <img src="images/blogs/mutual.jpeg"/>
                    </div>
            </div>
</div>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 
 
 
    @include('layout.logofooter')  
    
   
    @include('layout.mutualfundfooter')
    @include('layout.footer')
