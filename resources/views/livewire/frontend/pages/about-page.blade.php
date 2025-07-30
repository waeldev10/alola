@section('title', 'عن المنصة')


<div>

    <header class="bg-gradient-to-br from-[#5597E3] to-[#2F537D] text-white shadow-md">

        <div class="container mx-auto md:px-20 px-6 py-4">

            <div class="py-20">
               
                <div class="text-sm mb-5">
                    <a wire:navigate href="{{ route('home') }}" class="hover:underline">الرئيسية</a>
                    <span>/</span>
                    <span> عن المنصة  </span>
                </div>
                <h1 class="text-2xl font-bold"> عن المنصة </h1>

            </div>

        </div>

    </header>

    <main class="container mx-auto md:px-20 px-6 py-8 bg-[#F8F8F8]">
     
        <div class=" mb-6">

            <a wire:navigate href="{{ route('home') }}"  class="flex items-center gap-2 text-[#3469CC] font-semibold hover:text-[#3469CC]/80 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#2F537D]" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1.25 8A.75.75 0 0 1 2 7.25h10.19L9.47 4.53a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H2A.75.75 0 0 1 1.25 8" clip-rule="evenodd"/></svg>
                <span>الرئيسية</span>
            </a>

        </div>

        <x-frontend.pages.about.offers />
        <x-frontend.pages.about.vision />
        <x-frontend.pages.about.message />
        <x-frontend.pages.about.goals />

    </main>

</div>