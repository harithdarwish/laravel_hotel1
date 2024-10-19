<div  class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>gallery</h2>
             </div>
          </div>
       </div>
       <div class="row">

         @foreach( $gallery as $gallery)

         <div class="col-md-3 col-sm-6" style="text-align: center;">
            <div class="gallery_img">
                <figure>
                    <img src="/gallery/{{ $gallery->image }}" alt="#" style="max-width: 100%; height: auto; width: 300px;">
                </figure>
            </div>
        </div>
        

         @endforeach
         
          </div>
       </div>
    </div>
 </div>