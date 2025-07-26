
<section class="py-12 bg-[#F8F8F8]">

    <div class="container mx-auto px-4 md:px-20">

        <div class="flex justify-between items-center mb-8">

            <h2 class="flex items-center gap-3 text-xl font-bold">
                <svg class="w-6 h-6 text-[#2F537D]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path fill="currentColor" d="M2048 640v640h-768v512H128v128H0V0h128v128h1408v512zM128 256v384h1280V256zm1024 1408v-384H128v384zm768-512V768H128v384z"/></svg>
                <span class="text-gray-800 "> الأطباء الأعلى تقييماً</span>
            </h2>

            <a href="#" class="text-sm font-semibold flex items-center text-[#2F537D]  transition-colors">
               <span class=" mx-2">  عرض الكل </span>
               <svg class="w-3 h-3 text-[#2F537D]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path fill="currentColor" d="m4 10l9 9l1.4-1.5L7 10l7.4-7.5L13 1z"/></svg>
            </a>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white rounded-lg shadow-xs border border-gray-200 p-5 flex flex-col gap-4">

                <div class="flex items-start gap-3">

                    <div>
                        <img class="w-16 h-16 rounded-lg shadow object-cover " src="{{ asset('assets/images/doctor1.jpg') }}" alt="د. أحمد عبدالرحمن">
                    </div>

                    <div class="flex justify-between w-full items-start">
                        
                        <div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-800 mb-3">د. أحمد عبدالرحمن</h3>
                                <span class="text-sm text-[#2F537D] bg-[#ECF2F8] px-3 py-1 rounded-full text-center">أنف وأذن و حنجرة</span>
                            </div>
                            <div class="text-sm space-y-2 py-2 mt-3">
                                <p><span class="font-semibold text-[#2F537D]">المركز:</span> مركز الصفوة الطبي</p>
                                <p><span class="font-semibold text-[#2F537D]">سعر الحجز:</span>
                                    <span class="font-bold text-[#2F537D] ">12.00 ر.س</span>
                                    <del class="text-gray-400">15.00 ر.س</del>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FE9B0E]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span>4.5</span>
                        </div>

                    </div>

                </div>     

                <div class="flex items-stretch gap-2 pt-2">

                    <button class="flex-grow flex items-center justify-center gap-2 bg-[#2F537D] text-white font-semibold py-3 rounded-lg hover:bg-[#2F537D]/80 transition-colors">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="currentColor" d="M9.5 14h-8C.67 14 0 13.33 0 12.5V2.38C0 1.55.67.88 1.5.88h11c.83 0 1.5.67 1.5 1.5v7.25c0 .28-.22.5-.5.5s-.5-.22-.5-.5V2.38c0-.28-.22-.5-.5-.5h-11c-.28 0-.5.22-.5.5V12.5c0 .28.22.5.5.5h8c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="currentColor" d="M4 3.62c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5m6.12 0c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5M13.5 6H.5C.22 6 0 5.78 0 5.5S.22 5 .5 5h13c.28 0 .5.22.5.5s-.22.5-.5.5m-1 10C10.57 16 9 14.43 9 12.5S10.57 9 12.5 9s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5m0-6a2.5 2.5 0 0 0 0 5a2.5 2.5 0 0 0 0-5"/><path fill="currentColor" d="M13.5 14a.47.47 0 0 1-.35-.15l-1-1a.5.5 0 0 1-.15-.35V11c0-.28.22-.5.5-.5s.5.22.5.5v1.29l.85.85c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15"/></svg>
                        <span>حجز جلسة</span>
                    </button>

                    <button class="flex-shrink-0 border border-[#2F537D] px-4 rounded-lg hover:bg-[#2F537D]/10 transition-colors">
                        <svg class="h-6 w-6 text-[#2F537D]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z"/></svg>
                    </button>

                </div>

            </div>

            <div class="bg-white rounded-lg shadow-xs border border-gray-200 p-5 flex flex-col gap-4">

                <div class="flex items-start gap-3">

                    <div>
                        <img class="w-16 h-16 rounded-lg shadow object-cover " src="{{ asset('assets/images/doctor2.jpg') }}" alt="د. أحمد عبدالرحمن">
                    </div>

                    <div class="flex justify-between w-full items-start">
                        
                        <div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-800 mb-3">د. عبدالله آل تركي<</h3>
                                <span class="text-sm text-[#2F537D] bg-[#ECF2F8] px-3 py-1 rounded-full text-center">  جراحة عامة </span>
                            </div>
                            <div class="text-sm space-y-2 py-2 mt-3">
                                <p><span class="font-semibold text-[#2F537D]">طبيب حر</span></p>
                                <p><span class="font-semibold text-[#2F537D]">سعر الحجز:</span>
                                    <span class="font-bold text-[#2F537D] ">12.00 ر.س</span>
                                    <del class="text-gray-400">15.00 ر.س</del>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FE9B0E]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span>4.5</span>
                        </div>

                    </div>

                </div>     

                <div class="flex items-stretch gap-2 pt-2">

                    <button class="flex-grow flex items-center justify-center gap-2 bg-[#2F537D] text-white font-semibold py-3 rounded-lg hover:bg-[#2F537D]/80 transition-colors">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="currentColor" d="M9.5 14h-8C.67 14 0 13.33 0 12.5V2.38C0 1.55.67.88 1.5.88h11c.83 0 1.5.67 1.5 1.5v7.25c0 .28-.22.5-.5.5s-.5-.22-.5-.5V2.38c0-.28-.22-.5-.5-.5h-11c-.28 0-.5.22-.5.5V12.5c0 .28.22.5.5.5h8c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="currentColor" d="M4 3.62c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5m6.12 0c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5M13.5 6H.5C.22 6 0 5.78 0 5.5S.22 5 .5 5h13c.28 0 .5.22.5.5s-.22.5-.5.5m-1 10C10.57 16 9 14.43 9 12.5S10.57 9 12.5 9s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5m0-6a2.5 2.5 0 0 0 0 5a2.5 2.5 0 0 0 0-5"/><path fill="currentColor" d="M13.5 14a.47.47 0 0 1-.35-.15l-1-1a.5.5 0 0 1-.15-.35V11c0-.28.22-.5.5-.5s.5.22.5.5v1.29l.85.85c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15"/></svg>
                        <span>حجز جلسة</span>
                    </button>

                    <button class="flex-shrink-0 border border-[#2F537D] px-4 rounded-lg hover:bg-[#2F537D]/10 transition-colors">
                        <svg class="h-6 w-6 text-[#2F537D]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z"/></svg>
                    </button>

                </div>

            </div>

            <div class="bg-white rounded-lg shadow-xs border border-gray-200 p-5 flex flex-col gap-4">

                <div class="flex items-start gap-3">

                    <div>
                        <img class="w-16 h-16 rounded-lg bg-grat-300 shadow object-cover " src="{{ asset('assets/images/doctor3.jpg') }}" alt="د. أحمد عبدالرحمن">
                    </div>
            
                    <div class="flex justify-between w-full items-start">
                        
                        <div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-800 mb-3">د. أحمد عبدالرحمن</h3>
                                <span class="text-sm text-[#2F537D] bg-[#ECF2F8] px-3 py-1 rounded-full text-center">أنف وأذن و حنجرة</span>
                            </div>
                            <div class="text-sm space-y-2 py-2 mt-3">
                                <p><span class="font-semibold text-[#2F537D]">المركز:</span> مركز الصفوة الطبي</p>
                                <p><span class="font-semibold text-[#2F537D]">سعر الحجز:</span>
                                    <span class="font-bold text-[#2F537D] ">12.00 ر.س</span>
                                    <del class="text-gray-400">15.00 ر.س</del>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FE9B0E]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span>4.5</span>
                        </div>

                    </div>

                </div>     

                <div class="flex items-stretch gap-2 pt-2">

                    <button class="flex-grow flex items-center justify-center gap-2 bg-[#2F537D] text-white font-semibold py-3 rounded-lg hover:bg-[#2F537D]/80 transition-colors">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="currentColor" d="M9.5 14h-8C.67 14 0 13.33 0 12.5V2.38C0 1.55.67.88 1.5.88h11c.83 0 1.5.67 1.5 1.5v7.25c0 .28-.22.5-.5.5s-.5-.22-.5-.5V2.38c0-.28-.22-.5-.5-.5h-11c-.28 0-.5.22-.5.5V12.5c0 .28.22.5.5.5h8c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="currentColor" d="M4 3.62c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5m6.12 0c-.28 0-.5-.22-.5-.5V.5c0-.28.22-.5.5-.5s.5.22.5.5v2.62c0 .28-.22.5-.5.5M13.5 6H.5C.22 6 0 5.78 0 5.5S.22 5 .5 5h13c.28 0 .5.22.5.5s-.22.5-.5.5m-1 10C10.57 16 9 14.43 9 12.5S10.57 9 12.5 9s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5m0-6a2.5 2.5 0 0 0 0 5a2.5 2.5 0 0 0 0-5"/><path fill="currentColor" d="M13.5 14a.47.47 0 0 1-.35-.15l-1-1a.5.5 0 0 1-.15-.35V11c0-.28.22-.5.5-.5s.5.22.5.5v1.29l.85.85c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15"/></svg>
                        <span>حجز جلسة</span>
                    </button>

                    <button class="flex-shrink-0 border border-[#2F537D] px-4 rounded-lg hover:bg-[#2F537D]/10 transition-colors">
                        <svg class="h-6 w-6 text-[#2F537D]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z"/></svg>
                    </button>

                </div>

            </div>

            {{-- <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col gap-4">
                 <div class="flex justify-between items-start">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-slate-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">د. أحمد عبدالرحمن</h3>
                            <p class="text-sm text-blue-600">أنف وأذن و حنجرة</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-orange-400 font-bold flex-shrink-0">
                        <span>4.5</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    </div>
                </div>
                <div class="text-sm text-slate-600 space-y-2 py-2">
                    <p><span class="font-semibold text-slate-700">المركز:</span> مركز الصفوة الطبي</p>
                    <p><span class="font-semibold text-slate-700">سعر الحجز:</span>
                        <del class="text-slate-400">15.00 ر.س</del>
                        <span class="font-bold text-slate-800 text-base">12.00 ر.س</span>
                    </p>
                </div>
                <div class="flex items-stretch gap-2 pt-2 border-t border-slate-100">
                    <button class="flex-grow flex items-center justify-center gap-2 bg-slate-700 text-white font-semibold py-3 rounded-lg hover:bg-slate-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                        حجز جلسة
                    </button>
                    <button class="flex-shrink-0 border border-slate-300 text-slate-500 px-4 rounded-lg hover:bg-slate-100 transition-colors">
                        &lt;&lt;
                    </button>
                </div>
            </div> --}}

        </div>

    

    </div>

</section>