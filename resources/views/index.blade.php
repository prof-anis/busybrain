<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
@include("includes.head")

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader">
	<div class="pulse"></div>
</div><!-- Pulse Preloader -->

 
        
        <div class="sub_header bg_1">
        	<div id="intro_txt">
			<h1>Busybrain<strong>Blog</strong> page</h1>
            <p>Engineering is fun!</p>
            </div>
		</div> <!--End sub_header -->
        
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div><!-- Position -->
 
 	<div class="container_gray_bg">
    	<div class="container margin_60">
    <div class="row">
         
     <div class="col-md-12">

     	@foreach($articles as $article)
     		<div class="post">
					<a href="{{$article['url']}}" ><img src="img/blog-1.jpg" alt="" class="img-responsive"></a>
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i>{{$article['date']}}<em><br>{{$article['creators']}}</em></li>
                                
							</ul>
						</div>
						 
					</div>
					<h2>{{$article['title']}}</h2>
					<p>
						{{ $article['abstract'] }}
					</p>
					<a href="{{$article['url']}}" class="button" >Read more</a>
				</div><!-- end post -->
                                
			 
		@endforeach
         
       
                
              <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul><!-- end pagination-->
                </div>
     </div><!-- End col-md-8-->   
     
 
	
  </div><!-- End row-->         
</div><!-- End container -->
    </div><!--End container_gray_bg -->
    
 
	
     <footer>
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-sm-6">
                	<h3>About Us</h3>
                    <p>We are committed to sponsoring science based articles, journals and publications. We believe engineering is the future and it plays a crucial part in our daily lives hence the need to encourage research on it</p>
       
                </div>
                
              <div class="col-md-4 col-sm-3" id="contact_bg">
                <h3>Contacts</h3>
                	<ul id="contact_details_footer">
                    <li id="address_footer">4 West 31st Street New York, New York - 10001<br>United States</li>
                    <li id="phone_footer"><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></li>
                    <li id="email_footer"><a href="mailto:info@removals.com">info@removals.com</a></li>
                    </ul>                   
                 </div>
            </div><!-- End row -->
          
             </div><!-- End container -->
    </footer><!-- End footer -->
    
        <div id="copy">
        	<div class="container">
            	© {{date("Y")}} - All rights reserved.
            </div>
        </div><!-- End copy -->

	

 
    


@include("includes.js")

</body>
</html>