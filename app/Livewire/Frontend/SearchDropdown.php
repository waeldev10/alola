<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $suggestions = [];
    public $recentSearches = ['كوبونات مستشفى سند', 'عروض مستشفى استر سند'];

  
    public $countries = ['السعودية', 'مصر', 'الأردن'];
    public $regions = ['المنطقة الشرقية', 'منطقة الرياض'];
    public $cities = ['الدمام', 'الرياض', 'جدة'];
    public $sortOptions = ['الأحدث أولاً', 'الأقدم أولاً'];

    public $selectedCountry = '';
    public $selectedRegion = '';
    public $selectedCity = '';
    public $selectedSort = '';

    public function updatedSearch()
    {
        if (strlen($this->search) > 2) {
            $allServices = ['كوبونات مستشفى سند', 'عروض مستشفى استر سند', 'تحاليل شاملة', 'خصم على الأشعة'];
            $this->suggestions = array_filter($allServices, function($service) {
                return str_contains(strtolower($service), strtolower($this->search));
            });
        } else {
            $this->suggestions = [];
        }
    }

    public function searchWithQuery($query)
    {
        return $this->redirect(
            url: '/search?q=' . urlencode($query),
            navigate: true
        );
    }

    public function searchWithFilters()
    {
        $queryParams = [
            'q' => $this->search,
            'country' => $this->selectedCountry,
            'region' => $this->selectedRegion,
            'city' => $this->selectedCity,
            'sort' => $this->selectedSort,
        ];

        $queryParams = array_filter($queryParams);

        return $this->redirect(
            url: '/search?' . http_build_query($queryParams),
            navigate: true
        );
    }

    public function resetFilters()
    {
        $this->selectedCountry = '';
        $this->selectedRegion = '';
        $this->selectedCity = '';
        $this->selectedSort = '';
    }

    public function removeRecentSearch($term)
    {
        $this->recentSearches = array_diff($this->recentSearches, [$term]);
    }

    public function render()
    {
        return view('livewire.frontend.search-dropdown');
    }
}
