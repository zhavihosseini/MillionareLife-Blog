<style>
    @font-face {
        font-family: Vazir;
        src: url('public/font/Vazir.eot');
        src: url('public/font/Vazir.eot?#iefix') format('public/font/Vazir-opentype'),
        url('/font/Vazir.woff') format('woff'),
        url('public/font/Vazir.ttf') format('truetype');
        font-style: normal;
    }
    @font-face {
        font-family: Vazir;
        src: url('public/font/Vazir-Light.eot');
        src: url('public/font/Vazir-Light.eot?#iefix') format('public/font/Vazir-opentype'),
        url('public/font/Vazir-Light.woff') format('woff'),
        url('public/font/Vazir-Light.ttf') format('truetype');
        font-weight: 300;
    }
    @font-face {
        font-family: Yekan;
        src: url('./public/font/Yekan.eot');
        src: url('./public/font/Yekan.eot?#iefix') format('./public/font/Yekan-opentype'),
        url('./font/Yekan.woff') format('woff'),
        url('./public/font/Yekan.ttf') format('truetype');
        font-style: normal;
    }
</style>
<x-jet-form-section submit="updateProfileInformation" style="direction: rtl">
    <x-slot name="title">
       پروفایل کاربری شما
    </x-slot>

    <x-slot name="description">
        از این قسمت شما میتوانید پروفایل کاربری خود را تغییر دهید
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-12 sm:col-span-12">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
<div class="col-span-12" style="background-color: grey;color: white;padding: 7px">
                <label for="photo" style="font-family: Vazir">اطلاعات حساب کاربری :</label>
</div>
                <br>
                <hr style="width: 100%">
                <!-- Current Profile Photo -->
                <div class="" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="" type="button" x-on:click.prevent="$refs.photo.click()" style="font-family: Vazir">
                    انتخاب عکس جدید
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto" style="font-family: Vazir">
                       حذف عکس
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
