<?php require_once 'include/header1.php'; ?>

<div class="container" style="padding-top:20px;">
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://app.gs.kku.ac.th/eoffice/files/admissionsetup/06bff-untitled-1.jpg" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://www.cs.kku.ac.th/images/news/2563/08_nsc_r2/nscr21.jpg" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://cs.kku.ac.th/images/news/2562/tcas63.jpg" width="1100" height="500" >
    </div>
  </div>
  

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


        <div class="row" style="padding-top:20px;">
            <div class="col-md-12">

                <div style="box-shadow: 0 1px 2px rgba(0,0,0,.05);border-color: #ddd;margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    display: block;
    position: relative;">
                    <div style="
                    background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);
                    background-repeat: repeat-x;    
                    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;">
                        <div style="box-sizing: border-box;"> 
                        <i class="glyphicon glyphicon-edit"></i> CSS@KKU NEWS</div>
                    </div>

                    <div style="padding: 15px;">

                        <div style="padding-top: 20px;">
						<section style='width: 1000px;margin: auto;'>
						   <?php require_once 'php_action/fetchNews.php'; ?>
						   </section>
                        </div>

                    </div> 

                </div>

            </div> 
        </div>
</div>

   
<?php require_once 'include/footer1.php'; ?>

