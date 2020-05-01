@extends("layouts.frontend")

@section('mainContent')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card mt-5 p-5">
                    <div class="row agent-wrapper">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            <img src="assets/images/agents/a-1.jpg" alt="agent-image" class="mw-100 d-block">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            <h2 class="fw-600">Lusia Manuel</h2>
                            <div class="row start-xs middle-xs ratings" title="15">
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star_border</i>
                            </div>
                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>
                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>
                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">HouseKey</span></p>
                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">lusia.m@housekey.com</span></p>
                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(224) 267-1346</span></p>
                            <div class="row start-xs middle-xs">
                                <div class="row start-xs middle-xs">
                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                        </svg>
                                    </a>
                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin">
                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                        </svg>
                                    </a>
                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram">
                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                        </svg>
                                    </a>
                                    <a href="http://www.agent.com/agent.blade.php" target="blank" class="social-icon" title="website">
                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="uppercase fw-600 text-muted mt-5 mb-0 p-relative">
                                Listed Properties<span class="badge primary md">8</span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-4 p-3">
                            <form action="javascript:void(0);" class="contact-form">
                                <h3 class="uppercase">Contact Me</h3>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="name" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="name" class="mdc-floating-label">Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="email" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="email" class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="phone" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="phone" class="mdc-floating-label">Phone</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 mt-3">
                                    <textarea id="message" class="mdc-text-field__input" rows="5"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="message" class="mdc-floating-label">Message</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="w-100 text-center mt-4">
                                    <button type="submit" class="mdc-button mdc-button--raised bg-accent">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Send Email</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <h3 class="uppercase mt-3">My Listing</h3>
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card">
                            <form action="javascript:void(0);" id="filters" class="search-wrapper m-0 o-hidden">
                                <div class="column p-2">
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Office</li>
                                                    <li class="mdc-list-item" data-value="2">House</li>
                                                    <li class="mdc-list-item" data-value="3">Apartment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Status</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">For Sale</li>
                                                    <li class="mdc-list-item" data-value="2">For Rent</li>
                                                    <li class="mdc-list-item" data-value="3">Open House</li>
                                                    <li class="mdc-list-item" data-value="4">No Fees</li>
                                                    <li class="mdc-list-item" data-value="5">Hot Offer</li>
                                                    <li class="mdc-list-item" data-value="6">Sold</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">City</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">New York</li>
                                                    <li class="mdc-list-item" data-value="2">Chicago</li>
                                                    <li class="mdc-list-item" data-value="3">Los Angeles</li>
                                                    <li class="mdc-list-item" data-value="4">Seattle</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Zip Code</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Neighborhood</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Astoria</li>
                                                    <li class="mdc-list-item" data-value="2">Midtown</li>
                                                    <li class="mdc-list-item" data-value="3">Chinatown</li>
                                                    <li class="mdc-list-item" data-value="4">Austin</li>
                                                    <li class="mdc-list-item" data-value="5">Englewood</li>
                                                    <li class="mdc-list-item" data-value="6">Riverdale</li>
                                                    <li class="mdc-list-item" data-value="7">Hollywood</li>
                                                    <li class="mdc-list-item" data-value="8">Sherman Oaks</li>
                                                    <li class="mdc-list-item" data-value="9">Highland Park</li>
                                                    <li class="mdc-list-item" data-value="10">Belltown</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Street</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Astoria Street #1</li>
                                                    <li class="mdc-list-item" data-value="2">Astoria Street #2</li>
                                                    <li class="mdc-list-item" data-value="3">Midtown Street #1</li>
                                                    <li class="mdc-list-item" data-value="4">Midtown Street #2</li>
                                                    <li class="mdc-list-item" data-value="5">Chinatown Street #1</li>
                                                    <li class="mdc-list-item" data-value="6">Chinatown Street #2</li>
                                                    <li class="mdc-list-item" data-value="7">Austin Street #1</li>
                                                    <li class="mdc-list-item" data-value="8">Austin Street #2</li>
                                                    <li class="mdc-list-item" data-value="9">Englewood Street #1</li>
                                                    <li class="mdc-list-item" data-value="10">Englewood Street #2</li>
                                                    <li class="mdc-list-item" data-value="11">Riverdale Street #1</li>
                                                    <li class="mdc-list-item" data-value="12">Riverdale Street #2</li>
                                                    <li class="mdc-list-item" data-value="13">Hollywood Street #1</li>
                                                    <li class="mdc-list-item" data-value="14">Hollywood Street #2</li>
                                                    <li class="mdc-list-item" data-value="15">Sherman Oaks Street #1</li>
                                                    <li class="mdc-list-item" data-value="16">Sherman Oaks Street #2</li>
                                                    <li class="mdc-list-item" data-value="17">Highland Park Street #1</li>
                                                    <li class="mdc-list-item" data-value="18">Highland Park Street #2</li>
                                                    <li class="mdc-list-item" data-value="19">Belltown Street #1</li>
                                                    <li class="mdc-list-item" data-value="20">Belltown Street #2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Bedrooms From</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                        <li class="mdc-list-item" data-value="6">6</li>
                                                        <li class="mdc-list-item" data-value="7">7</li>
                                                        <li class="mdc-list-item" data-value="8">8</li>
                                                        <li class="mdc-list-item" data-value="9">9</li>
                                                        <li class="mdc-list-item" data-value="10">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Bedrooms To</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                        <li class="mdc-list-item" data-value="6">6</li>
                                                        <li class="mdc-list-item" data-value="7">7</li>
                                                        <li class="mdc-list-item" data-value="8">8</li>
                                                        <li class="mdc-list-item" data-value="9">9</li>
                                                        <li class="mdc-list-item" data-value="10">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-xs-6 p-2">
                                                <div class="mdc-select mdc-select--outlined">
                                                    <div class="mdc-select__anchor">
                                                        <i class="mdc-select__dropdown-icon"></i>
                                                        <div class="mdc-select__selected-text"></div>
                                                        <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Bathrooms From</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                        <ul class="mdc-list">
                                                            <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                            <li class="mdc-list-item" data-value="1">1</li>
                                                            <li class="mdc-list-item" data-value="2">2</li>
                                                            <li class="mdc-list-item" data-value="3">3</li>
                                                            <li class="mdc-list-item" data-value="4">4</li>
                                                            <li class="mdc-list-item" data-value="5">5</li>
                                                            <li class="mdc-list-item" data-value="6">6</li>
                                                            <li class="mdc-list-item" data-value="7">7</li>
                                                            <li class="mdc-list-item" data-value="8">8</li>
                                                            <li class="mdc-list-item" data-value="9">9</li>
                                                            <li class="mdc-list-item" data-value="10">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 p-2 to">
                                                <div class="mdc-select mdc-select--outlined">
                                                    <div class="mdc-select__anchor">
                                                        <i class="mdc-select__dropdown-icon"></i>
                                                        <div class="mdc-select__selected-text"></div>
                                                        <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Bathrooms To</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                        <ul class="mdc-list">
                                                            <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                            <li class="mdc-list-item" data-value="1">1</li>
                                                            <li class="mdc-list-item" data-value="2">2</li>
                                                            <li class="mdc-list-item" data-value="3">3</li>
                                                            <li class="mdc-list-item" data-value="4">4</li>
                                                            <li class="mdc-list-item" data-value="5">5</li>
                                                            <li class="mdc-list-item" data-value="6">6</li>
                                                            <li class="mdc-list-item" data-value="7">7</li>
                                                            <li class="mdc-list-item" data-value="8">8</li>
                                                            <li class="mdc-list-item" data-value="9">9</li>
                                                            <li class="mdc-list-item" data-value="10">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Garages From</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Garages To</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Area From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Area To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Year Built From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Year Built To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 mb-2">
                                        <p class="uppercase m-2 fw-500">Features</p>
                                        <div class="features column">
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="air-conditioning"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="air-conditioning">Air Conditioning</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="barbeque"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="barbeque">Barbeque</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="dryer"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="dryer">Dryer</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="microwave"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="microwave">Microwave</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="refrigerator"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="refrigerator">Refrigerator</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="tv-cable"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="tv-cable">TV Cable</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="sauna"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="sauna">Sauna</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="wi-fi"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="wi-fi">WiFi</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="fireplace"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="fireplace">Fireplace</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="gym"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="gym">Gym</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row around-xs middle-xs p-2 mb-3">
                                    <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Clear</span>
                                    </button>
                                    <button class="mdc-button mdc-button--raised" type="submit">
                                        <span class="mdc-button__ripple"></span>
                                        <i class="material-icons mdc-button__icon">search</i>
                                        <span class="mdc-button__label">Search</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                    <div class="page-sidenav-content">
                        <div class="properties-wrapper row mt-0">
                            <div class="row px-2 w-100">
                                <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted">
                                    <button id="page-sidenav-toggle" class="mdc-icon-button material-icons d-md-none d-lg-none d-xl-none">
                                        more_vert
                                    </button>
                                    <div class="mdc-menu-surface--anchor">
                                        <button class="mdc-button mdc-ripple-surface text-muted mutable">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label"><span class="mutable">Sort by Default</span></span>
                                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                                        </button>
                                        <div class="mdc-menu mdc-menu-surface">
                                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Sort by Default</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Newest</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Oldest</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Popular</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (Low to High)</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (High to Low)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                                        <div class="mdc-menu-surface--anchor">
                                            <button class="mdc-button mdc-ripple-surface text-muted">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Show<span class="mx-2 mutable">8</span></span>
                                                <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                                            </button>
                                            <div class="mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">8</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">12</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">16</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">24</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">36</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="mdc-icon-button material-icons view-type" data-view-type="list" data-col="1" data-full-width-page="false">view_list</button>
                                        <button class="mdc-icon-button view-type" data-view-type="grid" data-col="2" data-full-width-page="false">
                                            <svg class="material-icons mat-icon-sm" viewBox="0 0 25 25">
                                                <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3"/>
                                            </svg>
                                        </button>
                                        <button class="mdc-icon-button view-type material-icons d-none d-lg-flex d-xl-flex" data-view-type="grid" data-col="3" data-full-width-page="false">view_module</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row start-xs middle-xs py-2 w-100">
                                <div class="mdc-chip-set">
                                    <div class="mdc-chip bg-warn">
                                        <div class="mdc-chip__ripple"></div>
                                        <span>
                                            <span role="button" tabindex="0" class="mdc-chip__text uppercase">32 found</span>
                                        </span>
                                    </div>
                                    <div class="mdc-chip">
                                        <div class="mdc-chip__ripple"></div>
                                        <span>
                                            <span role="button" tabindex="0" class="mdc-chip__text">House</span>
                                        </span>
                                        <span>
                                            <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
                                        </span>
                                    </div>
                                    <div class="mdc-chip">
                                        <div class="mdc-chip__ripple"></div>
                                        <span>
                                            <span role="button" tabindex="0" class="mdc-chip__text">For sale</span>
                                        </span>
                                        <span>
                                            <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
                                        </span>
                                    </div>
                                    <div class="mdc-chip">
                                        <div class="mdc-chip__ripple"></div>
                                        <span>
                                            <span role="button" tabindex="0" class="mdc-chip__text">Price > 150000</span>
                                        </span>
                                        <span>
                                            <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
                                        </span>
                                    </div>
                                    <div class="mdc-chip">
                                        <div class="mdc-chip__ripple"></div>
                                        <span>
                                            <span role="button" tabindex="0" class="mdc-chip__text">Price &lt; 450000</span>
                                        </span>
                                        <span>
                                            <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="green">For Sale</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-1/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-1/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-1/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-1/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Modern and quirky flat</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>611 W 180th St, New York, NY 10033, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,300,000</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>2380 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 August, 2012</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For rent</span>
                                            <span class="orange">No fees</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/6-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Centrally located office</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1052 W 91st St, Los Angeles, CA 90044, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 6,500 /month</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>1500 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>4</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>2</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 September, 2013</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="green">For Sale</span>
                                            <span class="teal">Open House</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-1/6-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Comfortable family house</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>3rd Ave & James St, Seattle, WA 98104, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 2,550,000</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>2100 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>3</span></p>
                                                    <p><span>Bathrooms</span><span>1</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 May, 2011</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="red">Hot Offer</span>
                                            <span class="orange">No Fees</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Spacious and warm flat</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>55 W Jackson Blvd, Chicago, IL 60604, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,450,000</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>1700 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>5</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>2</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 October, 2016</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="dark">Sold</span>
                                            <span class="green">For Sale</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">House with a pool</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>5921 17th Ave S, Seattle, WA 98108, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 4,500,000</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>2200 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>3</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">20 November, 2017</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For Rent</span>
                                            <span class="orange">No Fees</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Bright and sunny house</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1400 W 44th St, Chicago, IL 60609, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 9,000 /month</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>1600 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">19 November, 2013</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="green">For Sale</span>
                                            <span class="red">Hot Offer</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office-2/6-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Luxury office space</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>230 W 55th St, New York, NY 10019, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 2,500,000</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>3200 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 August, 2017</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For Rent</span>
                                            <span class="orange">No Fees</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Centrally located apartment</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1627 Vine St, Los Angeles, CA 90028, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 5,600 /month</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>1600 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>1</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">29 March, 2016</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For rent</span>
                                            <span class="orange">No fees</span>
                                        </div>
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/6-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Centrally located office</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1052 W 91st St, Los Angeles, CA 90044, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 6,500 /month</span>
                                                    </h3>
                                                    <div class="row start-xs middle-xs ratings" title="29">
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">
                                                    <p><span>Property size</span><span>1500 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>4</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>2</span></p>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 September, 2013</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row center-xs middle-xs p-2 w-100">
                                <div class="mdc-card w-100">
                                    <ul class="theme-pagination">
                                        <li class="pagination-previous disabled"><span>Previous</span></li>
                                        <li class="current"><span>1</span></li>
                                        <li><a><span>2</span></a></li>
                                        <li><a><span>3</span></a></li>
                                        <li><a><span>4</span></a></li>
                                        <li class="pagination-next"><a><span>Next</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-in-touch bg-primary">
                    <img src="assets/images/others/operator.png" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                    <div class="row between-xs middle-xs content">
                        <div class="column p-3">
                            <h2>LOOKING TO SELL YOUR HOME?</h2>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="row start-xs middle-xs p-3">
                            <i class="material-icons mat-icon-xlg mx-2">call</i>
                            <div class="column">
                                <p class="mb-0">CALL US NOW</p>
                                <h2 class="ws-nowrap">(+100) 123 456 7890</h2>
                            </div>
                        </div>
                        <div class="p-3">
                            <a href="javascript:void(0);" class="mdc-button mdc-button--raised mx-3">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">get in touch</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
