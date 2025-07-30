@section('title', 'صفحة البحث ')


<div>

    <header class="bg-gradient-to-br from-[#5597E3] to-[#2F537D] text-white shadow-md">

        <div class="container mx-auto md:px-20 px-6 py-4">

            <div class="py-20">
               
                <div class="text-sm mb-5">
                    <a href="/" class="hover:underline">الرئيسية</a>
                    <span>/</span>
                    <span>نتائج البحث</span>
                </div>
                <h1 class="text-2xl font-bold">نتائج البحث</h1>

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

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">

            @forelse ($results as $result)

                <div class="bg-white rounded-lg shadow-xs border border-gray-100 hover:shadow-sm transition-all duration-300 transform hover:-translate-y-1 
                overflow-hidden group p-3">
                 
                    <div class="relative h-48  rounded-lg">

                        <img src="{{ $result['image'] }}" alt="{{ $result['name'] }}" class="w-full h-full rounded-lg object-cover">
                      
                        <div class="  flex flex-col gap-2">
                            <button class="bg-white/30 absolute top-2 right-2 backdrop-blur-sm text-white w-8 h-8 rounded-full flex items-center justify-center hover:bg-white hover:text-pink-500 transition-colors">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.99 10.99 0 0 0 15 8"/></svg>
                            </button>
                            <button class="bg-white/30 absolute top-2 left-2 backdrop-blur-sm text-white gap-2 rounded-lg py-1 px-3 flex items-center justify-center hover:bg-white hover:text-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#FE9B0E]" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span> 4.5 </span>
                            </button>
                        </div>

                        <div class="absolute bottom-0 right-0 bg-white/30 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-lg
                         flex items-center gap-1 rounded-bl-none rounded-tr-none">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"><path fill="currentColor" d="m20 6l-1-1l-1.5 1.5L16 5l-1 1l1.5 1.5L15 9l1 1l1.5-1.5L19 10l1-1l-1.5-1.5z"/><circle cx="7.5" cy="14.5" r="3.5" fill="currentColor"/><circle cx="7" cy="3" r="2" fill="currentColor"/><circle cx="13" cy="7" r="1" fill="currentColor"/><circle cx="10" cy="6" r="1" fill="currentColor"/><circle cx="3" cy="3" r="1" fill="currentColor"/><circle cx="1" cy="6" r="1" fill="currentColor"/><circle cx="1" cy="9" r="1" fill="currentColor"/><circle cx="3" cy="12" r="1" fill="currentColor"/></svg>
                            <span> 1 كيلو متر </span>
                        </div>

                    </div>

                    <!-- محتوى البطاقة -->
                    <div class="pt-3">

                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-slate-800">{{ $result['name'] }}</h3>
                            <span class="text-xs font-bold px-4 py-2 rounded-lg
                                @switch($result['status_color'])
                                    @case('green') bg-green-100 text-green-700 @break
                                    @case('red') bg-red-100 text-red-700 @break
                                @endswitch
                            ">
                                {{ $result['status'] }}
                            </span>
                        </div>

                        <p class="text-sm text-gray-500 w-[80%] mt-2 line-clamp-2">في مستشفى متخصصة في معالجة جميع الامراض</p>
                        
                        <div class="flex items-center gap-2 text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></g></svg>
                            <span>حي الملقا، جدة، السعودية</span>
                        </div>

                    </div>

                </div>

            @empty

                <div class="col-span-full bg-white rounded-lg p-20 text-center">
                    <p class="text-lg font-semibold text-slate-600">عفواً، لا توجد نتائج.</p>
                </div>

            @endforelse

        </div>

    </main>

</div>