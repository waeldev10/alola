{{-- 
    <div 
    class="container mx-auto px-4 py-8"
    x-data="{
        activeSlide: 1,
        totalSlides: 2,
        autoplay: null,
        startAutoplay() {
            this.autoplay = setInterval(() => {
                this.activeSlide = this.activeSlide === this.totalSlides ? 1 : this.activeSlide + 1;
            }, 5000);
        },
        stopAutoplay() {
            clearInterval(this.autoplay);
        }
    }"
    x-init="startAutoplay()"
>
    
<nav class="mb-6">
    <ul class="flex items-center justify-center flex-wrap gap-x-8 gap-y-3 text-sm text-gray-700">
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'عرض مجمع أول إبتسامة'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عرض مجمع أول إبتسامة'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                عرض مجمع أول إبتسامة
            </a>
        </li>
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'عرض على تحاليل الأطفال'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عرض على تحاليل الأطفال'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                عرض على تحاليل الأطفال
            </a>
        </li>
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'معالجة تقويم الأسنان'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'معالجة تقويم الأسنان'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                معالجة تقويم الأسنان
            </a>
        </li>
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'عروض تقويم الأسنان'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عروض تقويم الأسنان'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                عروض تقويم الأسنان
            </a>
        </li>
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'كوبون خصم على الأشعة'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'كوبون خصم على الأشعة'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                كوبون خصم على الأشعة
            </a>
        </li>
        <li>
            <a href="#" 
               @click.prevent="activeLink = 'إعلانات خاصة'"
               :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'إعلانات خاصة'}"
               class="pb-2 transition-colors hover:text-cyan-600">
                إعلانات خاصة
            </a>
        </li>
    </ul>
</nav>
    <div 
        @mouseenter="stopAutoplay()"
        @mouseleave="startAutoplay()"
        class="relative"
    >
        <div class="relative rounded-2xl shadow-lg overflow-hidden aspect-video md:aspect-[21/8]">
            
            <div x-show="activeSlide === 1" x-transition.opacity.duration.700ms>
                <div class="absolute inset-0 bg-gradient-to-l from-cyan-600 to-blue-800 flex items-center">
                    <div class="w-1/2 text-white p-8 md:p-12 lg:p-20">
                        <img src="https://tebcan.com/front/img/logo-w.svg" alt="Logo White" class="h-12 mb-6">
                        <h1 class="text-3xl md:text-4xl font-bold leading-tight">صحتك تهمنا... وخصوماتنا توفر لك خصومات حصرية في أفضل المراكز الطبية عبر الشبكة الأولى</h1>
                    </div>
                    <div class="w-1/2 h-full">
                        <img src="https://i.ibb.co/L5k6Wxj/family-hero.png" alt="عائلة" class="absolute bottom-0 left-0 w-full h-full object-contain">
                    </div>
                </div>
            </div>

            <div x-show="activeSlide === 2" x-transition.opacity.duration.700ms style="display: none;">
                <div class="absolute inset-0 bg-gradient-to-l from-purple-600 to-indigo-800 flex items-center">
                    <div class="w-1/2 text-white p-8 md:p-12 lg:p-20">
                        <img src="https://tebcan.com/front/img/logo-w.svg" alt="Logo White" class="h-12 mb-6">
                        <h1 class="text-3xl md:text-4xl font-bold leading-tight">اكتشف أفضل العروض على خدمات الأطفال وحديثي الولادة</h1>
                    </div>
                    <div class="w-1/2 h-full">
                        <img src="https://i.ibb.co/L5k6Wxj/family-hero.png" alt="عائلة" class="absolute bottom-0 left-0 w-full h-full object-contain opacity-80">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute -bottom-2.5 left-1/2 -translate-x-1/2 flex items-center justify-center space-x-2">
            <button @click="activeSlide = 1" :class="{'w-6 bg-slate-700': activeSlide === 1, 'w-2 bg-slate-400': activeSlide !== 1}" class="h-2 rounded-full transition-all duration-300"></button>
            <button @click="activeSlide = 2" :class="{'w-6 bg-slate-700': activeSlide === 2, 'w-2 bg-slate-400': activeSlide !== 2}" class="h-2 rounded-full transition-all duration-300"></button>
        </div>
    </div>
</div> --}}



<div 
    class="container mx-auto px-4 md:px-20 py-8 bg-[#F8F8F8]"
    x-data="{
        activeSlide: 1,
        totalSlides: 2,
        activeLink: 'عرض مجمع أول إبتسامة',
        autoplay: null,
        startAutoplay() {
            this.autoplay = setInterval(() => { this.next(false); }, 5000);
        },
        stopAutoplay() {
            clearInterval(this.autoplay);
        },
        next(manual = true) {
            this.activeSlide = this.activeSlide === this.totalSlides ? 1 : this.activeSlide + 1;
            if (manual) { this.stopAutoplay(); this.startAutoplay(); }
        },
        prev(manual = true) {
            this.activeSlide = this.activeSlide === 1 ? this.totalSlides : this.activeSlide - 1;
            if (manual) { this.stopAutoplay(); this.startAutoplay(); }
        }
    }"
    x-init="startAutoplay()"
>
    
    <nav class="mb-6">
        <ul class="grid grid-cols-6 gap-5 text-sm text-gray-700">
            <li>
                <a href="#" @click.prevent="activeLink = 'عرض مجمع أول إبتسامة'"
                   :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عرض مجمع أول إبتسامة'}"
                   class="pb-2 transition-colors hover:text-cyan-600">
                    عرض مجمع أول إبتسامة
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="activeLink = 'عرض على تحاليل الأطفال'"
                   :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عرض على تحاليل الأطفال'}"
                   class="pb-2 transition-colors hover:text-cyan-600">
                    عرض على تحاليل الأطفال
                </a>
            </li>
            <li><a href="#" @click.prevent="activeLink = 'معالجة تقويم الأسنان'" :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'معالجة تقويم الأسنان'}" class="pb-2 transition-colors hover:text-cyan-600">معالجة تقويم الأسنان</a></li>
             <li><a href="#" @click.prevent="activeLink = 'عروض تقويم الأسنان'" :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'عروض تقويم الأسنان'}" class="pb-2 transition-colors hover:text-cyan-600">عروض تقويم الأسنان</a></li>
             <li><a href="#" @click.prevent="activeLink = 'كوبون خصم على الأشعة'" :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'كوبون خصم على الأشعة'}" class="pb-2 transition-colors hover:text-cyan-600">كوبون خصم على الأشعة</a></li>
             <li><a href="#" @click.prevent="activeLink = 'إعلانات خاصة'" :class="{'font-bold text-cyan-600 border-b-2 border-cyan-600': activeLink === 'إعلانات خاصة'}" class="pb-2 transition-colors hover:text-cyan-600">إعلانات خاصة</a></li>
        </ul>
    </nav>

    <div @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()" class="relative mb-2">

        <div class="relative rounded-lg  aspect-video h-[400px] w-full">

            <div x-show="activeSlide === 1" x-transition.opacity.duration.700ms>
                <div class="absolute inset-0">
                    <img src="{{ asset('assets/images/ad1.webp') }}" alt="عائلة" class="absolute rounded-lg  top-0 left-0 w-full h-full object-cover">
                </div>
            </div>
    
            <div x-show="activeSlide === 2" x-transition.opacity.duration.700ms style="display: none;">
                <div class="absolute inset-0">
                    <img src="{{ asset('assets/images/ad2.webp') }}" alt="شريحة 2" class="absolute rounded-lg  top-0 left-0 w-full h-full object-cover opacity-80">
                </div>
            </div>

        </div>     
           
        <div class="absolute -bottom-14 left-1/2 -translate-x-1/2 bg-[#F8F8F8] rounded-full px-6 py-3 flex items-center justify-center space-x-2 gap-1 z-50">
            <button @click="activeSlide = 1" :class="{'w-5 bg-[#2F537D]': activeSlide === 1, 'w-2 bg-[#CCCCCC]': activeSlide !== 1}" class="h-2 rounded-full transition-all duration-300"></button>
            <button @click="activeSlide = 2" :class="{'w-5 bg-[#2F537D]': activeSlide === 2, 'w-2 bg-[#CCCCCC]': activeSlide !== 2}" class="h-2 rounded-full transition-all duration-300"></button>
        </div>

    </div>

</div>