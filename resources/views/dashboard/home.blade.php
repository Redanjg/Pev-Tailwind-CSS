@extends('layouts.dashboard.default')
@section('navmedia')
hidden
@endsection
@section('ext-css')
<style>
@tailwind base;
@tailwind components;
@tailwind utilities;

/*Start Animations*/
@-webkit-keyframes animatetop {
	from {
		top: -300px;
		opacity: 0;
	}
	to {
		top: 0;
		opacity: 1;
	}
}
@keyframes animatetop {
	from {
		top: -300px;
		opacity: 0;
	}
	to {
		top: 0;
		opacity: 1;
	}
}
@-webkit-keyframes zoomIn {
	0% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 0.3);
		transform: scale3d(0.3, 0.3, 0.3);
	}
	50% {
		opacity: 1;
	}
}
@keyframes zoomIn {
	0% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 0.3);
		transform: scale3d(0.3, 0.3, 0.3);
	}
	50% {
		opacity: 1;
	}
}
/*End Animations*/
/*
-- Start BackGround Animation 
*/
.area {
	background: #4e54c8;
	background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
	position: absolute;
	z-index: -1;
}

.circles {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 96%;
	overflow: hidden;
}

.circles li {
	position: absolute;
	display: block;
	list-style: none;
	width: 20px;
	height: 20px;
	background: rgba(255, 255, 255, 0.2);
	animation: animate 25s linear infinite;
	bottom: -150px;
}

.circles li:nth-child(1) {
	left: 25%;
	width: 80px;
	height: 80px;
	animation-delay: 0s;
}

.circles li:nth-child(2) {
	left: 10%;
	width: 20px;
	height: 20px;
	animation-delay: 2s;
	animation-duration: 12s;
}

.circles li:nth-child(3) {
	left: 70%;
	width: 20px;
	height: 20px;
	animation-delay: 4s;
}

.circles li:nth-child(4) {
	left: 40%;
	width: 60px;
	height: 60px;
	animation-delay: 0s;
	animation-duration: 18s;
}

.circles li:nth-child(5) {
	left: 65%;
	width: 20px;
	height: 20px;
	animation-delay: 0s;
}

.circles li:nth-child(6) {
	left: 75%;
	width: 110px;
	height: 110px;
	animation-delay: 3s;
}

.circles li:nth-child(7) {
	left: 35%;
	width: 150px;
	height: 150px;
	animation-delay: 7s;
}

.circles li:nth-child(8) {
	left: 50%;
	width: 25px;
	height: 25px;
	animation-delay: 15s;
	animation-duration: 45s;
}

.circles li:nth-child(9) {
	left: 20%;
	width: 15px;
	height: 15px;
	animation-delay: 2s;
	animation-duration: 35s;
}

.circles li:nth-child(10) {
	left: 85%;
	width: 150px;
	height: 150px;
	animation-delay: 0s;
	animation-duration: 11s;
}

@keyframes animate {
	0% {
		transform: translateY(0) rotate(0deg);
		opacity: 1;
		border-radius: 0;
	}

	100% {
		transform: translateY(-1000px) rotate(720deg);
		opacity: 0;
		border-radius: 50%;
	}
}
/*
-- End BackGround Animation 
*/
</style>
@endsection
@section('homenav')
bg-gray-700
@endsection
@section('content')



  <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4 text-white"
  >	<!--Start Background Animation Body-->
  <div class="relative !w-full w-[91%] h-[24rem]  rounded-lg mx-auto">
    <div class="area !w-full w-[91%] h-[24rem]  rounded-lg mx-auto">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
	<div class="pt-10">
			<p class="text-center mb-0 pt-20 text-2xl md:text-4xl lg:text-5xl" style="font-style: italic; font-weight: 900;">Welcome Back, {{ auth()->user()->name }}</p>
					<p class="text-center m-4">Welcome to Admin Dashboard</p>
	</div>
  </div>
  <!--End Background Animation Body-->
</div>
  <div class="grid sm:grid-cols-2 gap-4 mb-4 text-white text-center">
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
	<div class="mx-10 md:mx-5 my-2 md:my-8 border-2 border-dashed rounded-lg border-gray-600 grid grid-row-4">
		<div>
			<a href="{{url('/home/media/all')}}">
			<i class="fa-solid fa-inbox fa-3x p-3 rounded-full hover:bg-gray-600" style="color: #B197FC;"></i> 
			</a>
		</div>
		<div class="mb-2 sm:mb-5 text-2xl font-extrabold">{{ $media->count() }}</div>
		<div class="mb-2 sm:mb-5">Media Registerd 2024</div>
		<div class="sm:mb-5 text-violet-400"><a href="{{url('/home/media/all')}}"><i class="fa-solid fa-arrow-up-right-from-square"></i> See Details</a></div>	
	</div>
</div>

    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
		<div class="mx-10 md:mx-5 my-2 md:my-8 border-2 border-dashed rounded-lg border-gray-600 grid grid-row-4">
			<div>
				<a href="{{url('/home/media/accepted')}}">
				<i class="fa-solid fa-check fa-3x p-3 rounded-full hover:bg-gray-600" style="color: #B197FC;"></i> 
				</a>
			</div>
			<div class="mb-2 sm:mb-5 text-2xl font-extrabold">{{ $mediaacc->count() }}</div>
			<div class="mb-2 sm:mb-5">Media Accepted 2024</div>
			<div class="sm:mb-5 text-violet-400"><a href="{{url('/home/media/accepted')}}"><i class="fa-solid fa-arrow-up-right-from-square"></i> See Details</a></div>	
		</div>
	</div>
    <div
      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
    >
	<div class="mx-10 md:mx-5 my-2 md:my-8 border-2 border-dashed rounded-lg border-gray-600 grid grid-row-4">
		<div>
			<a href="{{url('/home/media/decline')}}">
			<i class="fa-solid fa-ban fa-3x p-3 rounded-full hover:bg-gray-600" style="color: #B197FC;"></i> 
			</a>
		</div>
		<div class="mb-2 sm:mb-5 text-2xl font-extrabold">{{ $mediadec->count() }}</div>
		<div class="mb-2 sm:mb-5">Media Decline 2024</div>
		<div class="sm:mb-5 text-violet-400"><a href="{{url('/home/media/decline')}}"><i class="fa-solid fa-arrow-up-right-from-square"></i> See Details</a></div>	
	</div>
</div>
    <div
      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
    >
	<div class="mx-10 md:mx-5 my-2 md:my-8 border-2 border-dashed rounded-lg border-gray-600 grid grid-row-4">
		<div>
			<a href="{{url('/home/opcer-par')}}">
			<i class="fa-solid fa-check fa-3x p-3 rounded-full hover:bg-gray-600" style="color: #B197FC;"></i> 
			</a>
		</div>
		<div class="mb-2 sm:mb-5 text-2xl font-extrabold">{{ $mediareg->count() }}</div>
		<div class="mb-2 sm:mb-5">OPCER</div>
		<div class="sm:mb-5 text-violet-400"><a href="{{url('/home/opcer-par')}}"><i class="fa-solid fa-arrow-up-right-from-square"></i> See Details</a></div>	
	</div>
</div>
  </div>

  




@endsection