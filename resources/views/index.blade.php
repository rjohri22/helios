@include('layout.header')
<style>
    .cardshow {
        box-shadow: 10px 10px 10px 10px orange;
    }

    .cardshow:hover {
        opacity: 0.7;
        transform: scale(1.1);
        transition: all 5s;
    }

    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }

    .input-container {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 15px;
    }
    
.reveal2{
  position: relative;
  transform: translateX(-150px);
  opacity: 0;
  transition: 1s all ease;
}

.reveal2.active{
  transform: translateX(0);
  opacity: 1;
}
</style>
<script>
    function reveal2() {
  var reveals2 = document.querySelectorAll(".reveal2");

  for (var i = 0; i < reveals2.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals2[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals2[i].classList.add("active");
    } else {
      reveals2[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal2);

    </script>
<body class="page-opt-nocalc page basicpage">

    <div class="home-page-layout cm-page-container">
        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12" style="background-color:white">
            <div class="row">
                <div class="col-lg-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/first.jpeg" alt="Third slide"
                                    style="height:340px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" slick-prev slick-arrow src="images/second.jpeg"
                                    alt="Second slide" style="height:340px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/banner3.jpg" alt="Third slide"
                                    style="height:340px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://www.bonanzaonline.com/mutualfunds/images/banners/mutual-fund.jpg"
                                    alt="Third slide" style="height:340px">

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

              @include('register_form')
            </div>


        </div>

    </div>
    </section>

    <!-- Start Team Doctors -->
    <section class="section-padding " style="padding: 0px 0px 0px 0px;">
        <div class="container">
            <div class="section-header">
                <div class="section-heading " style="margin-top:10px">
                    <h3>Explore Mutual Funds</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 no-padding">
                    <div class="doctors-slider">
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://www.freepngimg.com/thumb/money/49304-6-wealth-hq-image-free-png.png"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-1" data-toggle="tab"
                                                    class="nav-link active">Wealth Creation</a></h4>
                                        </center>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://vignette.wikia.nocookie.net/millionaire/images/4/4b/Kaun_Banega_Crorepati_logo.png/revision/latest?cb=20160805211149"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-2" data-toggle="tab"
                                                    class="nav-link">Kon Banayega Crorepati</a></h4>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://www.fraxnet.com/web/image/1020/IoT-Internet%20of%20things1.png"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-3" data-toggle="tab"
                                                    class="nav-link">Next Generation </a></h4>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://imgnew.outlookindia.com/uploadimage/library/16_9/16_9_5/Depositphotos_9417358_S1_1642179384.jpg"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-4" data-toggle="tab"
                                                    class="nav-link">Tax Saver</a></h4>
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://thumbs.dreamstime.com/b/emergency-funds-flat-icon-color-simple-element-fintech-collection-creative-web-design-templates-colored-filled-vector-210076785.jpg"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-5" data-toggle="tab"
                                                    class="nav-link">Emergency fund</a></h4>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="slide-item col-12">-->
                        <!--    <div class="team-block p-relative">-->
                        <!--        <div class="inner-box" style="box-shadow:0px 0px 0px">-->
                        <!--            <div class="lower-content p-relative text-center">-->
                        <!--            <center>-->
                        <!--            <img src="https://cdn-icons-png.flaticon.com/512/4207/4207247.png" style="height:70px"/>-->
                        <!--                <h4><a href="#LOANLY-6" class="text-custom-black fw-600 fs-20">International Funds</a></h4>-->
                        <!--            </center>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="box-shadow:0px 0px 0px">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                            <img src="https://capitalmaster.in/assets/images/risk/lowrisk.png"
                                                style="height:70px" />
                                            <h4 class="nav-item"><a href="#LOANLY-6" data-toggle="tab"
                                                    class="nav-link">Low Risk (Debt Funds)</a></h4>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Doctors -->
    <!-- start lw-tab -->
    <div class="section-padding lw-tab-section p-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lw-mega-tab">
                        <ul class="nav lw-nav-tabs">
                            <li class="nav-item"> <a href="#LOANLY-1" class="nav-link active" data-toggle="tab">
                                    Wealth Creation
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-2" class="nav-link" data-toggle="tab">
                                    Kon Banayega Crorepati
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-3" class="nav-link" data-toggle="tab">
                                    Next Generation
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-4" class="nav-link" data-toggle="tab">
                                    Tax Saver
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-5" class="nav-link" data-toggle="tab">
                                    Emergency fund
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-6" class="nav-link" data-toggle="tab">
                                    Low Risk (Debt Funds)
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content lw-tab-content-wrapper">
                            <div class="tab-pane container active" id="LOANLY-1">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Quant Absolute Fund.pdf" target="_blank">Quant Absolute
                                                Fund (G)</a></td>
                                        <td>341.661 Cr</td>
                                        <td>Nav</td>
                                        <td>14.3%</td>
                                        <td>24.9%</td>
                                        <td>16.9%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/ICICI Prudential Equity & Debt Fund.pdf"
                                                target="_blank">ICICI Prudential Equity & Debt Fund (G)</a></td>
                                        <td>19330.755 Cr</td>
                                        <td>Nav</td>
                                        <td>20.4%</td>
                                        <td>17.5%</td>
                                        <td>14.7%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Principal Emerging Bluechip Fund (G)</a></td>
                                        <td>3124.318 Cr</td>
                                        <td>Nav</td>
                                        <td>38.9%</td>
                                        <td>21.9%</td>
                                        <td>24.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Tata Digital India Fund (G)</a></td>
                                        <td>5583.704 Cr</td>
                                        <td>Nav</td>
                                        <td>14.6%</td>
                                        <td>28.3%</td>
                                        <td>19.9%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Parag Parikh Flexi Cap fund.pdf" target="_blank">Parag
                                                Parikh Flexi Cap fund (G)</a></td>
                                        <td>21906.959 Cr</td>
                                        <td>Nav</td>
                                        <td>11.7%</td>
                                        <td>23%</td>
                                        <td>18.6%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Mirae Asset Emerging Bluechip Fund (G).pdf"
                                                target="_blank">Mirae Asset Emerging Bluechip Fund (G)</a></td>
                                        <td>21910.25 Cr</td>
                                        <td>Nav</td>
                                        <td>7%</td>
                                        <td>18.6%</td>
                                        <td>20.4%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="tab-pane fade container" id="LOANLY-2">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="">Principal Emerging Bluechip Fund (G)</a></td>
                                        <td>3124.318 Cr</td>
                                        <td>Nav</td>
                                        <td>38.9%</td>
                                        <td>21.9%</td>
                                        <td>24.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Tata Digital India Fund (G)</a></td>
                                        <td>5583.704 Cr</td>
                                        <td>Nav</td>
                                        <td>14.6%</td>
                                        <td>28.3%</td>
                                        <td>19.9%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Parag Parikh Flexi Cap fund.pdf" target="_blank">Parag
                                                Parikh Flexi Cap fund (G)</a></td>
                                        <td>21906.959 Cr</td>
                                        <td>Nav</td>
                                        <td>11.7%</td>
                                        <td>23%</td>
                                        <td>18.6%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">SBI Large & Midcap Fund (G)</a></td>
                                        <td>6598.829 Cr</td>
                                        <td>Nav</td>
                                        <td>9.3%</td>
                                        <td>15.6%</td>
                                        <td>17.2%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>

                                    <tr>
                                        <td><a href="pdffiles/Canara Robeco Emerging Equities fund.pdf"
                                                target="_blank">Canara Robeco Emerging Equities fund (G)</a></td>
                                        <td>13113.227 Cr</td>
                                        <td>Nav</td>
                                        <td>9.6%</td>
                                        <td>16.3%</td>
                                        <td>17.1%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Mirae Asset Tax Saver Fund.pdf" target="_blank">Mirae
                                                Asset Tax Saver Fund (G)</a></td>
                                        <td>11962.664 Cr</td>
                                        <td>Nav</td>
                                        <td>6.8%</td>
                                        <td>17.5%</td>
                                        <td>18.2%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="tab-pane fade container" id="LOANLY-3">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="">SBI Small Cap Fund (G)</a></td>
                                        <td>12097.841</td>
                                        <td>Nav</td>
                                        <td>13</td>
                                        <td>24%</td>
                                        <td>22%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Quant Small Cap - Growth.pdf" target="_blank">Quant
                                                Small Cap - GrowthS</a></td>
                                        <td>1822.46</td>
                                        <td>Nav</td>
                                        <td>14</td>
                                        <td>37</td>
                                        <td>18</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">BOI AXA Small Cap Fund - Regular Plan - Growth</a></td>
                                        <td>296.55</td>
                                        <td>Nav</td>
                                        <td>13</td>
                                        <td>30</td>
                                        <td>28</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">SBI Focused Equity Fund (G)</a></td>
                                        <td>24706.562</td>
                                        <td>Nav</td>
                                        <td>6</td>
                                        <td>13</td>
                                        <td>19</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>

                                </table>

                            </div>
                            <div class="tab-pane fade container" id="LOANLY-4">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="">HDFC Long Term Advantage Fund (G)</a></td>
                                        <td>1311.678 Cr</td>
                                        <td>Nav</td>
                                        <td>35.5%</td>
                                        <td>20.6%</td>
                                        <td>21.4%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Principal Personal Tax Saver Fund (G)</td>
                                        <td>332.677 Cr</td>
                                        <td>Nav</td>
                                        <td>31.9%</td>
                                        <td>16.8%</td>
                                        <td>19%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Quant Tax Plan (G)</a></td>
                                        <td>1316.078 Cr</td>
                                        <td>Nav</td>
                                        <td>14.4%</td>
                                        <td>31.1%</td>
                                        <td>14.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/Mirae Asset Tax Saver Fund.pdf" target="_blank">Mirae
                                                Asset Tax Saver Fund (G)</a></td>
                                        <td>11962.664 Cr</td>
                                        <td>Nav</td>
                                        <td>6.8%</td>
                                        <td>17.5%</td>
                                        <td>18.2%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">IDFC Tax Advantage (ELSS) Fund - Regular Plan -
                                                Growth</a></td>
                                        <td>3741.56</td>
                                        <td>Nav</td>
                                        <td>11</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="tab-pane fade container" id="LOANLY-5">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="">ICICI Prudential Liquid Fund (G)</a></td>
                                        <td>40402.167 Cr</td>
                                        <td>Nav</td>
                                        <td>3.4%</td>
                                        <td>4.2%</td>
                                        <td>7.2%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Aditya Birla Sun Life Money Manager Fund (G)</a></td>
                                        <td>15495.319 Cr</td>
                                        <td>Nav</td>
                                        <td>3.6%</td>
                                        <td>5.4%</td>
                                        <td>6.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>

                                    <tr>
                                        <td><a href="">ICICI Prudential Liquid Fund Institutional (G)</a></td>
                                        <td>40402.167 Cr</td>
                                        <td>Nav</td>
                                        <td>5.8%</td>
                                        <td>6.4%</td>
                                        <td>6.9%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/HDFC Overnight fund.pdf" target="_blank">HDFC Overnight
                                                fund (G)</a></td>
                                        <td>18675.838 Cr</td>
                                        <td>Nav</td>
                                        <td>3.2%</td>
                                        <td>3.6%</td>
                                        <td>5.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="tab-pane fade container" id="LOANLY-6">

                                <table class="table table-hover">
                                    <tr style="color:white;background-color:#3CB371">
                                        <th>Fund Name</th>
                                        <th>AUM Size(in Cr)</th>
                                        <th>Nav</th>
                                        <th>1 Year Return</th>
                                        <th>3 Year Return</th>
                                        <th>Since Inception Return</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/ICICI Prudential All Seasons Bond Fund Premium.pdf"
                                                target="_blank">ICICI Prudential All Seasons Bond Fund Premium (G)</a>
                                        </td>
                                        <td>5866.97 Cr</td>
                                        <td>Nav</td>
                                        <td>12.1%</td>
                                        <td>8.3%</td>
                                        <td>9.6%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">Aditya Birla Sun Life Corporate Bond Fund Discipline
                                                Advantage Plan (G)</a></td>
                                        <td>16866.436 Cr</td>
                                        <td>Nav</td>
                                        <td>5.5%</td>
                                        <td>7.9%</td>
                                        <td>8.1%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/ICICI Prudential Corporate Bond Fund Retail.pdf"
                                                target="_blank">ICICI Prudential Corporate Bond Fund Retail (G)</a>
                                        </td>
                                        <td>17579.638 Cr</td>
                                        <td>Nav</td>
                                        <td>9.5%</td>
                                        <td>7.7%</td>
                                        <td>7.9%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">ICICI Prudential Liquid Fund Institutional I (G)</a></td>
                                        <td>40402.167 Cr</td>
                                        <td>Nav</td>
                                        <td>5.9%</td>
                                        <td>6.4%</td>
                                        <td>7.5%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pdffiles/HDFC Floating Rate Debt Wholesale Plan.pdf"
                                                target="_blank">HDFC Floating Rate Debt Wholesale Plan (G)</a></td>
                                        <td>18174.076 Cr</td>
                                        <td>Nav</td>
                                        <td>3.2%</td>
                                        <td>6.2%</td>
                                        <td>7.8%</td>
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Invest
                                                Now<button></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div
                style="background-image:url('https://blog.stockedge.com/wp-content/uploads/2021/12/TOP-5-MUTUAL-FUNDS-2022-01-1024x576.png')">
                <div style="background-color:black;height:400px;opacity:0.3"></div>
            </div>
        </div>

    </section>

    <!-- End lw-tab -->
    <!-- Start section Process -->
    <center>
        <section class="section-padding">
            <div class="overlay overlay-bg-black"></div>
            <div class="container">
                <h3 class="text-custom-black fw-700">
                    Tools and Calculators</h3>
                <div class="row">
                    <div class="col-md-4">
                        <h5>Systematic Investment Plan(SIP)</h5>
                        <a href="/sipcalculator">
                            <img src="https://mf.nipponindiaim.com/LearnAndInvest/calculators/assets/images/sip-an-inc.svg"
                                style="height:300px;width:300px" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h5>Systematic Withdrawal Plan(SWP)</h5>
                        <a href="/swp">
                            <img src="https://www.kotaksecurities.com/investment-products/mutual-fund/top-mutualfund/img/mutualFund.svg"
                                style="height:300px;width:300px" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h5>One Time investment</h5>
                        <a href="/carloan">
                            <img src="https://addepar.com/assets/img/clip-financial-report.png" class="mt-5"
                                style="height:200px;width:300px" />
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </center>
    <!-- End section Process -->
    <!-- Start why choose us -->

    <section class="section-padding about-us-sec bg-warning p-relative">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="about-left-side mb-md-40 ">
                        <center>
                            <h3 class="text-custom-white fw-700">WHY HELIOSFINTECH?</h3>
                        </center>
                        <p style="color:white;font-family:Cursive;font-size:18px" class="reveal2">The word “Helios” means God of the Sun driving his chariot across the sky. Similarly,
Heliosfintech is the dawn of the new Sun in the world of financial products. It has been
launched to bring about a ray of hope to the millions of investors looking for multiplying
their investments but with negligible risk.
                        </p>
<p style="color:white;font-family:Cursive;font-size:18px" class="reveal2">With decades of experience the founders of the organization have designed multiple
investment portfolios for individuals, corporates and investors. Heliosfintech is their
hand holder and guide for effectively investing in financial aid opportunities which earn
them surplus returns.</p>
<p style="color:white;font-family:Cursive;font-size:18px" class="reveal2">Due to the expertise and personal involvement of the company they have very skilfully
covered all the necessary detailed information and documentation required to attain
the aforementioned loans, traditional investment, insurance and more. </p>
<p style="color:white;font-family:Cursive;font-size:18px" class="reveal2">“Heliosfintech” is synonymous with trust, loyalty and security of the investments of their
esteemed investors. So, whenever you wish to invest your hard-earned money and
explore the various options the first and foremost name in your mind should be
Heliosfintech. </p>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>Certified Advisor
                                        <p>
                                            <img src="https://www.6degreesit.com/wp-content/uploads/2019/02/consultancy.png"
                                                style="height:150px;width:150px" />
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>100 % Digital Procecss
                                        <p>
                                            <img src="https://vuesol.com/wp-content/uploads/2018/07/digital-automation.png"
                                                style="height:150px;width:150px" />
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p> Most Trusted Dgital Wealth Management Firm</p>
                                        <img src="https://epistemictech.com/wp-content/uploads/2022/04/ETicaret-trendleri-1024x683.jpg"
                                            style="height:100px;width:150px" />
                                </div>
                                </center>
                            </div>
                            <div class="col-lg-3">
                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>Personalized Portfolio <br>Management</p>
                                        <img src="https://cdni.iconscout.com/illustration/premium/thumb/content-writing-desk-4490946-3723238.png"
                                            style="height:100px;width:150px" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-3">
                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>Best-In-Class Research
                                        <p>
                                            <img src="https://www.techinweb.com/wp-content/uploads/2020/06/111.png"
                                                style="height:100px;width:150px" />
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>One Platform For All Your
                                            Financial Needs
                                        <p>
                                            <img src="https://www.pngkit.com/png/full/11-119966_business-png-images-service-sector-icon-png.png"
                                                style="height:100px;width:150px" />
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card cardshow"
                                    style="border-bottom-left-radius:40px;border-top-right-radius:20px;height:200px;">
                                    <center>
                                        <p>Innovative Tools For The
                                            Modern Investor</p>
                                        <img src="https://cdn-icons-png.flaticon.com/512/993/993927.png"
                                            style="height:100px;width:150px" />
                                </div>
                                </center>
                            </div>

                        </div>


                        <!-- <div class="about-list">
                            <ul>
                                <li class="text-light-white fs-14"><i class="fa fa-check"></i> Certified Advisor <img src="https://cdn2.iconfinder.com/data/icons/digital-processing-16/100/storaging_digital_processing_color_technology_business_file-512.png" style="height:80px;width:80px"/></li>
                                <li class="text-light-white fs-14"><i class="fa fa-check"></i> 100 % Digital Procecss <img src="https://cdn0.iconfinder.com/data/icons/researcher-business-1/100/psychology_researcher_color_digital_business_process_chemical-512.png" style="height:80px;width:80px"/>
                                </li>
                                <li class="text-light-white fs-14"><i class="fa fa-check"></i> Most Trusted Dgital Wealth Management Firm
                                <img src="https://www.pinclipart.com/picdir/big/98-985785_wealth-management-insurance-clipart.png" style="height:80px;width:80px"/></li>
                                <li class="text-light-white fs-14"><i class="fa fa-check"></i>Personalized Portfolio Management <img src="https://pasfa.de/wp-content/uploads/2022/03/Financial-Advisory.png" style="height:80px;width:80px"/>
                                </li> <li class="text-light-white fs-14"><i class="fa fa-check"></i>Best-In-Class Research<img src="https://contensis.uwaterloo.ca/sites/open/courses/FEFOCHE/media/images/unit2-icon-Cropped-180x180.png" style="height:80px;width:80px"/>
                                </li>
                                </li> <li class="text-light-white fs-14"><i class="fa fa-check"></i>One Platform For All Your
Financial Needs<img src="https://cdn-icons-png.flaticon.com/128/81/81752.png" style="height:80px;width:80px"/>
                                </li>
                                </li> <li class="text-light-white fs-14"><i class="fa fa-check"></i>Innovative Tools For The
Modern Investor<img src="https://cdn-icons-png.flaticon.com/512/3789/3789988.png" style="height:80px;width:80px"/>
                                </li>
                            </ul>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
        <div class="bg-light-white-skew-2 bg-custom-black"></div>
    </section>
    <!-- End why choose us -->


    <!-- Start Blog -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-lg-4" style="margin-top:50px">
                <img src="images/aboutimages.jpeg" />
            </div>
            <div class="col-lg-8">
                <h3 class="mt-5">What Is a Mutual Fund?</h3>
                <p>A mutual fund is a type of financial vehicle made up of a pool of money collected from many investors
                    to invest in securities like stocks, bonds, money market instruments, and other assets. Mutual funds
                    are operated by professional money managers, who allocate the fund's assets and attempt to produce
                    capital gains or income for the fund's investors. A mutual fund's portfolio is structured and
                    maintained to match the investment objectives stated in its prospectus.</p>
                <p>Mutual funds give small or individual investors access to professionally managed portfolios of
                    equities, bonds, and other securities. Each shareholder, therefore, participates proportionally in
                    the gains or losses of the fund. Mutual funds invest in a vast number of securities, and performance
                    is usually tracked as the change in the total market cap of the fund—derived by the aggregating
                    performance of the underlying investments.</p>
            </div>
        </div>
    </div>
    <!-- End Blog -->

<!-- 
    <div class="container">
        <center>
            <h3>Our Team</h3>
        </center>
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <section class="mx-auto my-5" style="max-width: 23rem;">

                        <div class="card testimonial-card mt-2 mb-3">
                            <div class="card-up aqua-gradient"></div>
                            <div class="avatar mx-auto white">
                                <img src="images/rajeshsir.jfif" class="rounded-circle img-fluid" alt="woman avatar">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title font-weight-bold">Rajesh Kumar</h4>
                                <hr>
                                <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos,
                                    adipisci</p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="container">
                    <section class="mx-auto my-5" style="max-width: 23rem;">

                        <div class="card testimonial-card mt-2 mb-3">
                            <div class="card-up aqua-gradient"></div>
                            <div class="avatar mx-auto white">
                                <img src="images/sir.jpeg" class="rounded-circle img-fluid" alt="woman avatar">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title font-weight-bold">Alok</h4>
                                <hr>
                                <p><i class="fas fa-quote-left"></i>Alok is a Business and Tax Consultant with over 30
                                    years experience advising Multi-national companies in the Middle East. He is Well
                                    versed with legal, tax and regulatory environment in the region. </p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div> -->




    @section('footer')
        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $('#authform').submit(function(e) {

                    e.preventDefault();

                    var form = new FormData(this);

                    // alert(form);
                    $.ajax({
                        url: "{{ url('authsubmit') }}",
                        type: "POST",
                        contentType: false,
                        processData: false,
                        data: form,

                        dataType: 'json',
                        success: function(data) {
                            if (data.message == "success") {

                                // swal("Good job!", "You clicked the button!", "success");
                                // $('#otpModal').modal('show');
                                // $('#exampleModal').modal('hide');

                            }

                        },

                    });
                });


                $('#verifyotp').click(function(e) {
                    e.preventDefault();

                    var otp = $('#authform input[name="otp"]').val();
                    var email = $('#authform input[name="email"]').val();
                    var phone = $('#authform input[name="phone"]').val();
                    // var pwd = $('#authform input[name="pwd"]').val();

                    var form = new FormData();

                    form.append('otp', otp);

                    form.append('email', email);
                    form.append('phone', phone);
                    // form.append('password', pwd);
                    $.ajax({
                        url: "{{ url('authotp') }}",
                        type: "POST",
                        contentType: false,
                        processData: false,
                        data: form,
                        dataType: 'json',
                        success: function(data) {
                            if (data.type == "success") {
                                alert(data.message);
                                window.location.href = "/register/" + data.auth_id
                                // swal("Good job!", "You clicked the button!", "success");
                                // $('#otpModal').modal('show');
                                // $('#exampleModal').modal('hide');                           

                            } else {
                                alert("OTP Incorrect");

                            }

                        },

                    });
                });
            });
        </script>
    @endsection
    @include('layout.logofooter')


    @include('layout.mutualfundfooter')
    @include('layout.footer')
