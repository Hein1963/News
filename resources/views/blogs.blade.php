<x-layout>
    <x-hero/> 
    <x-section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory" />
    <x-subscribe/>
</x-layout>