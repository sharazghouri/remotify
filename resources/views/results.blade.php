<x-layout>
  <x-page-heading> Register </x-page-heading>

  <div class="mt-6 space-y-1">

    @foreach( $jobs as $job )
        <x-job-card-wide :$job />
    @endforeach
  </div>

</x-layout>