<x-panel class="flex gap-x-6">
  <div>
    <img src="https://picsum.photos/seed/{{ rand(0,10000)}}/100/100"  class="rounded-xl"/>
  </div>
  <div class="flex-1  flex flex-col">
    <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>
    <h3 class="font-bold text-xl mt-3 group-hover:text-blue-300  ransition-colors duration-1000">Video Producer</h3>
    <p class=" text-sm text-gray-400 mt-auto">Full Time - form $60,000</p>
  </div>
  <div class="mt-6 space-y-3">
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
  </div>
</x-panel>