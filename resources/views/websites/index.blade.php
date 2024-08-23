@extends('layouts.main')
@section('main-section')



<section id="center" class="center_home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="img/1.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-md-block">
           <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
           <h1>Vestibulum Arcu Eget Aptent Semper</h1>
           <p>There are many variations of passages available but the majority have suffered
   alteration in some form by injected humour or randomised words.</p>
           <ul class="mb-0 mt-3">
            <li  class="d-inline-block me-2"><a class="button_1" href="#">CONTACT US <i class="fa fa-long-arrow-right ms-1"></i></a></li>
            <li class="d-inline-block"><a class="button_2" href="#">ABOUT US  <i  class="fa fa-long-arrow-right ms-1"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="carousel-item">
         <img src="img/2.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-md-block">
           <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
           <h1>Vestibulum Arcu Eget Aptent Semper</h1>
           <p>There are many variations of passages available but the majority have suffered
   alteration in some form by injected humour or randomised words.</p>
           <ul class="mb-0 mt-3">
            <li  class="d-inline-block me-2"><a class="button_1" href="#">CONTACT US <i class="fa fa-long-arrow-right ms-1"></i></a></li>
            <li class="d-inline-block"><a class="button_2" href="#">ABOUT US  <i  class="fa fa-long-arrow-right ms-1"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="carousel-item">
         <img src="img/3.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-md-block">
           <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
           <h1>Vestibulum Arcu Eget Aptent Semper</h1>
           <p>There are many variations of passages available but the majority have suffered
   alteration in some form by injected humour or randomised words.</p>
           <ul class="mb-0 mt-3">
            <li  class="d-inline-block me-2"><a class="button_1" href="#">CONTACT US <i class="fa fa-long-arrow-right ms-1"></i></a></li>
            <li class="d-inline-block"><a class="button_2" href="#">ABOUT US  <i  class="fa fa-long-arrow-right ms-1"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
   </section>

   <section id="upcome" class="p_3 bg-light">
    <div class="container-xl">
     <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0">UPCOMING MOVIES</h3>
        <hr class="line me-auto ms-auto">
        <ul class="nav nav-tabs justify-content-center border-0 mb-0 mt-4">
       <li class="nav-item">
           <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
               <span class="d-md-block">Upcoming</span>
           </a>
       </li>
       <li class="nav-item">
           <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
               <span class="d-md-block">Released</span>
           </a>
       </li>
       <li class="nav-item">
           <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link border-0">
               <span class="d-md-block">Best of library</span>
           </a>
       </li>

   </ul>
      </div>
     </div>
     <div class="row upcome_2 mt-4">
       <div class="tab-content">
       <div class="tab-pane active" id="home">
          <div class="upcome_2i row">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/4.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/5.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>
       <div class="tab-pane" id="profile">
           <div class="upcome_2i row">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/4.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/5.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>

       </div>
       <div class="tab-pane" id="settings">
            <div class="upcome_2i row">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/4.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/5.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>

   </div>
     </div>
    </div>
   </section>

   <section id="release">
    <div class="release_m clearfix">
      <div class="container-xl">
        <div class="row release_1">
         <div class="col-md-7">
          <div class="release_1i">

          </div>
         </div>
         <div class="col-md-5">
          <div class="release_1i1 text-center">
           <h6 class="text-uppercase bg_red d-inline-block p-2 pe-4 ps-4 text-white">Releasing On</h6>
           <h3 class="text-white icon_line mt-3 text-uppercase">22 June 2022</h3>
           <h1 class="text-uppercase font_50 text-white mt-3">One Men Army</h1>
           <h4 class="text-white mt-3 mb-0">A Presenter Film Production</h4>
          </div>
         </div>
        </div>
      </div>
    </div>
   </section>

   <section id="popular" class="p_3 bg-light">
    <div class="container-xl">
     <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0">POPULAR MOVIES</h3>
        <hr class="line me-auto ms-auto">
        <ul class="nav nav-tabs justify-content-center border-0 mb-0 mt-4">
       <li class="nav-item">
           <a href="#homeo" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
               <span class="d-md-block">Upcoming</span>
           </a>
       </li>
       <li class="nav-item">
           <a href="#profileo" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
               <span class="d-md-block">Released</span>
           </a>
       </li>
       <li class="nav-item">
           <a href="#settingso" data-bs-toggle="tab" aria-expanded="false" class="nav-link border-0">
               <span class="d-md-block">Best of library</span>
           </a>
       </li>

   </ul>
      </div>
     </div>
     <div class="row upcome_2 mt-4">
       <div class="tab-content">
       <div class="tab-pane active" id="homeo">
          <div class="upcome_2i row">
            <div class="col-md-6">
             <div class="popular_m clearfix position-relative">
              <div class="popular_m1 clearfix">
               <img src="img/13.jpg" class="w-100" height="435" alt="abc">
              </div>
              <div class="popular_m2 clearfix position-absolute w-100 top-0">
                 <div class="popular_m2i clearfix p-4">
                    <span class="d-block text-center play"><a class="col_red" href="#"><i class="fa fa-play-circle"></i></a></span>
                <h6 class="text-white">Drama, Action <span class="ms-3 me-2">Rating:</span>
                <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <h2 class="text-white mt-3 text-uppercase">terrorise of the year</h2>
                <p class="text-white mb-0">Release on cinema : 27 july 2022</p>
                 </div>
              </div>
             </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>
       <div class="tab-pane" id="profileo">
           <div class="upcome_2i row">
            <div class="col-md-6">
             <div class="popular_m clearfix position-relative">
              <div class="popular_m1 clearfix">
               <img src="img/14.jpg" class="w-100" height="435" alt="abc">
              </div>
              <div class="popular_m2 clearfix position-absolute w-100 top-0">
                 <div class="popular_m2i clearfix p-4">
                    <span class="d-block text-center play"><a class="col_red" href="#"><i class="fa fa-play-circle"></i></a></span>
                <h6 class="text-white">Drama, Action <span class="ms-3 me-2">Rating:</span>
                <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <h2 class="text-white mt-3 text-uppercase">terrorise of the year</h2>
                <p class="text-white mb-0">Release on cinema : 27 july 2022</p>
                 </div>
              </div>
             </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/4.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/5.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>

       </div>
       <div class="tab-pane" id="settingso">
            <div class="upcome_2i row">
            <div class="col-md-6">
             <div class="popular_m clearfix position-relative">
              <div class="popular_m1 clearfix">
               <img src="img/15.jpg" class="w-100" height="435" alt="abc">
              </div>
              <div class="popular_m2 clearfix position-absolute w-100 top-0">
                 <div class="popular_m2i clearfix p-4">
                    <span class="d-block text-center play"><a class="col_red" href="#"><i class="fa fa-play-circle"></i></a></span>
                <h6 class="text-white">Drama, Action <span class="ms-3 me-2">Rating:</span>
                <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <h2 class="text-white mt-3 text-uppercase">terrorise of the year</h2>
                <p class="text-white mb-0">Release on cinema : 27 july 2022</p>
                 </div>
              </div>
             </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="upcome_2i row mt-4">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>

   </div>
     </div>
    </div>
   </section>

   <section id="trend">
    <div class="trend_m clearfix bg_light pt-4 pb-5">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0 text-white">TOP MOVIES</h3>
        <hr class="line me-auto ms-auto">
      </div>
     </div>
        <div class="trend_m1 row mt-3">
         <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
          <div class="upcome_2i row">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/4.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/5.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/6.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/7.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>
       <div class="carousel-item">
           <div class="upcome_2i row">
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/8.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Eget Nulla</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/9.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Semp Porta</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/10.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Quis Sem</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div class="upcome_2i1 clearfix position-relative">
              <div class="upcome_2i1i clearfix">
               <img src="img/11.jpg" class="w-100" alt="abc">
              </div>
              <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
               <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
               <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
              </div>
             </div>
              <div class="upcome_2i_last bg-white p-3">
                <div class="upcome_2i_lasti row">
                 <div class="col-md-9 col-9">
                  <div class="upcome_2i_lastil">
                   <h5><a href="#">Lorem Amet</a></h5>
                   <h6 class="text-muted">Drama, Action</h6>
                   <span class="col_red">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                  </div>
                 </div>
                 <div class="col-md-3 p-0 col-3">
                  <div class="upcome_2i_lastir pt-3">
                    <span><a class="col_red rounded" href="#"><i class="fa fa-shopping-cart"></i></a></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
        </div>
      </div>
    </div>
   </section>

   <section id="news" class="p_3 bg-light">
    <div class="container-xl">
     <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0">LATEST NEWS</h3>
        <hr class="line me-auto ms-auto">
      </div>
     </div>
     <div class="row news_1 mt-3">
      <div class="col-md-6">
       <div class="news_1l">
         <div class="popular_m clearfix position-relative">
              <div class="popular_m1 clearfix">
               <img src="img/18.jpg" class="w-100" height="519" alt="abc">
              </div>
              <div class="popular_m2 clearfix position-absolute w-100 top-0 bg_dark">
                 <div class="popular_m2i clearfix p-4">
                    <span class="d-block text-center play"><a class="col_red" href="#"><i class="fa fa-play-circle"></i></a></span>
                <h6 class="col_red">29 Jan 2021</h6>
                <h2 class="text-white mt-3 text-uppercase">THE NEWS OF THEATER</h2>
                <h6 class="mb-0 mt-3">  <i class="fa fa-thumbs-up col_red me-1"></i> <a class="text-light" href="#">110 Like</a> <span class="text-muted me-2 ms-2">|</span>  <i class="fa fa-comments col_red me-1"></i> <a class="text-light" href="#">32 comments</a></h6>
                 </div>
              </div>
             </div>
       </div>
      </div>
      <div class="col-md-6">
       <div class="news_1r">
         <div class="news_1ri row">
          <div class="col-md-5 pe-0">
           <div class="news_1ril">
             <div class="grid clearfix">
                     <figure class="effect-jazz mb-0">
                       <a href="#"><img src="img/16.jpg" height="251" class="w-100" alt="abc"></a>
                     </figure>
                 </div>
           </div>
          </div>
          <div class="col-md-7 ps-0">
           <div class="news_1rir pt-4 pb-4 ps-3 pe-3 bg-white">
            <h4 class="fs-5"><a href="#">THE NEWS OF THEATER</a></h4>
            <h6 class="col_red">29 Jan 2021</h6>
            <p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <h6 class="mb-0">  <i class="fa fa-thumbs-up col_red me-1"></i> <a href="#">129 Like</a> <span class="text-muted me-2 ms-2">|</span>  <i class="fa fa-comments col_red me-1"></i> <a href="#">58 comments</a></h6>
           </div>
          </div>
         </div>
         <div class="news_1ri row mt-3">
          <div class="col-md-5 pe-0">
           <div class="news_1ril">
             <div class="grid clearfix">
                     <figure class="effect-jazz mb-0">
                       <a href="#"><img src="img/17.jpg" height="251" class="w-100" alt="abc"></a>
                     </figure>
                 </div>
           </div>
          </div>
          <div class="col-md-7 ps-0">
           <div class="news_1rir pt-4 pb-4 ps-3 pe-3 bg-white">
            <h4 class="fs-5"><a href="#">THE NEWS OF THEATER</a></h4>
            <h6 class="col_red">22 May 2022</h6>
            <p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <h6 class="mb-0">  <i class="fa fa-thumbs-up col_red me-1"></i> <a href="#">127 Like</a> <span class="text-muted me-2 ms-2">|</span>  <i class="fa fa-comments col_red me-1"></i> <a href="#">42 comments</a></h6>
           </div>
          </div>
         </div>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section id="events" class="p_3 pb-5">
    <div class="container-xl">
     <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0">FEATURED EVENTS</h3>
        <hr class="line me-auto ms-auto">
      </div>
     </div>
     <div class="row events_1 mt-3">
      <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
          <div class="events_1i row">
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/19.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/20.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/21.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
          </div>
       </div>
       <div class="carousel-item">
           <div class="events_1i row">
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/22.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/23.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
           <div class="col-md-4">
            <div class="events_1i1 clearfix position-relative">
             <div class="events_1i1i clearfix">
               <img src="img/24.jpg" alt="abc" class="w-100">
             </div>
             <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
               <h6 class="mb-0"><a class="button_1" href="#">Book Now </a></h6>
             </div>
            </div>
            <div class="events_1i2 clearfix p-3 pt-4 pb-4 bg-light">
             <h5 class="text-uppercase"><a href="#">Music Event in India</a></h5>
             <h6>Delhi & Mumbai
                <span class="col_red pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   </span>
                </h6>
                <hr>
                <h6 class="mb-0">June 09 - July 06 <span class="pull-right">09:00-13:00 pm</span></h6>
            </div>
           </div>
          </div>
       </div>
     </div>
   </div>
     </div>
    </div>
   </section>

   <section id="gallery" class="p_3 bg-light">
    <div class="container-xl">
     <div class="row upcome_1 text-center">
      <div class="col-md-12">
        <h3 class="mb-0">VIDEO & PHOTOS</h3>
        <hr class="line me-auto ms-auto">
      </div>
     </div>
     <div class="row gallery_1 mt-3">
      <div class="col-md-2 pe-0">
       <div class="gallery_1lm clearfix position-relative">
        <div class="gallery_1lm1 clearfix">
         <img src="img/25.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
       <div class="gallery_1lm clearfix position-relative mt-3">
        <div class="gallery_1lm1 clearfix">
         <img src="img/26.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
       <div class="gallery_1lm clearfix position-relative mt-3">
        <div class="gallery_1lm1 clearfix">
         <img src="img/27.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
      </div>
      <div class="col-md-8">
       <div class="gallery_1m">
         <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="img/1.jpg" height="482" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="img/2.jpg" height="482" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="img/3.jpg" height="482" class="d-block w-100" alt="...">
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
       </div>
      </div>
      <div class="col-md-2 ps-0">
       <div class="gallery_1lm clearfix position-relative">
        <div class="gallery_1lm1 clearfix">
         <img src="img/28.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
       <div class="gallery_1lm clearfix position-relative mt-3">
        <div class="gallery_1lm1 clearfix">
         <img src="img/29.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
       <div class="gallery_1lm clearfix position-relative mt-3">
        <div class="gallery_1lm1 clearfix">
         <img src="img/30.jpg" class="w-100" height="150" alt="abc">
        </div>
        <div class="gallery_1lm2 clearfix position-absolute w-100 text-center top-0 bg_light h-100">
         <span><a class="col_red bg-white d-inline-block text-center" href="#"><i class="fa fa-search"></i></a></span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section id="subs" class="pt-5 pb-5 bg_red">
    <div class="container-xl">
      <div class="row subs_1">
       <div class="col-md-4">
        <div class="subs_1l">
         <h4 class="text-white mb-0 mt-2">GET UPDATE SIGN UP NOW !</h4>
        </div>
       </div>
       <div class="col-md-8">
        <div class="subs_1r">
          <div class="input-group">
                   <input type="text" class="form-control bg-transparent" placeholder="Enter Your Email">
                   <span class="input-group-btn">
                       <button class="btn btn-primary bg-white col_red" type="button">
                           Submit </button>
                   </span>
           </div>
        </div>
       </div>
      </div>
    </div>
   </section>



@endsection
