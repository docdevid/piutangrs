<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="mb-4">
                <h2>Pengaturan Profil</h2>
            </div>

            <div class="mb-2">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="mb-2">
                @include('profile.partials.update-password-form')
            </div>
            <div class="mb-2">
                @include('profile.partials.update-profile-picture-form')
            </div>
        </div>
    </div>
</x-app-layout>
