<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
       <div class="container mt-5">
           <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
           <div class="row text-white mb-5">
               <p class="mx-auto mb-5">
                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam odit quam pariatur a sit libero perferendis optio eius minima ipsum voluptate ex unde, corporis, magnam incidunt. Quam facilis velit delectus!
               </p>
               <div class="col-sm-9 mb-5">
                   <form action="">
                       <div class="row g-3">
                        <div class="col-md-6">
<label for="inputName">Your Name</label>
<input type="text" name="inputName" id="inputName" class="form-control mt-2">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail">Your Email *</label>
                            <input type="email" name="email" id="email" class="form-control mt-2" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputSubject">Your Subject</label>
                            <input type="text" name="text" id="text" class="form-control mt-2" required>
                        </div>
                        <div class="col-ms-12 mb-3">
<label for="inputTextarea">Your Message *</label>
<textarea name="inputTextarea" id="inputTextarea" cols="30" rows="10" required class="form-control mt-2"></textarea>
                        </div>
                       </div>
                       <button class="btn btn-primary">Send</button>
                   </form>
               </div>
               <div class="col-sm-3 text-center">
                   <ul class="list-unstyled">
<li>
    <i class="fas fa-map-marker-alt fa-2x i-color"></i>
<p>Bhubaneswar, Odisha, India</p>
</li>
<li>
<i class="fas fa-phone mt-4 fa-2x i-color"></i>    
<p>+91 **********</p>
</li>   
<li>
<i class="fas fa-envelope mt-4 fa-2x i-color"></i>    
<p>contact@email.com</p>
</li>     
</ul>
               </div>
           </div>
           <div class="text-center">
               <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
               <a href="#" target="_blank"><i class="fab fa-facebook-f i-color mx-3"></i></a>
               <a href="#" target="_blank"><i class="fab fa-instagram i-color"></i></a>

            </div>
       </div>
</x-slot>
</x-layout>