@props(['job', 'width' => '90'])

<x-panel class="flex gap-x-6">
  <div>
    <img src="{{ asset('storage/' . $job->employer->logo) }}" class="rounded-xl" width="{{$width}}"/>
  </div>  
  <div class="flex-1  flex flex-col">
    <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
    <h3 class="font-bold text-xl mt-3 group-hover:text-blue-300  ransition-colors duration-1000">{{ $job->title }}</h3>
    <p class=" text-sm text-gray-400 mt-auto">{{ $job->schedule}} - form {{ $job->salary}}</p>
  </div>
  <div class="mt-6 space-y-3">

    @foreach( $job->tags as $tag )
        <x-tag  :$tag />
    @endforeach 
  </div>
</x-panel>