
<nav class="container mx-auto px-6 md:px-20 py-5 shadow-md">

    <div class="flex items-center justify-between mb-4">
        
        <div class="flex items-center space-x-10 space-x-reverse">
            <a href="#">
                <img class="h-12 w-auto" src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
            </a>
        </div>

        <div class="flex items-center space-x-5 space-x-reverse">

     
            @livewire('frontend.search-dropdown')
            
            <div class="flex items-center space-x-4 space-x-reverse text-gray-500">
                <a href="#" class="hover:text-cyan-600">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M12.252 18.506a10.4 10.4 0 0 0 1.875-.302a5.2 5.2 0 0 0 2.342.151a1 1 0 0 1 .094-.007c.279 0 .645.16 1.179.497v-.554a.54.54 0 0 1 .28-.472q.349-.197.645-.443c.778-.65 1.217-1.518 1.217-2.436c0-.303-.048-.605-.143-.893q.354-.651.564-1.359c.45.665.692 1.45.695 2.252c0 1.248-.588 2.412-1.607 3.263q-.256.213-.535.392v1.298c0 .446-.522.703-.89.437a14 14 0 0 0-1.08-.72a3 3 0 0 0-.332-.165a6.4 6.4 0 0 1-.935.069c-1.27 0-2.445-.377-3.37-1.008m-6.72-2.595C3.927 14.568 3 12.737 3 10.775c0-4.008 3.832-7.213 8.511-7.213c4.68 0 8.513 3.204 8.513 7.213c0 4.008-3.833 7.212-8.513 7.212q-.789 0-1.555-.12c-.22.051-1.102.568-2.372 1.483c-.46.332-1.112.012-1.112-.547V16.59a8 8 0 0 1-.94-.68m4.455.592q.058 0 .117.009q.69.114 1.407.115c3.953 0 7.116-2.645 7.116-5.852c0-3.206-3.163-5.851-7.115-5.851S4.395 7.57 4.395 10.775c0 1.55.74 3.01 2.046 4.103q.494.412 1.076.74a.68.68 0 0 1 .35.589v1.276c1.005-.665 1.666-.98 2.12-.98"/><path fill="currentColor" d="M8.062 12a1.125 1.125 0 1 0 0-2.25a1.125 1.125 0 0 0 0 2.25m3.657 0a1.125 1.125 0 1 0 0-2.25a1.125 1.125 0 0 0 0 2.25m3.656 0a1.125 1.125 0 1 0 0-2.25a1.125 1.125 0 0 0 0 2.25"/></svg>
                </a>
                <a href="#" class="hover:text-cyan-600">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.99 10.99 0 0 0 15 8"/></svg>
                </a>
                <a href="#" class="hover:text-cyan-600">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 18H3a1 1 0 0 1-.894-1.447L4 12.763V10a8 8 0 1 1 16 0v2.764l1.894 3.789A1 1 0 0 1 21 18h-5m-8 0h8m-8 0a4 4 0 0 0 8 0"/></svg>
                </a>
                <a href="#" class="hover:text-cyan-600 flex items-center ">
                    <svg class="h-5 w-5 mx-2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M24 12v-.006c0-3.551-1.546-6.74-4.001-8.933l-.012-.01a.6.6 0 0 0-.101-.087l-.002-.001A11.92 11.92 0 0 0 11.998.001c-3.032 0-5.8 1.126-7.91 2.984l.013-.011a.5.5 0 0 0-.07.065v.001A11.96 11.96 0 0 0 0 12.003c0 3.55 1.544 6.739 3.997 8.933l.012.01a.7.7 0 0 0 .106.097l.002.001a11.92 11.92 0 0 0 7.881 2.958a11.93 11.93 0 0 0 7.911-2.984l-.013.011a11.94 11.94 0 0 0 4.106-9.021v-.007zm-4.462 7.805a12 12 0 0 0-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261a10.82 10.82 0 0 1-3.301 7.23zM12.572 18.3c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868a18.6 18.6 0 0 1-.976 5.578l.039-.131a11.6 11.6 0 0 0-3.903-.862l-.027-.001zm0-5.728V6.844a11.9 11.9 0 0 0 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728V1.205c1.383.305 2.63 1.687 3.516 3.713c-1.034.43-2.233.711-3.487.781zm2.854-4a10.8 10.8 0 0 1 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028a10 10 0 0 0-1.724-2.737l.009.011zm-4-.492V5.7a10.8 10.8 0 0 1-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zM6.858 4.42a11 11 0 0 1-1.544-1.007l.024.018a10.7 10.7 0 0 1 3.158-1.712l.076-.023a10 10 0 0 0-1.689 2.658zm4.57 2.423v4.584H6.56c.044-1.961.385-3.827.979-5.577l-.039.131a11.7 11.7 0 0 0 3.901.861zm0 5.728v4.584a11.9 11.9 0 0 0-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713c1.034-.43 2.233-.71 3.487-.78zm-2.85 4a10.9 10.9 0 0 1-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028a9.8 9.8 0 0 0 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018a10.7 10.7 0 0 1-3.158 1.712l-.076.023a10 10 0 0 0 1.689-2.657l.025-.065zm5.7-8.151h-4.261a19.7 19.7 0 0 0-1.058-6.078l.041.138a12.4 12.4 0 0 0 1.997-1.312l-.024.018a10.8 10.8 0 0 1 3.303 7.205zM4.462 4.195c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016H1.157a10.82 10.82 0 0 1 3.301-7.23zm-3.304 8.377h4.261a19.7 19.7 0 0 0 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018a10.8 10.8 0 0 1-3.303-7.205l-.001-.028z"/></svg>
                    <span>العربيه</span>
                </a>
            </div>
            
           
        </div>

    </div>

    <div class="flex items-center justify-between">
        
        <div class="flex items-center space-x-12 space-x-reverse">
            <div class="hidden md:flex items-center space-x-6 space-x-reverse text-sm text-[#4D4D4D]">
                <a wire:navigate href="{{ route('home') }}" 
                class="{{ request()->routeIs('home') ? 'text-[#2F537D] font-bold' : 'hover:text-[#2F537D]' }} transition-colors">الرئيسية</a>
                <a wire:navigate href="{{ route('about') }}" 
                class="{{ request()->routeIs('about') ? 'text-[#2F537D] font-bold' : 'hover:text-[#2F537D]' }} transition-colors">عن المنصة</a>
                <a href="#" class="hover:text-[#2F537D] transition-colors">المناطق</a>
                <a href="#" class="hover:text-[#2F537D] transition-colors">الكوبونات والعروض</a>
                <a href="#" class="hover:text-[#2F537D] transition-colors">الخريطة</a>
                <a href="#" class="hover:text-[#2F537D] transition-colors">الأطباء</a>
                <a href="#" class="hover:text-[#2F537D] transition-colors">البطاقات والاشتراك</a>
                
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center hover:text-[#2F537D] transition-colors">
                        <span>الدول</span>
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" @click.outside="open = false" x-transition class="absolute mt-2 w-40 bg-white rounded-md shadow-lg z-20" style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">الأردن</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">مصر</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">السعودية</a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="text-sm bg-[#2F537D] text-white font-semibold px-6 py-3 rounded-lg hover:bg-slate-700 transition-colors">
                تسجيل الدخول
        </a>
        
    </div>

</nav>



