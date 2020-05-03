@extends("layouts.frontend")

@section('mainContent')
    <main class="main-toolbar-fixed">
        <div class="px-3">
            <div class="theme-container">
                <div class="row center-xs middle-xs my-5">
                    <div class="mdc-card p-3 p-relative mw-500px">
                        <div class="column center-xs middle-xs text-center">
                            <h1 class="uppercase">Register</h1>
                            <a href="{{route('login')}}" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100 mdc-ripple-upgraded">
                                Already have an account? Log in!
                            </a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mdc-select mdc-select--outlined mdc-select--with-leading-icon mt-3 custom-field @error('user_type') mdc-text-field--invalid @enderror">
                                <div class="mdc-select__anchor w-100">
                                    <input type="hidden" id="user_type" name="roles">
                                    <i class="material-icons mdc-select__icon pt-1">group</i>
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text" tabindex="0" aria-disabled="false" aria-expanded="false"></div>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded mdc-notched-outline--notched">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch" style="width: 59.75px;">
                                            <label class="mdc-floating-label mdc-floating-label--float-above" style="">User Type</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface" style="transform-origin: center top; left: 0px; top: 50px; max-height: 416px;">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value="" tabindex="0" aria-selected="false">Select Type</li>
                                        <li class="mdc-list-item" data-value="2" tabindex="-1">Agent</li>
                                        <li class="mdc-list-item " data-value="3" tabindex="-1" aria-selected="true">Buyer</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field @error('name') mdc-text-field--invalid @enderror">
                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
                                <input id="name" type="text" class="mdc-text-field__input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Username</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field @error('email') mdc-text-field--invalid @enderror">
                                <i class="material-icons mdc-text-field__icon text-muted">email</i>
                                <input id="email" type="email" class="mdc-text-field__input" name="email" value="{{ old('email') }}" required autocomplete="email">

                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 @error('password') mdc-text-field--invalid @enderror">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1" role="button">visibility_off</i>

                                <input id="password" type="password" class="mdc-text-field__input" name="password" required autocomplete="new-password">
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 @error('password_confirmation') mdc-text-field--invalid @enderror">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1" role="button">visibility_off</i>
                                <input id="password-confirm" type="password"  class="mdc-text-field__input" name="password_confirmation" required autocomplete="new-password">
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Confirm Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button class="mdc-button mdc-button--raised bg-accent mdc-ripple-upgraded" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Create an Account</span>
                                </button>
                            </div>
                        </form>
                        <div class="row my-4 px-3 p-relative">
                            <div class="divider w-100"></div>
                        </div>
                        <div class="row center-xs middle-xs">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
