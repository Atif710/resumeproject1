<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
      <div class="mt-3">
        <div class="text-center">
           <img src="{{asset('images/atif.jpg')}}" alt="" srcset="" class="image-thumbnail" width="150px" height="150px">
        </div>
        <div class="mt-5 text-white mx=5 text-justify">
          <h1 class="fw-blod st-font">Hello,</h1>
          <div class="px-4" style="line-height: 2rem:">
            <p style="text-indent:100px;"> I am <b class="text-warning">Atif Raza</b>. I am web developer with two years experience. I do projects in PHP Laravel, HTML & CSS.I make responive website uing Bootstrap.</p>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel in sunt sed dolores totam aspernatur, blanditiis excepturi <b class="text-warning">CodewithAtif</b> dolor consequuntur. Accusantium placeat laudantium nobis voluptatem cum quo similique ad.
            </p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque in ea quos fuga numquam ut. Provident asperiores dolore delectus voluptatum, magni nisi repellat deleniti voluptatibus odio atque aliquam recusandae accusamus?
            </p>

          </div>

        </div>
        <div class="text-center">
           <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
           <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
        </div>
      </div>
    </x-slot>
</x-layout>