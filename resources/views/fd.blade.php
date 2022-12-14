@include('layout.header')


<style>
   #cardhover
    {
        transition:all 5s;
      border:0px;
    }
    #pms:hover 
    {
        transform:scale(0.9);
        transition:all 3s;
    }
#cardhover:hover 
{

transform:scale(1.1);
box-shadow:2px 2px 2px 2px black;
}
.cardborderless
{border:0px;}
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
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
</style>
<body class="page-opt-nocalc page basicpage">
    <!--<div class="home-page-layout cm-page-container">-->
    <!--    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12" style="background-color:white">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-9">-->
    <!--                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
    <!--                    <ol class="carousel-indicators">-->
    <!--                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
    <!--                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
    <!--                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    <!--                    </ol>-->
    <!--                    <div class="carousel-inner">-->
    <!--                    <div class="carousel-item active">-->
    <!--                            <img class="d-block w-100"-->
    <!--                                src="https://www.bajajfinservmarkets.in/discover/wp-content/uploads/2019/10/Buyers-Guide-FD-min.jpg"-->
    <!--                                alt="First slide" style="height:300px">-->
    <!--                            <div class="carousel-caption d-none d-md-block">-->
    <!--                                <h5>...</h5>-->
    <!--                                <p>...</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item"> -->
    <!--                            <img class="d-block w-100"-->
    <!--                                src="https://paytmblogfinal.wpengine.com/wp-content/uploads/2022/04/2_Fixed-Deposit-FD-Vs-Public-Provident-Fund-PPF-Which-is-Better-800x500.png"-->
    <!--                                alt="Second slide" style="height:300px">-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item">-->
    <!--                            <img class="d-block w-100"-->
    <!--                                src="https://img.freepik.com/free-vector/investor-with-laptop-monitoring-growth-dividends-trader-sitting-stack-money-investing-capital-analyzing-profit-graphs-vector-illustration-finance-stock-trading-investment_74855-8432.jpg?t=st=1656208835~exp=1656209435~hmac=89e658753d7e56b49f8e6e64db5fe5392db8e2320c053b534786134626ef8d69&w=826"-->
    <!--                                alt="Third slide" style="height:300px">-->
    <!--                            <div class="carousel-caption d-none d-md-block">-->
    <!--                                <h5>...</h5>-->
    <!--                                <p>...</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"-->
    <!--                        data-slide="prev">-->
    <!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
    <!--                        <span class="sr-only">Previous</span>-->
    <!--                    </a>-->
    <!--                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"-->
    <!--                        data-slide="next">-->
    <!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
    <!--                        <span class="sr-only">Next</span>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--             <div class="col-md-3">-->
    <!--             <div class="container">-->
    <!--                <form style="padding: 15px;">-->
    <!--                <div class="form-group">-->
    <!--                        <label for="exampleInputEmail1">Name</label>-->
    <!--                        <input type="email" class="form-control" id="exampleInputEmail1"-->
    <!--                            aria-describedby="emailHelp" placeholder="Enter email">-->
                           
    <!--                    </div>-->
    <!--                    <div class="form-group">-->
    <!--                        <label for="exampleInputEmail1">Email address</label>-->
    <!--                        <input type="email" class="form-control" id="exampleInputEmail1"-->
    <!--                            aria-describedby="emailHelp" placeholder="Enter email">-->
                            
    <!--                    </div>-->
    <!--                    <div class="form-group">-->
    <!--                        <label for="exampleInputPassword1">Password</label>-->
    <!--                        <input type="password" class="form-control" id="exampleInputPassword1"-->
    <!--                            placeholder="Password">-->
    <!--                    </div>-->
                       
    <!--                    <button type="submit" class="btn btn-primary">Submit</button>-->
    <!--                </form>-->
    <!--            </div> -->
    <!--            </div>-->
    <!--        </section>-->
    <!--        </div>-->


    <!--    </div>-->

    <!--</div>-->
    
    <div class="home-page-layout cm-page-container">
        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12" style="background-color:white">
            <div class="row">
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://www.bajajfinservmarkets.in/discover/wp-content/uploads/2019/10/Buyers-Guide-FD-min.jpg"
                                    alt="First slide" style="height:340px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block w-100"
                                    src="https://paytmblogfinal.wpengine.com/wp-content/uploads/2022/04/2_Fixed-Deposit-FD-Vs-Public-Provident-Fund-PPF-Which-is-Better-800x500.png"
                                    alt="Second slide" style="height:340px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://img.freepik.com/free-vector/investor-with-laptop-monitoring-growth-dividends-trader-sitting-stack-money-investing-capital-analyzing-profit-graphs-vector-illustration-finance-stock-trading-investment_74855-8432.jpg?t=st=1656208835~exp=1656209435~hmac=89e658753d7e56b49f8e6e64db5fe5392db8e2320c053b534786134626ef8d69&w=826"
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

                 <div class="col-lg-3">
                    <center> <h5 class="mt-3 text-warning">Register your account</h5></center>
                    <form class="mx-5" style="margin-top:20px">
                    <div class="mb-3 mt-3">
                            <!--<label for="exampleInputEmail1"><font color="white">Name</font></label>-->
                            <!--<input type="text" class="form-control" style="background-color:#203A43;border:1px solid orange;color:white;width:100%"  id="exampleInputEmail1"-->
                            <!--    aria-describedby="emailHelp" placeholder="Enter name">-->
                           
                            <div class="input-container ">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="PAN" style="width:100%" name="usrnm">
  </div>

                        </div>
                        <div class="mb-3 mt-3">
                            <!--<label for="exampleInputEmail1"><font color="white">Email address</font></label>-->
                            <!--<input type="email" class="form-control" style="background-color:#203A43;border:1px solid orange;color:white" id="exampleInputEmail1"-->
                            <!--    aria-describedby="emailHelp" placeholder="Enter email">-->
                     <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" style="width:100%" name="email">
  </div>        
                        </div>
                         <div class="mb-3 mt-3">
                            <!--<label for="exampleInputPassword1"><font color="white">Mobile number</font></label>-->
                            <!--<input type="number" class="form-control" style="background-color:#203A43;border:1px solid orange;color:white" id="exampleInputPassword1"-->
                            <!--    placeholder="enter number">-->
                            <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" style="width:100%" name="pwd">
  </div>
                        </div>
                          <div class="mb-3 mt-3">
                            <!--<label for="exampleInputPassword1"><font color="white">Mobile number</font></label>-->
                            <!--<input type="number" class="form-control" style="background-color:#203A43;border:1px solid orange;color:white" id="exampleInputPassword1"-->
                            <!--    placeholder="enter number">-->
                            <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="Mobile" style="width:100%" name="num">
  </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="number" placeholder="Otp" name="otp" style="width:100%">
  </div>
                        </div>

                      
  <!--                      <div class="mb-3 mt-3">-->
  <!--                          <div class="input-container">-->
  <!--  <i class="fa fa-lock icon"></i>-->
  <!--  <input class="input-field" type="number" placeholder="Otp" name="otp" style="width:100%">-->
  <!--</div>-->
  <!--                      </div>-->
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> 
                </div>
        
            </div>


        </div>

    </div>
 
    
    
</section>
<section class="section-padding  doctors-team-style-2" style="    padding: 0px 0px 22px 0px;">
        <div class="container">
            <div class="section-header">
                <div class="section-heading " style="margin-top:50px">
                   <h3>Explore Fixed Deposit</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 no-padding">
                    <div class="doctors-slider">
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                        <img src="https://www.freeiconspng.com/thumbs/summary-png-icon/summary-icon-png-and-since-the-procedure-24.png" style="height:70px;width:70px"/>
                                        <h4 class="mt-5">OverView</h4>
                                     
                                        </center>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://icon-library.com/images/feature-icon/feature-icon-3.jpg" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Features</h4>
                                        
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://www.theconstructsim.com/wp-content/uploads/2021/01/Prerequisites-icon.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Eligility</h4>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://cdn-icons-png.flaticon.com/512/3310/3310653.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">How to Invest</h4>
                                       
                                    </center>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://cdn-icons-png.flaticon.com/512/2037/2037101.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Interest Rate</h4>
                                       
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://cdn2.iconfinder.com/data/icons/metro-uinvert-dock/256/Calculator.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Calculator</h4>
                                        
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/OOjs_UI_icon_articles-rtl-progressive.svg/1024px-OOjs_UI_icon_articles-rtl-progressive.svg.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Articles</h4>
                                        
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://static.thenounproject.com/png/2069228-200.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">FAQs</h4>
                                        
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://icons.veryicon.com/png/o/miscellaneous/jiankangxian/contact-us-20.png" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Contact Us</h4>
                                        
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://icon-library.com/images/terms-and-conditions-icon/terms-and-conditions-icon-3.jpg" style="height:70px;width:70px"/>
                                    <h4 class="mt-5">Terms and Conditions</h4>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>Features and benefits</h3>
                    <div class="row">
                    <div class="col-lg-6">
                        <h4>Up to 0.25% p.a. higher interest rate for senior citizens</h4>
                        <p>Manage your post -retriement expenses with an additional rate benefits on your deposit.</p>
                        <h4>Deposits Starting at Rs.15,000</h4>
                        <p>Start investing with a small amount and grow your savings with our fixed deposits.</p>
                    </div>
                    <div class="col-lg-6">
                        <h4>Flexible tenors up to 60 months</h4>
                        <p>Choose tenors ranging from 12 to 60 months,as per your convenience</p>
                        <h4>Get Secured returns up to 7.60% p.a.*</h4>
                        <p>Grow your savings with the best returns on your deposit.</p>
                    </div>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>Fixed deposit eligility criteria</h3>
                    <div class="row">
                    <div class="col-lg-6">
                        <h4>Non-resident Indians and others</h4>
                        <p>NRIs, overseas citizens of india,an persons of indian origin must be above 18 years of age and have an NRO account.</p>
                        <h4>Resident Indian Citizens</h4>
                        <p>Individuals must be above 18 years of age.For minors the FD can be booked by their guardians.</p>
                    </div>
                    <div class="col-lg-6">
                        <h4>Non-individuals</h4>
                        <p>Hindu undivided Families(HUF),sole proprietorship,partneship firms,group companies ,clubs,associations,societies,and family trusts can invest.</p>
                      
                    </div>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
   <!--Table for fixed deposit-->
   <div class="section-padding lw-tab-section p-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lw-mega-tab">
                        <ul class="nav lw-nav-tabs">
                            <li class="nav-item"> <a href="#LOANLY-1" class="nav-link active" data-toggle="tab">
                           Senior Citizens
                                </a>
                            </li>
                            <li class="nav-item"> <a href="#LOANLY-2" class="nav-link" data-toggle="tab">
                           Non-Senior Citizens
                                </a>
                            </li>
                            
                            
                           
                           
                        </ul>
                        <div class="tab-content " >
                            <div class="tab-pane container active" id="LOANLY-1">
                               
                              <div class="row">
                            <div class="col-lg-6">
                            <table class="table table-hover"> 
 <tr style="color:white;background-color:#3CB371">
                                                        <th class="mt-5"><center>Period</center></th>
                                                        <th><center>Cumulative<br>At Maturity<br>(%p.a.)</center></th>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>12-23 months</td><td>5.85</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24-35 months</td><td>6.60</td>
                                                    </tr>
                                                    <tr>
                                                        <td>36-60 months</td><td>7.20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15 month</td><td>6.05</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18 months</td><td>6.15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22 months</td><td>6.30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30 months</td><td>6.70</td>
                                                    </tr>
                                                    <tr>
                                                        <td>33 months</td><td>6.95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>44 months</td><td>7.35</td>
                                                    </tr>
                            </table>
                            </div>
                            <div class="col-lg-6">
                            <table class="table table-hover"> 
 <tr style="color:white;background-color:#3CB371">
 <tr style="color:white;background-color:#3CB371">
                                                        <th colspan="4"><center>Non-Cumulative</center></th>
</tr>
<tr style="color:white;background-color:#3CB371">
                                                        <th>Monthly</th>
                                                        <th>Quaterly</th>
                                                        <th>Half yearly</th>
                                                        <th>Annula</th>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>5.70</td>
                                                        <td>5.73</td>
                                                        <td>5.77</td>
                                                        <td>5.85</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.41</td>
                                                        <td>6.44</td>
                                                        <td>6.49</td>
                                                        <td>6.60</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.97</td>
                                                        <td>7.01</td>
                                                        <td>7.08</td>
                                                        <td>7.20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.89</td>
                                                        <td>5.92</td>
                                                        <td>5.96</td>
                                                        <td>6.05</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.98</td>
                                                        <td>6.01</td>
                                                        <td>6.06</td>
                                                        <td>6.15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.13</td>
                                                        <td>6.16</td>
                                                        <td>6.20</td>
                                                        <td>6.30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.50</td>
                                                        <td>6.54</td>
                                                        <td>6.59</td>
                                                        <td>6.70</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.74</td>
                                                        <td>6.78</td>
                                                        <td>6.83</td>
                                                        <td>6.95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.11</td>
                                                        <td>7.16</td>
                                                        <td>7.22</td>
                                                        <td>7.35</td>
                                                    </tr>

                            </table>
                            </div>
                              </div>
                                                  
                            </div>
                            <div class="tab-pane fade container" id="LOANLY-2">
                               
                            <div class="row">
                            <div class="col-lg-6">
                            <table class="table table-hover"> 
 <tr style="color:white;background-color:#3CB371">
                                                        <th class="mt-5"><center>Period</center></th>
                                                        <th><center>Cumulative<br>At Maturity<br>(%p.a.)</center></th>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>12-23 months</td><td>6.10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24-35 months</td><td>6.85</td>
                                                    </tr>
                                                    <tr>
                                                        <td>36-60 months</td><td>7.45</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15 month</td><td>6.30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18 months</td><td>6.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22 months</td><td>6.55</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30 months</td><td>6.95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>33 months</td><td>7.20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>44 months</td><td>7.60</td>
                                                    </tr>
                            </table>
                            </div>
                            <div class="col-lg-6">
                            <table class="table table-hover"> 
 <tr style="color:white;background-color:#3CB371">
 <tr style="color:white;background-color:#3CB371">
                                                        <th colspan="4"><center>Non-Cumulative</center></th>
</tr>
<tr style="color:white;background-color:#3CB371">
                                                        <th>Monthly</th>
                                                        <th>Quaterly</th>
                                                        <th>Half yearly</th>
                                                        <th>Annula</th>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>5.94</td>
                                                        <td>5.97</td>
                                                        <td>6.01</td>
                                                        <td>6.10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.64</td>
                                                        <td>6.68</td>
                                                        <td>6.74</td>
                                                        <td>6.85</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.21</td>
                                                        <td>7.25</td>
                                                        <td>7.32</td>
                                                        <td>7.45</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.13</td>
                                                        <td>6.16</td>
                                                        <td>6.20</td>
                                                        <td>6.30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.22</td>
                                                        <td>6.25</td>
                                                        <td>6.30</td>
                                                        <td>6.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.36</td>
                                                        <td>6.40</td>
                                                        <td>6.45</td>
                                                        <td>6.55</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.74</td>
                                                        <td>6.78</td>
                                                        <td>6.83</td>
                                                        <td>6.95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.97</td>
                                                        <td>7.01</td>
                                                        <td>7.08</td>
                                                        <td>7.20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.35</td>
                                                        <td>7.39</td>
                                                        <td>7.46</td>
                                                        <td>7.60</td>
                                                    </tr>

                            </table>
                            </div>
                            </div>
                           
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                <img src="https://www.pngall.com/wp-content/uploads/2017/05/Disclaimer-Symbol-Transparent.png" style="height:70px;width:100px"/>
                <h4>Exciting Update! Fixed Deposit rates are revised upwards w.e.f June 14,2022.Now start investing and earn higher returns of up to 7.60% p.a. T & C apply . To check the  latest Fixed Deposit interst rates <font color='red'><a href="">click here</a></font></h4>
</div></div>
            </div>
        </div>
    </div>
 
 
    @include('layout.logofooter')  
 
    @include('layout.footer')
