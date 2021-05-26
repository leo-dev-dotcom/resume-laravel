<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img class="img-thumbnail" src="{{asset('images/pic-1.jpg')}}" alt="" width="250px" height="150px">
            </div>
       <div class="mt-5 text-white mx-5 text-justify">
           <h2 class="fw-bold st-font">Hello,</h2>
           <div class="px-4" style="line-height: 2rem;">
         <p style="text-indent: 100px">I am <b class="text-warning">Unknown Person </b>having 5 years of full-stack web dev exp for global businesses, I offer the technical expertise you are seking for you web dev position.</p>
         <p>Since earning my Bachelor's Degree in EEE form XYZ University Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente commodi, deleniti aliquam ullam quia! Eaque labore dolores mollitia quas accusantium ad neque perspiciatis eos! Nesciunt minus aliquid itaque consectetur.Natus quisquam labore placeat et, officia officiis eveniet molestias! Commodi maiores deserunt voluptas sed similique. Repellat id numquam explicabo. Enim, fugit! A maxime asperiores obcaecati porro quod deserunt rerum aspernatur?</p>      
           </div>
       </div>
       <div class="text-center">
           <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
           <a href="{{route('contact')}}" class="btn btn-outline-info mx-5 my-3">Contact</a>

        </div>
        </div>
    </x-slot>
</x-layout>