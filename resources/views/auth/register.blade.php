<x-layout>
  <x-page-heading> Register </x-page-heading>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input label="Your Name" name="name" type="text"/>
    <x-forms.input label="Email" name="email" text="email"/>
    <x-forms.input label="Password" name="password" type="password"/>
    <x-forms.input label="Password" name="password_confirmation" type="password"/>

    <x-forms.divider/>

    <x-forms.input label="Employer Name" name="employer" />
    <x-forms.input label="Employer Logo" name="logo" type="file" />

    <x-forms.button>Create Account</x-forms.button> 

  </x-forms.form>

</x-layout>