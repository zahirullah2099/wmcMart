 @extends('layout.app')
 @section('content')
     {{-- banner --}}
     <div id="carouselExampleControlsNoTouching" class="carousel slide mt-2" data-bs-touch="false">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="https://wmcmarts.net/storage/app/public/banner/2024-10-14-670cc58b4d365.webp" class="d-block w-100"
                     alt="...">
             </div>
             <div class="carousel-item active">
                 <img src="https://wmcmarts.net/storage/app/public/banner/2024-10-14-670cc58b4d365.webp"
                     class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="https://wmcmarts.net/storage/app/public/banner/2024-10-14-670cd26eeb4d6.webp"
                     class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="https://wmcmarts.net/storage/app/public/banner/2024-10-13-670cbf53c1cea.webp"
                     class="d-block w-100" alt="...">
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
             data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
             data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>


     {{-- categories --}}
     <div class="container-fluid " id="cards">
         <div class="row">
             <div class="col-12 ">
                 <p id="cards_title">Categories</p>
                 <div class="d-flex justify-content-center">
                     {{-- all cards are here --}}
                     <div class="d-flex flex-wrap gap-sm-1 justify-content-center">
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>

                         {{-- cards second row --}}
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center" style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                         <div class="category-card border text-center"
                             style="width: 140px; height:150px margin-top:20px;">
                             <a href="">
                                 <img src="https://wmcmarts.net/storage/app/public/category/2024-10-21-67171cdaa3102.webp"
                                     class="img-fluid" alt="">
                                 <p>Cosmetics</p>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     {{-- footer --}}
     <div class="container-fluid" id="footer" style="background-color: #2E3A4E">
         <div class="row">
             <div class="col-md-3">
                 <h2>WMC</h2>
             </div>
             <div class="col-md-3">
                 <H4>Special</H4>
                 <ul>
                     <li>item 1</li>
                     <li>item 1</li>
                     <li>item 1</li>
                     <li>item 1</li>
                 </ul>
             </div>
             <div class="col-md-3">
                 <H4>Account & shipping info</H4>
                 <ul>
                     <li>item 1</li>
                     <li>item 1</li>
                     <li>item 1</li>
                     <li>item 1</li>
                 </ul>
             </div>
             <div class="col-md-3">
                 <h4>Newsletter</h4>
                 <p>Subscribe to our new channel to get the latest updates</p>
                 <form>
                     <div class="input-group">
                         <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email">
                         <button class="btn btn-secondary p-1" type="submit">Subscribe</button>
                     </div>
                 </form>
             </div>

             <div class="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-3">
                     <h3>Start a conversation</h3>
                     <p>+44 74 4146 3966</p>
                 </div>
                 <div class="col-md-3">
                     <div class="d-flex justify-content-between border-top ">
                         <p class="pt-3">Info@wmcmarts.net</p>
                         <p class="pt-3">Support Ticket</p>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class=" border-top ">
                         <h4>Address</h4>
                         <p class="">17 King Edwards Road, Ruislip, London, <br> United Kingdom, HA4 7AE</p>
                     </div>
                 </div>
             </div> 
         </div>
     </div>
     <div class="container-fluid">
        
        <div class="row text-center text-sm-start" id="subFooter">
            <div class="col-12 col-sm-4">
                <p>© 2024 WMCMART - All Rights Reserved.</p>
            </div>
            <div class="col-12 col-sm-4">
                <div class="icons d-flex justify-content-center justify-content-sm-start">
                    <i class="bi bi-search mx-2"></i>
                    <i class="bi bi-search mx-2"></i>
                    <i class="bi bi-search mx-2"></i>
                    <i class="bi bi-search mx-2"></i>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <p>Terms & Conditions | Privacy Policy</p>
            </div>
        </div>
     </div>
 @endsection
