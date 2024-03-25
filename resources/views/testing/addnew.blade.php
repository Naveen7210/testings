<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<style>
.container{
    margin: 3%;
}

</style>
<x-app-layout>
    
<div class="container">
<form method="POST" action="{{ route('testing.store') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="present" :value="__('present')" />
            <x-text-input id="present" class="block mt-1 w-full" type="text" name="present" :value="old('present')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('present')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="absent" :value="__('absent')" />
            <x-text-input id="absent" class="block mt-1 w-full" type="text" name="absent" :value="old('absent')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('absent')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="late" :value="__('late')" />
            <x-text-input id="late" class="block mt-1 w-full" type="text" name="late" :value="old('late')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('late')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="medical" :value="__('medical')" />
            <x-text-input id="medical" class="block mt-1 w-full" type="text" name="medical" :value="old('medical')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('medical')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="substitute" :value="__('substitute')" />
            <x-text-input id="substitute" class="block mt-1 w-full" type="text" name="substitute" :value="old('substitute')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('substitute')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="rg" :value="__('rg')" />
            <x-text-input id="rg" class="block mt-1 w-full" type="text" name="rg" :value="old('rg')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('rg')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="visitor" :value="__('visitor')" />
            <x-text-input id="visitor" class="block mt-1 w-full" type="text" name="visitor" :value="old('visitor')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('visitor')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tyfcb" :value="__('tyfcb')" />
            <x-text-input id="tyfcb" class="block mt-1 w-full" type="text" name="tyfcb" :value="old('tyfcb')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('tyfcb')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="testimonial" :value="__('testimonial')" />
            <x-text-input id="testimonial" class="block mt-1 w-full" type="text" name="testimonial" :value="old('testimonial')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('testimonial')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="training" :value="__('training')" />
            <x-text-input id="training" class="block mt-1 w-full" type="text" name="training" :value="old('training')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('training')" class="mt-2" />
        </div>
        <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
</form>

</div>

</x-app-layout>