
<div
    x-data="{ open: false, showFilters: false }"
    @click.outside="open = false"
    class="relative w-80 md:w-84"
>
 
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </span>
        <input
            @focus="open = true; showFilters = false"
            wire:model.live.debounce.300ms="search"
            type="text"
            placeholder="ابحث عن خدمة..."
            class="w-full bg-gray-100 text-sm rounded-lg py-3 pr-4 pl-10 focus:outline-none focus:ring-2 focus:ring-cyan-400"
        >
    </div>

    <div
        x-show="open"
        x-transition
        class="absolute z-10 top-full mt-2 w-full md:w-[150%] left-0 bg-white rounded-xl shadow-2xl border p-4"
        style="display: none;"
    >
      
        <div class="flex items-center gap-3 mb-4">
        
            <div class="relative w-full">
                 <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                <input
                    wire:model.live.debounce.300ms="search"
                    @focus="showFilters = false"
                    type="text"
                    placeholder="ابحث عن خدمة، مستشفى، أو طبيب..."
                    class="w-full bg-gray-100 text-sm rounded-lg py-3 pr-10 pl-4 focus:outline-none focus:ring-2 focus:ring-cyan-400"
                    autofocus
                >
            </div>
            <button @click="showFilters = !showFilters" :class="{'bg-[#2F537D] text-white': showFilters, 'bg-gray-200 text-gray-600': !showFilters}" class="flex-shrink-0 p-3 rounded-lg transition-colors">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M4 8h16M6 12h12m-8 4h4m-2 4h.01" />
                </svg>
            </button>
        </div>

        <div x-show="showFilters" x-transition class="border-t border-gray-200 mt-4 pt-4">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-bold text-gray-800">تصفية بواسطة :</h4>
                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M4 8h16M6 12h12m-8 4h4m-2 4h.01" /></svg>
            </div>

            <div class="space-y-4">

                <div x-data="{ open: false }" class="relative">
                    <label class="text-sm font-semibold text-gray-600 mb-1 block">الدولة</label>
                    <button @click="open = !open" class="w-full flex items-center justify-between text-right  p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <span class="flex items-center gap-2 text-gray-400">
                           <svg class="h-5 w-5 text-[#85A5E0]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M24 12v-.006c0-3.551-1.546-6.74-4.001-8.933l-.012-.01a.6.6 0 0 0-.101-.087l-.002-.001A11.92 11.92 0 0 0 11.998.001c-3.032 0-5.8 1.126-7.91 2.984l.013-.011a.5.5 0 0 0-.07.065v.001A11.96 11.96 0 0 0 0 12.003c0 3.55 1.544 6.739 3.997 8.933l.012.01a.7.7 0 0 0 .106.097l.002.001a11.92 11.92 0 0 0 7.881 2.958a11.93 11.93 0 0 0 7.911-2.984l-.013.011a11.94 11.94 0 0 0 4.106-9.021v-.007zm-4.462 7.805a12 12 0 0 0-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261a10.82 10.82 0 0 1-3.301 7.23zM12.572 18.3c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868a18.6 18.6 0 0 1-.976 5.578l.039-.131a11.6 11.6 0 0 0-3.903-.862l-.027-.001zm0-5.728V6.844a11.9 11.9 0 0 0 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728V1.205c1.383.305 2.63 1.687 3.516 3.713c-1.034.43-2.233.711-3.487.781zm2.854-4a10.8 10.8 0 0 1 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028a10 10 0 0 0-1.724-2.737l.009.011zm-4-.492V5.7a10.8 10.8 0 0 1-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zM6.858 4.42a11 11 0 0 1-1.544-1.007l.024.018a10.7 10.7 0 0 1 3.158-1.712l.076-.023a10 10 0 0 0-1.689 2.658zm4.57 2.423v4.584H6.56c.044-1.961.385-3.827.979-5.577l-.039.131a11.7 11.7 0 0 0 3.901.861zm0 5.728v4.584a11.9 11.9 0 0 0-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713c1.034-.43 2.233-.71 3.487-.78zm-2.85 4a10.9 10.9 0 0 1-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028a9.8 9.8 0 0 0 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018a10.7 10.7 0 0 1-3.158 1.712l-.076.023a10 10 0 0 0 1.689-2.657l.025-.065zm5.7-8.151h-4.261a19.7 19.7 0 0 0-1.058-6.078l.041.138a12.4 12.4 0 0 0 1.997-1.312l-.024.018a10.8 10.8 0 0 1 3.303 7.205zM4.462 4.195c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016H1.157a10.82 10.82 0 0 1 3.301-7.23zm-3.304 8.377h4.261a19.7 19.7 0 0 0 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018a10.8 10.8 0 0 1-3.303-7.205l-.001-.028z"/></svg>
                            <span x-text="$wire.selectedCountry || 'اختار الدولة'"></span>
                        </span>
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" @click.outside="open = false" x-transition class="absolute z-20 w-full mt-1 bg-white rounded-lg shadow-lg border max-h-40 overflow-y-auto" style="display: none;">
                        @foreach($countries as $country)
                            <a href="#" wire:click.prevent="$set('selectedCountry', '{{ $country }}')" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ $country }}</a>
                        @endforeach
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <label class="text-sm font-semibold text-gray-600 mb-1 block">المنطقة</label>
                    <button @click="open = !open" class="w-full flex items-center justify-between text-right  p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-cyan-400">
                         <span class="flex items-center gap-2 text-gray-400">
                            <svg class="h-5 w-5 text-[#85A5E0]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M24 12v-.006c0-3.551-1.546-6.74-4.001-8.933l-.012-.01a.6.6 0 0 0-.101-.087l-.002-.001A11.92 11.92 0 0 0 11.998.001c-3.032 0-5.8 1.126-7.91 2.984l.013-.011a.5.5 0 0 0-.07.065v.001A11.96 11.96 0 0 0 0 12.003c0 3.55 1.544 6.739 3.997 8.933l.012.01a.7.7 0 0 0 .106.097l.002.001a11.92 11.92 0 0 0 7.881 2.958a11.93 11.93 0 0 0 7.911-2.984l-.013.011a11.94 11.94 0 0 0 4.106-9.021v-.007zm-4.462 7.805a12 12 0 0 0-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261a10.82 10.82 0 0 1-3.301 7.23zM12.572 18.3c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868a18.6 18.6 0 0 1-.976 5.578l.039-.131a11.6 11.6 0 0 0-3.903-.862l-.027-.001zm0-5.728V6.844a11.9 11.9 0 0 0 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728V1.205c1.383.305 2.63 1.687 3.516 3.713c-1.034.43-2.233.711-3.487.781zm2.854-4a10.8 10.8 0 0 1 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028a10 10 0 0 0-1.724-2.737l.009.011zm-4-.492V5.7a10.8 10.8 0 0 1-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zM6.858 4.42a11 11 0 0 1-1.544-1.007l.024.018a10.7 10.7 0 0 1 3.158-1.712l.076-.023a10 10 0 0 0-1.689 2.658zm4.57 2.423v4.584H6.56c.044-1.961.385-3.827.979-5.577l-.039.131a11.7 11.7 0 0 0 3.901.861zm0 5.728v4.584a11.9 11.9 0 0 0-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713c1.034-.43 2.233-.71 3.487-.78zm-2.85 4a10.9 10.9 0 0 1-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028a9.8 9.8 0 0 0 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018a10.7 10.7 0 0 1-3.158 1.712l-.076.023a10 10 0 0 0 1.689-2.657l.025-.065zm5.7-8.151h-4.261a19.7 19.7 0 0 0-1.058-6.078l.041.138a12.4 12.4 0 0 0 1.997-1.312l-.024.018a10.8 10.8 0 0 1 3.303 7.205zM4.462 4.195c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016H1.157a10.82 10.82 0 0 1 3.301-7.23zm-3.304 8.377h4.261a19.7 19.7 0 0 0 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018a10.8 10.8 0 0 1-3.303-7.205l-.001-.028z"/></svg>
                            <span x-text="$wire.selectedRegion || 'اختار المنطقة'"></span>
                        </span>
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                     <div x-show="open" @click.outside="open = false" x-transition class="absolute z-20 w-full mt-1 bg-white rounded-lg shadow-lg border max-h-40 overflow-y-auto" style="display: none;">
                        @foreach($regions as $region)
                            <a href="#" wire:click.prevent="$set('selectedRegion', '{{ $region }}')" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ $region }}</a>
                        @endforeach
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <label class="text-sm font-semibold text-gray-600 mb-1 block">المدينة</label>
                    <button @click="open = !open" class="w-full flex items-center justify-between text-right p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-cyan-400">
                         <span class="flex items-center gap-2 text-gray-400">
                           <svg class="h-5 w-5 text-[#85A5E0]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M24 12v-.006c0-3.551-1.546-6.74-4.001-8.933l-.012-.01a.6.6 0 0 0-.101-.087l-.002-.001A11.92 11.92 0 0 0 11.998.001c-3.032 0-5.8 1.126-7.91 2.984l.013-.011a.5.5 0 0 0-.07.065v.001A11.96 11.96 0 0 0 0 12.003c0 3.55 1.544 6.739 3.997 8.933l.012.01a.7.7 0 0 0 .106.097l.002.001a11.92 11.92 0 0 0 7.881 2.958a11.93 11.93 0 0 0 7.911-2.984l-.013.011a11.94 11.94 0 0 0 4.106-9.021v-.007zm-4.462 7.805a12 12 0 0 0-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261a10.82 10.82 0 0 1-3.301 7.23zM12.572 18.3c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868a18.6 18.6 0 0 1-.976 5.578l.039-.131a11.6 11.6 0 0 0-3.903-.862l-.027-.001zm0-5.728V6.844a11.9 11.9 0 0 0 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728V1.205c1.383.305 2.63 1.687 3.516 3.713c-1.034.43-2.233.711-3.487.781zm2.854-4a10.8 10.8 0 0 1 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028a10 10 0 0 0-1.724-2.737l.009.011zm-4-.492V5.7a10.8 10.8 0 0 1-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zM6.858 4.42a11 11 0 0 1-1.544-1.007l.024.018a10.7 10.7 0 0 1 3.158-1.712l.076-.023a10 10 0 0 0-1.689 2.658zm4.57 2.423v4.584H6.56c.044-1.961.385-3.827.979-5.577l-.039.131a11.7 11.7 0 0 0 3.901.861zm0 5.728v4.584a11.9 11.9 0 0 0-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713c1.034-.43 2.233-.71 3.487-.78zm-2.85 4a10.9 10.9 0 0 1-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028a9.8 9.8 0 0 0 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018a10.7 10.7 0 0 1-3.158 1.712l-.076.023a10 10 0 0 0 1.689-2.657l.025-.065zm5.7-8.151h-4.261a19.7 19.7 0 0 0-1.058-6.078l.041.138a12.4 12.4 0 0 0 1.997-1.312l-.024.018a10.8 10.8 0 0 1 3.303 7.205zM4.462 4.195c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016H1.157a10.82 10.82 0 0 1 3.301-7.23zm-3.304 8.377h4.261a19.7 19.7 0 0 0 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018a10.8 10.8 0 0 1-3.303-7.205l-.001-.028z"/></svg>
                            <span x-text="$wire.selectedCity || 'اختار المدينة'"></span>
                        </span>
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" @click.outside="open = false" x-transition class="absolute z-20 w-full mt-1 bg-white rounded-lg shadow-lg border max-h-40 overflow-y-auto" style="display: none;">
                        @foreach($cities as $city)
                            <a href="#" wire:click.prevent="$set('selectedCity', '{{ $city }}')" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ $city }}</a>
                        @endforeach
                    </div>
                </div>
 
                <div x-data="{ open: false }" class="relative">
                    <label class="text-sm font-semibold text-gray-600 mb-1 block">ترتيب حسب</label>
                    <button @click="open = !open" class="w-full flex items-center justify-between text-right  p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-cyan-400">
                         <span class="flex items-center gap-2 text-gray-400">
                            <svg class="h-5 w-5 text-[#85A5E0]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M24 12v-.006c0-3.551-1.546-6.74-4.001-8.933l-.012-.01a.6.6 0 0 0-.101-.087l-.002-.001A11.92 11.92 0 0 0 11.998.001c-3.032 0-5.8 1.126-7.91 2.984l.013-.011a.5.5 0 0 0-.07.065v.001A11.96 11.96 0 0 0 0 12.003c0 3.55 1.544 6.739 3.997 8.933l.012.01a.7.7 0 0 0 .106.097l.002.001a11.92 11.92 0 0 0 7.881 2.958a11.93 11.93 0 0 0 7.911-2.984l-.013.011a11.94 11.94 0 0 0 4.106-9.021v-.007zm-4.462 7.805a12 12 0 0 0-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261a10.82 10.82 0 0 1-3.301 7.23zM12.572 18.3c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868a18.6 18.6 0 0 1-.976 5.578l.039-.131a11.6 11.6 0 0 0-3.903-.862l-.027-.001zm0-5.728V6.844a11.9 11.9 0 0 0 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728V1.205c1.383.305 2.63 1.687 3.516 3.713c-1.034.43-2.233.711-3.487.781zm2.854-4a10.8 10.8 0 0 1 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028a10 10 0 0 0-1.724-2.737l.009.011zm-4-.492V5.7a10.8 10.8 0 0 1-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zM6.858 4.42a11 11 0 0 1-1.544-1.007l.024.018a10.7 10.7 0 0 1 3.158-1.712l.076-.023a10 10 0 0 0-1.689 2.658zm4.57 2.423v4.584H6.56c.044-1.961.385-3.827.979-5.577l-.039.131a11.7 11.7 0 0 0 3.901.861zm0 5.728v4.584a11.9 11.9 0 0 0-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713c1.034-.43 2.233-.71 3.487-.78zm-2.85 4a10.9 10.9 0 0 1-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028a9.8 9.8 0 0 0 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018a10.7 10.7 0 0 1-3.158 1.712l-.076.023a10 10 0 0 0 1.689-2.657l.025-.065zm5.7-8.151h-4.261a19.7 19.7 0 0 0-1.058-6.078l.041.138a12.4 12.4 0 0 0 1.997-1.312l-.024.018a10.8 10.8 0 0 1 3.303 7.205zM4.462 4.195c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016H1.157a10.82 10.82 0 0 1 3.301-7.23zm-3.304 8.377h4.261a19.7 19.7 0 0 0 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018a10.8 10.8 0 0 1-3.303-7.205l-.001-.028z"/></svg>
                            <span x-text="$wire.selectedSort || 'الأحدث أولاً'"></span>
                        </span>
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" @click.outside="open = false" x-transition class="absolute z-20 w-full mt-1 bg-white rounded-lg shadow-lg border max-h-40 overflow-y-auto" style="display: none;">
                        @foreach($sortOptions as $sort)
                            <a href="#" wire:click.prevent="$set('selectedSort', '{{ $sort }}')" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ $sort }}</a>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-2 gap-4 mt-6">
                <button wire:click="searchWithFilters" class="w-full bg-[#2F537D] text-white font-semibold py-3 rounded-lg hover:bg-slate-700 transition-colors">تصفية</button>
                <button @click="showFilters = false; $wire.call('resetFilters')" type="button" class="w-full bg-[#DAE5F1] text-[#2F537D] font-semibold py-3 rounded-lg hover:bg-gray-300 transition-colors">إعادة ضبط</button>
            </div>

        </div>

        <ul x-show="!showFilters" class="space-y-2 max-h-80 overflow-y-auto">
            @if(!empty($suggestions))

                @foreach($suggestions as $suggestion)
                    <li wire:click="searchWithQuery('{{ $suggestion }}')" class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100 cursor-pointer">
                        <span class="text-gray-700">{{ $suggestion }}</span>
                        <svg class="w-5 h-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </li>
                @endforeach

            @elseif(empty($search) && !empty($recentSearches))
              
                @foreach($recentSearches as $recent)
                    <li class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100 group">
                        <span wire:click="searchWithQuery('{{ $recent }}')" class="text-gray-700 cursor-pointer w-full">{{ $recent }}</span>
                        <button wire:click="removeRecentSearch('{{ $recent }}')" class="text-gray-400 hover:text-red-500 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        </button>
                    </li>
                @endforeach

            @elseif(strlen($search) > 2)
                 <li class="p-2 text-center text-gray-500">لا توجد نتائج مطابقة.</li>
            @endif

        </ul>

    </div>



</div>
