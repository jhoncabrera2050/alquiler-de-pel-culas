<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <style>
        body {
            font-family: 'Nunito';
            background-color: #030303;
        }
    </style>
        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
                @csrf

                

                
                <div class="mb-3">
                    <x-jet-label  value="{{ __('Register') }}" />
                    <br>
                    <select name="role_id" x-model="role_id"  class="form-select">
                    
                    <option  value="2" >Usuario</option>
                    </select>

                    <x-jet-input-error for="role_id"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="mb-3" x-show="role_id == 2">
                    <x-jet-label for="apellido_paterno" value="{{ __('Apellido Paterno') }}" />
                    <x-jet-input id="apellido_paterno" class="block mt-1 w-full" type="text" :value="old('apellido_paterno')" name="apellido_paterno" />
                </div>

                <div class="mb-3" x-show="role_id == 2">
                    <x-jet-label for="apellido_materno" value="{{ __('Apellido Materno') }}" />
                    <x-jet-input id="apellido_materno" class="block mt-1 w-full" type="text" :value="old('apellido_materno')" name="apellido_materno" />
                </div>

                <div class="mb-3" x-show="role_id == 2">
                    <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha Nacimiento') }}" />
                    <x-jet-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" :value="old('fecha_nacimiento')" name="fecha_nacimiento" />
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>