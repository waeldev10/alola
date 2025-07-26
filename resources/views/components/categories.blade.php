

<div
    class="w-full  mx-auto p-6 md:px-20 md:p-8 bg-[#ECF2F8] "
    x-data="{
        activeSector: 'الصحة',
        activeDepartment: 'المستشفيات',
        scroll(refName, direction) {
            const container = this.$refs[refName];
            const scrollAmount = container.offsetWidth * direction;
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }"
>

    <div class="mb-8">

        <div class="flex justify-between items-center mb-4">

            <h2 class="flex items-center gap-2 text-xl font-bold whitespace-nowrap">
                <svg class="h-6 w-6 text-[#2F537D]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                <span class="text-gray-800 "> القطاعات </span>
            </h2>

            <div class="flex items-center gap-2">
                <button @click="scroll('sectorsSlider', -1)" class="bg-[#2F537D] p-2 rounded-full shadow-smtransition  hover:bg-[#2F537D]/80">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L16.586 13H5a1 1 0 1 1 0-2h11.586l-4.293-4.293a1 1 0 0 1 0-1.414"/></svg>
                </button>
                 <button @click="scroll('sectorsSlider', 1)" class="border-2 border-[#B5CAE3] p-2 rounded-full shadow-sm hover:bg-slate-200 transition text-[#B5CAE3] hover:text-[#B5CAE3]/80">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1"/></svg>
                  
                </button>
            </div>

        </div>

        <div class="relative overflow-hidden">
            <div x-ref="sectorsSlider" class="no-scrollbar flex items-center gap-8 font-semibold  border-b border-slate-200  pb-2 overflow-x-auto">
                <button @click="activeSector = 'الصحة'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'الصحة'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">الصحة</button>
                <button @click="activeSector = 'السياحة'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'السياحة'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">السياحة</button>
                <button @click="activeSector = 'المطاعم'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'المطاعم'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">المطاعم</button>
                <button @click="activeSector = 'التعليم'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'التعليم'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">التعليم</button>
                <button @click="activeSector = 'خدمات التسوق'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'خدمات التسوق'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">خدمات التسوق</button>
                <button @click="activeSector = 'خدمات متخصصة'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'خدمات متخصصة'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">خدمات متخصصة</button>
                <button @click="activeSector = 'الرياضة'" :class="{'text-[#2F537D] border-[#2F537D]': activeSector === 'الرياضة'}" class="pb-2 border-b-2 border-transparent transition whitespace-nowrap">الرياضة</button>
            </div>
        </div>
    </div>

    <div>

        <div class="flex justify-between items-center mb-4">

             <h2 class="flex items-center gap-2 text-xl font-bold text-slate-800">
                <svg class="h-6 w-6 text-[#2F537D]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                   <span class="text-gray-800 "> الأقسام </span>
            </h2>

            <div class="flex items-center gap-2">
                <button @click="scroll('sectorsSlider', -1)" class="bg-[#2F537D] p-2 rounded-full shadow-sm  transition  hover:bg-[#2F537D]/80">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L16.586 13H5a1 1 0 1 1 0-2h11.586l-4.293-4.293a1 1 0 0 1 0-1.414"/></svg>
                </button>
                 <button @click="scroll('sectorsSlider', 1)" class="border-2 border-[#B5CAE3] p-2 rounded-full shadow-sm hover:bg-slate-200 transition text-[#B5CAE3] hover:text-[#B5CAE3]/80">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1"/></svg>
                  
                </button>
            </div>

        </div>

        <div class="relative overflow-hidden">

            <div x-ref="departmentsSlider" class="no-scrollbar flex gap-4 overflow-x-auto pb-4">


                <button
                    @click="activeDepartment = 'المستشفيات'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'المستشفيات',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'المستشفيات'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'المستشفيات',
                                'text-[#2F537D]': activeDepartment !== 'المستشفيات'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'المستشفيات',
                            'text-gray-800': activeDepartment !== 'المستشفيات'
                        }"
                    >
                        المستشفيات
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'المجمع الطبي'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'المجمع الطبي',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'المجمع الطبي'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'المجمع الطبي',
                                'text-[#2F537D]': activeDepartment !== 'المجمع الطبي'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'المجمع الطبي',
                            'text-gray-800': activeDepartment !== 'المجمع الطبي'
                        }"
                    >
                        المجمع الطبي
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'المختبر'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'المختبر',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'المختبر'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'المختبر',
                                'text-[#2F537D]': activeDepartment !== 'المختبر'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'المختبر',
                            'text-gray-800': activeDepartment !== 'المختبر'
                        }"
                    >
                    المختبر
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'الشبكة الطبية '"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'الشبكة الطبية ',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'الشبكة الطبية '
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'الشبكة الطبية ',
                                'text-[#2F537D]': activeDepartment !== 'الشبكة الطبية '
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'الشبكة الطبية ',
                            'text-gray-800': activeDepartment !== 'الشبكة الطبية '
                        }"
                    >
                    الشبكة الطبية 
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'مركز عيادات'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'مركز عيادات',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'مركز عيادات'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'مركز عيادات',
                                'text-[#2F537D]': activeDepartment !== 'مركز عيادات'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'مركز عيادات',
                            'text-gray-800': activeDepartment !== 'مركز عيادات'
                        }"
                    >
                    مركز عيادات 
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'عيادة أسنان'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'عيادة أسنان',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'عيادة أسنان'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'عيادة أسنان',
                                'text-[#2F537D]': activeDepartment !== ' عيادة أسنان'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'عيادة أسنان',
                            'text-gray-800': activeDepartment !== 'عيادة أسنان'
                        }"
                    >
                    عيادة أسنان 
                    </span>

                </button>

                <button
                    @click="activeDepartment = 'خدمات متخصصة'"
                    class="flex-shrink-0 flex flex-col items-center gap-2 group"
                >

                    <div
                        class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                        :class="{
                            
                            'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'خدمات متخصصة',
                            'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'خدمات متخصصة'
                        }"
                    >
                        <svg
                            class="h-10 w-10 transition-colors"
                            :class="{
                                'text-white': activeDepartment === 'خدمات متخصصة',
                                'text-[#2F537D]': activeDepartment !== 'خدمات متخصصة'
                            }"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
            
                    <span
                        class="font-semibold text-sm text-center transition-colors"
                        :class="{
                            'text-[#2F537D]': activeDepartment === 'خدمات متخصصة',
                            'text-gray-800': activeDepartment !== 'خدمات متخصصة'
                        }"
                    >
                     خدمات متخصصة 
                    </span>

                </button>
                <button
                @click="activeDepartment = 'خدمات متخصصة'"
                class="flex-shrink-0 flex flex-col items-center gap-2 group"
            >

                <div
                    class="w-36 md:w-40 h-36 md:h-40 rounded-lg p-4 flex items-center justify-center transition-all duration-300 ease-in-out"
                    :class="{
                        
                        'bg-gradient-to-br from-[#5597E3] to-[#2F537D] shadow-lg -translate-y-1': activeDepartment === 'خدمات متخصصة',
                        'bg-white shadow-sm group-hover:shadow-md': activeDepartment !== 'خدمات متخصصة'
                    }"
                >
                    <svg
                        class="h-10 w-10 transition-colors"
                        :class="{
                            'text-white': activeDepartment === 'خدمات متخصصة',
                            'text-[#2F537D]': activeDepartment !== 'خدمات متخصصة'
                        }"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                </div>
        
                <span
                    class="font-semibold text-sm text-center transition-colors"
                    :class="{
                        'text-[#2F537D]': activeDepartment === 'خدمات متخصصة',
                        'text-gray-800': activeDepartment !== 'خدمات متخصصة'
                    }"
                >
                 خدمات متخصصة 
                </span>

            </button>
  


            </div>

        </div>

    </div>

    <div class="flex justify-center items-center gap-2 pt-4">
        <div class="w-6 h-2 bg-slate-700 rounded-full"></div>
        <div class="w-2 h-2 bg-slate-300 rounded-full"></div>
    </div>

</div>

<style>
    /* لإخفاء شريط التمرير مع الحفاظ على وظيفته */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>