@include('layout.header')
<style>
.searchPart
{
    height:400px;
    width:100%;
    background-image:url('https://img.freepik.com/free-photo/businessman-holding-jar-coins-with-small-tree-growing-up_28629-1395.jpg?w=826');
    background-repeat:no-repeat;
    background-size:cover;
    
}
input[type='search']
{
    width:500px;
    height:50px;
    margin-top:200px;
    background:transparent;
    font-size:30px;
    font-family:inherit;
}
table tr td 
{
    font-family:inherit;
    font-size:15px;
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
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

</style>
<!--
start search company code    !-->
<script>
    function search()
    {
        var search=document.getElementById('search').value;
        window.localStorage.setItem('search',search);
        window.location='/searchCompany';
    }
</script>
<body class="page-opt-nocalc page basicpage">
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
                                    src="http://epr.com.my/wp-content/uploads/2015/12/Pre-IPO-epr.jpg"
                                    alt="First slide" style="height:340px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block w-100"
                                    src="https://www.sbimf.com/campaign/sip_generic/images/Banner02.gif"
                                    alt="Second slide" style="height:340px">
                            </div>
                            <div class="carousel-item">
                               <img class="d-block w-100"
                                    src="http://epr.com.my/wp-content/uploads/2015/12/Pre-IPO-epr.jpg"
                                    alt="First slide" style="height:340px">
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
            </section>
            </div>


        </div>

    </div>
    <!-- Start Team Doctors -->
   
    <!-- End Team Doctors -->
    <!-- start lw-tab -->
    <center>
        <!-- <section style="height:600px;">
        <div class="container" >
            <h3 class="text-warning">Top Recommendations</h3>
           
           <div class="row" >
            
            <div class="col-lg-4" style="height:300px;">
                <h4 class="text-info">Reliance Retail</h4>
                <img src="https://logodownload.org/wp-content/uploads/2019/10/reliance-industries-logo-1.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Tata Technology</h4>
            <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
        <h4>Studds Accessories</h4>
        <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:200px"/>
            </div>
           </div>
           <div class="row">
            <div class="col-lg-4" style="height:300px;">
            <h4>Chennai Super King</h4>
        <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Care Health</h4>
        <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Capegemini Technology</h4>
        <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:200px"/>
            </div>
           </div>
</center>
        </div>
    </section> -->
 
    <!-- <div class="container-fluid mb-5">
        <div class="container text-center ">
        
            <h3 class="text-warning">Top Recommendations</h3>
           
           <div class="row" >
            
            <div class="col-lg-4" style="height:300px;">
                <h4 class="text-info">Reliance Retail</h4>
                <img src="https://logodownload.org/wp-content/uploads/2019/10/reliance-industries-logo-1.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Tata Technology</h4>
            <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
        <h4>Studds Accessories</h4>
        <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:200px"/>
            </div>
           </div>
           <div class="row">
            <div class="col-lg-4" style="height:300px;">
            <h4>Chennai Super King</h4>
        <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Care Health</h4>
        <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Capegemini Technology</h4>
        <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:200px"/>
            </div>
           </div>
            <!-- <h1 class="text-white display-3 mb-5">Logistics Services</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Track & Trace</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</center> 
<!--start recommendation-->
<section class="section-padding  doctors-team-style-2" style="padding: 0px 0px 0px 0px;">
        <div class="container">
            <div class="section-header">
                <div class="section-heading " style="margin-top:10px">
                   <h3>Top Recommendation</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 no-padding">
                    <div class="doctors-slider">
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" >
                                    <div class="lower-content p-relative text-center" >
                                        <center>
                                        <!-- <h4 class="text-info">Reliance Retail</h4> -->
                <img src="https://1000logos.net/wp-content/uploads/2021/08/Reliance-Industries-Limited-RIL-Logo-1966.png" style="height:100px;width:100px"/>
               
                     <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
                                    <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:100px"/>
                                          <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
                                    <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:100px"/>
                                          <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
                                    <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:100px"/>
                                           <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
                                    <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:100px"/>
                                        <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
                                    <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:100px"/>
                                     <div class="card-header bg-warning">
                    <h5><a href="" class="text-info">Report</a></h5>
                </div>
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
    <!-- End recommendation Process -->
    <!-- Start why choose us -->
 <!-- Header Start -->
 
 <div class="jumbotron jumbotron-fluid mt-5"  style="background-image:url('https://fundsindiacloudfront.s3.ap-south-1.amazonaws.com/LP/iPo/Group+410.svg');background-repeat:no-repeat;">
        <div class="container text-center" style="height:300px">
           
            <div class="mx-auto" style="width: 100%; max-width: 600px;margin-left:100px">
                <div class="input-group">
              
                    <input type="text" class="form-control border-dark" style="padding: 30px;" placeholder="Search By Company name" id="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3" type="submit" onclick="search()">Search </button>

                    </div>&nbsp&nbsp&nbsp&nbsp
                    <button class="btn btn-warning"><a href="">Explore All Pre_IPO</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
   <div class="container">
    <div class="row">
        
        <div class="col-lg-8">
            <h4>What is Pre-IPO?</h4>
            <p>As the name suggests before IPO and these include equity shares of a company that is not listed on BSE/NSE, these shares are traded over the counter (OTC), and they are often called OTC securities. These companies can be companies that are privately held, formerly public companies taken private in management buyouts, public companies which are not yet listed on a recognized stock exchange, etc.
</p>
<p>These companies often enjoy a healthy growth rate and have industry-leading future prospects. These unlisted shares, especially at the Pre-IPO stage, provide an excellent investment opportunity mainly focusing on long-term wealth creation. The returns can potentially beat returns by listed equities.
</p>
        </div>
        <div class="col-lg-4">
            <img src="https://static.wixstatic.com/media/00a0e0_b17cd951149d43f99a0bd7c329b4ec92~mv2.gif" style="height:300px;width:300px;"/>
        </div>
    </div>
   </div>
       <!-- Table Format!-->
    <div class=" mx-auto table-shrink" style="width:80%;margin-top:20px;">
   
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                   

                        <div class=" mb-0 fixed-solution" data-pattern="priority-columns" style="height: 500px;overflow: scroll;">
                          
                            <table class="table table-hover table-fixed" id="tech-companies-1"  >
                              
                               
                                 
                                    <tr style="color:white;background-color:#3CB371">
                                                        <th>Company Name</th>
                                                        <th>ISIN NUMBER</th>
                                                        <th>Market Price</th>
                                                        <th>Rating</th>
                                                        
                                                        <th>Process</th>
                                                    </tr>
                              
                                    <tr>
                                        
                                      
                                        <td>Bagrrys India Limited</td>
                                        <td>INE229F0102</td>
                                        <td>1995</td>
                                        <td>Rating</td>
                                  
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                             
                                    </tr>
                                    <tr>
                                        
                                        <td>Bikaji Foods International Ltd.</td>
                                        <td>INE00E101023</td>
                                        <td>400</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                     
                                    </tr>
                                    <tr>
                                        
                                        <td>Auckland jute (CDSL only)</td>
                                        <td>NULL</td>
                                        <td>55</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                     
                                    </tr>
                                    <tr>
                                       
                                        <td>Care Health Insurance(Religare)</td>
                                        <td>INE957N01016</td>
                                        <td>155</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                      
                                    </tr>
                                    <tr>
                                        
                                        <td>Goa Shipyard Limited</td>
                                        <td>INE178Z01013</td>
                                        <td>300</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                      
                                    </tr>
                                    <tr>
                                        
                                        <td>ICL Fincorp</td>
                                        <td>INE01CY01013</td>
                                        <td>29</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td>Kannur International Airport</td>
                                        <td> INE02Y401013</td>
                                        <td>122</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                               
                                    <tr>
                                        
                                        <td>Metropolitan Stock Exchange</td>
                                        <td>INE312K01010</td>
                                        <td>1.4</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>PNB Metlife (NSDL only)</td>
                                        <td>INE207O01014</td>
                                        <td>62</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Reliance Retail</td>
                                        <td>INE742O01010</td>
                                        <td>3200</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>HDFC Securities Limited</td>
                                        <td>INE700G01014</td>
                                        <td>14700</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>A V Thomas & Co. Limited</td>
                                        <td>INE944K01010</td>
                                        <td>13985</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Anugraha Valve Casting</td>
                                        <td>INE629Z01015</td>
                                        <td>455</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Arkfin Investments Private Limited</td>
                                        <td> INE06EK01017</td>
                                        <td>54</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Asian Bearings Ltd.</td>
                                        <td>NULL</td>
                                        <td>4</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Arraycom India Ltd.</td>
                                        <td>NULL</td>
                                        <td>108</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>AB Corp Ltd.</td>
                                        <td>NULL</td>
                                        <td>12</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>Ahmedabad Stock Exchange - (NSDL Only)</td>
                                        <td>NULL</td>
                                        <td>58</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Amalgamation Repco Ltd.</td>
                                        <td>NULL</td>
                                        <td>528</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Anand I-Power Limited</td>
                                        <td>NULL</td>
                                        <td>33</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                   
                                    <tr>
                                        
                                        <td>Vikram Solar Ltd.</td>
                                        <td>NULL</td>
                                        <td>370</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Transformers & Electricals Kerala Limited</td>
                                        <td>NULL</td>
                                        <td>90</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Merind Ltd.</td>
                                        <td> NULL</td>
                                        <td>390</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>Kusum Industries Gases Limited</td>
                                        <td> NULL</td>
                                        <td>592</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                               
                            </table>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
       <div class="container mt-5">
        <div class="jumbotron">
            <h4>FAQ's</h4>
                <div class="row">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse">What are unlisted shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                               <div class="collapse" id="myCollapse">
    <div class="card card-body">Equity shares of a company that are not yet listed on the Stock Exchanges like BSE,
NSE, MSEI, etc. are called unlisted equity shares.</div>
</center>
                        </div>
                    
                </div>
                <div class="row">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse1">Who sells private shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                               <div class="collapse" id="myCollapse1">
    <div class="card card-body">Existing stakeholders, promoters or employees who have equity shares of an unlisted
company and early investors who wish to get value of their investment. We create a
platform for people to sell their ESOP shares to us at attractive valuations, creating
liquidity for companies.</div>
                        </center>
                        </div>
                </div>
                  <div class="row">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btnms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse2">Are the shares of private companies in DEMAT form?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                               <div class="collapse" id="myCollapse2">
    <div class="card card-body">Yes most shares are transferable through the DEMAT process. Some private
companies might be transferred through physical mode as well.</div>
</center>
                        </div>
                     
                </div>
                 <div class="row">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn  ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse3">What are pre-IPO shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                               <div class="collapse" id="myCollapse3">
    <div class="card card-body">Pre-IPO shares are of companies who are up for an Initial Public Offering, making them
a listed company on a Stock Exchange. An IPO event is recognised as unlocking true
value out of a company’s share as it is available for every one to buy and sell on an
exchange.</div>
</center>
                        </div>
                        </div>
              
                
                 <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse4">What are the pros of Investing in Unlisted Shares? <img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse4">
    <div class="card card-body">
        1.Reasonable Valuations Unlisted/Pre IPO trade a certain discount to their listed
comparables and thus generate superior returns<br>
2.Preferred Access Invest with VCs and Private Equity Funds in companies which
are not otherwise available to retail investors<br>
3.Diversification Get access to sectors/geographies which are not currently present
in the listed markets (Eg. Startup space, Gaming Industry, IPL via CSK etc)
    </div>
    </center>
                        </div>
                        </div>
              
                
                 <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse5">What are the type of risks associated with an investment in unlisted shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse5">
    <div class="card card-body">
        1.Liquidity RiskSince the shares are not traded on an exchange, they are subject to
liquidity risk.<br>
2.Niche MarketThe market for unlisted shares is relatively smaller than the one on
a stock exchange.
    </div>
    </center>
                        </div>
                        </div>
                        
                          <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse6">What is the lock in period for any investment in unlisted shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse6">
    <div class="card card-body">
        The minimum lock in period applicable after purchase of unlisted shares is 6 months.
    </div>
    </center>
                        </div>
                        </div>
               <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse7">What is the safety regarding the payment?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse7">
    <div class="card card-body">
        1.Altius is the market leader in the unlisted space and has been covered in leading
publications (Click on link) (ET, Financial Express, Forbes etc).<br>
2.We are the preferred partners for Reliance Securities, Karvy, Edelweiss and have
worked with most other leading wealth management firms in the past.<br>
3.We also provide an option of escrow services to our clients and have ICICI and
HDFC Bank stand as our guarantors of executions.
    </div>
    </center>
                        </div>
                        </div>
                        
                         <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse8">What is the exit timeframe for any investment in unlisted shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse8">
    <div class="card card-body">
       The time frame varies from company to company and in what stage of business the
company is in. 2-5 years is considered an average timeframe for investments in unlisted
shares. If the company does not come up for an IPO, the investor can sell the shares in
the active grey market. We actively provide a two way quote in most of the stocks we
deal in.
    </div>
    </center>
                        </div>
                        </div>
                        
                            <div class="row ">
                        <div class="col-lg-12">
                            <center>
                              <button type="button" class="btn ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse9">What are the tax implications of investing in unlisted shares?<img src="https://static.wixstatic.com/media/e69387_5d81ba784eef42008cbb57cb3e412fdc~mv2.gif" style="height:50px;width:100px"/></button>
                              <div class="collapse" id="myCollapse9">
    <div class="card card-body">
       Unlisted Stock is not listed on any recognised stock exchange. Thus, the Company
does not pay STT i.e. Securities Transaction Tax on such shares. The period of holding
is 24 months.

Income Tax on Trading (Click on link) in unlisted shares is similar to the tax treatment of
other capital assets (Click on link). The following are the income tax rates on the sale of
unlisted shares of a Domestic Company or Foreign Company.<br>
1.Long Term Capital Gain – 20% with Indexation<br>
2.Short Term Capital Gain – taxed as per slab rates<br>
3.In the case of a Non-Resident, LTCG on Unlisted Stock is 10% without
Indexation
    </div>
    </center>
                        </div>
                        </div>
                        
                </div>
                
                
        </div>
    </div>
    
    
    
    
    
    
    @include('layout.logofooter')  
    
   
    @include('layout.mutualfundfooter')
    @include('layout.footer')

