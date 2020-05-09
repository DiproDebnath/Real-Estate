@extends('layouts.backend')
@section('styles')
    @include('partials.backend.table_style')
@endsection


@section('mainContent')
    <div class="dashboard-wrapper">
        <div class="main-container">
            <div class="content-container">
                <div class="chat-module">
                    <div class="chat-module-top">
                        <div class="chat-module-body">
                            @foreach($thread->messages as $message)
                                @if($message->user->id == $user->id)
                                    <div class="media chat-item">
                                        <img alt="{{ $message->user->name }}"
                                             src="{{asset('profile/')}}/{{$message->user->image}}"
                                             class="rounded-circle user-avatar-lg">
                                        <div class="media-body">
                                            <div class="chat-item-title">
                                                <span class="chat-item-author">{{ $message->user->name }}</span>
                                            </div>
                                            <div class="chat-item-body">
                                                <p>
                                                    {{ $message->body }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="media chat-item">
                                        <div class="media-body text-right" style="margin-right: 0.75rem">
                                            <div class="text-right" style="margin-bottom: 0.375rem">
                                                <p><span class="chat-item-author">{{ $message->user->name }}</span></p>
                                            </div>
                                            <div class="chat-item-body">
                                                <p>
                                                    {{ $message->body }}
                                                </p>
                                            </div>
                                        </div>
                                        <img alt="{{ $message->user->name }}"
                                             src="{{asset('profile/')}}/{{$message->user->image}}"
                                             class="rounded-circle user-avatar-lg">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="chat-module-bottom">
                        <form
                            action="@can('isAdmin'){{ route('admin_messages.update', $thread->id) }}@elsecan('isAgent'){{ route('agent_messages.update', $thread->id) }} @else{{ route('user_messages.update', $thread->id) }} @endcan"
                            method="post" class="chat-form" style="display: flex">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            <textarea class="form-control" name="message" placeholder="Type message"
                                      rows="1"></textarea>
                            <input type="hidden" name="recipient" value="{{ $user->id }}">

                            <button type="submit" class="btn btn-primary " style="margin-left: .75rem">
                                submit
                            </button>
                        </form>
                    </div>
                </div>
                <div class="chat-sidebar collapse" id="sidebar-collapse">
                    <div class="chat-sidebar-content">
                        <div class="chat-team-sidebar text-small">
                            <div class="chat-team-sidebar-top">
                                <div class="media align-items-center">
                                    <a href="#" class="mr-2">
                                        <img alt="Team Avatar" src="../assets/images/avatar-2.jpg"
                                             class="rounded-circle user-avatar-xl">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mb-1">Pipeline Fans</h5>
                                        <p>A collective of Pipeline enthusiasts sharing the the love</p>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="members-tab" data-toggle="tab"
                                           href="#members" role="tab" aria-controls="members" aria-selected="true">Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="files-tab" data-toggle="tab" href="#files" role="tab"
                                           aria-controls="files" aria-selected="false">Files</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-team-sidebar-bottom">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="members" role="tabpanel"
                                         aria-labelledby="members-tab" data-filter-list="list-group">
                                        <div id="test-list">
                                            <form class="px-3 mb-3">
                                                <div class="input-group input-group-round">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            <i class="fas fa-search"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control search"
                                                           placeholder="Filter members" aria-label="Filter Members">
                                                </div>
                                            </form>
                                            <div class="list-group list-group-flush  list">
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Claire Connors" src="../assets/images/avatar-1.jpg"
                                                             class="avatar">
                                                        <div class="media-body ">
                                                            <h6 class="mb-0 name">Claire Connors</h6>
                                                            <span class="name">Administrator</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Marcus Simmons" src="../assets/images/avatar-2.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Marcus Simmons</h6>
                                                            <span class="name">Administrator</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Peggy Brown" src="../assets/images/avatar-3.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Peggy Brown</h6>
                                                            <span class="name">Project Manager</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Harry Xai" src="../assets/images/avatar-3.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Harry Xai</h6>
                                                            <span class="name">Project Manager</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Sally Harper" src="../assets/images/avatar-1.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Sally Harper</h6>
                                                            <span class="name">Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Ravi Singh" src="../assets/images/avatar-2.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Ravi Singh</h6>
                                                            <span class="name">Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="David Whittaker" src="../assets/images/avatar-3.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">David Whittaker</h6>
                                                            <span class="name">Designer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Kerri-Anne Banks" src="../assets/images/avatar-4.jpg"
                                                             class="avatar ">
                                                        <div class="media-body ">
                                                            <h6 class="mb-0 name ">Kerri-Anne Banks</h6>
                                                            <span class="name ">Marketing</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action " href="# ">
                                                    <div class="media media-member mb-0 ">
                                                        <img alt="Masimba Sibanda " src="../assets/images/avatar-3.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Masimba Sibanda</h6>
                                                            <span class="name">Designer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action" href="#">
                                                    <div class="media media-member mb-0">
                                                        <img alt="Krishna Bajaj" src="../assets/images/avatar-2.jpg"
                                                             class="avatar ">
                                                        <div class="media-body ">
                                                            <h6 class="mb-0 name ">Krishna Bajaj</h6>
                                                            <span class="name ">Marketing</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action " href="# ">
                                                    <div class="media media-member mb-0 ">
                                                        <img alt="Kenny Tran " src="../assets/images/avatar-1.jpg"
                                                             class="avatar">
                                                        <div class="media-body">
                                                            <h6 class="mb-0 name">Kenny Tran</h6>
                                                            <span class="name">Contributor</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="files" role="tabpanel" aria-labelledby="files-tab"
                                         data-filter-list="dropzone-previews">
                                        <div id="test-list-2">
                                            <form class="px-3 mb-3">
                                                <div class="input-group input-group-round">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            <i class="fas fa-search"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control search"
                                                           placeholder="Filter members" aria-label="Filter Members">
                                                </div>
                                            </form>
                                            <ul class="d-none dz-template list-unstyled">
                                                <li class="list-group-item dz-preview dz-file-preview">
                                                    <div class="media align-items-center dz-details">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary dz-file-representation">
                                                                    <img src="https://jituchauhan.com/" class="avatar"
                                                                         data-dz-thumbnail="" alt="">
                                                                    <i class="fas fa-paperclip"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg" class="avatar"
                                                                     data-title="David Whittaker" data-toggle="tooltip">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div class="dz-file-details">
                                                                <a href="#" class="dz-filename">
                                                                    <span data-dz-name=""></span>
                                                                </a>
                                                                <br>
                                                                <span class="text-small dz-size" data-dz-size=""></span>
                                                            </div>
                                                            <img alt="Loader" src="../assets/images/loader.svg"
                                                                 class="dz-loading">
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" href="#"
                                                                       data-dz-remove="">Delete</a>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-danger btn-sm dz-remove"
                                                                    data-dz-remove="">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="progress dz-progress">
                                                        <div class="progress-bar dz-upload"
                                                             data-dz-uploadprogress=""></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="dropzone dz-clickable"
                                                  action="http://mediumra.re/dropzone/upload.php">
                                                <span class="dz-message">Drop files here or click here to upload</span>
                                            </form>
                                            <ul class="list-group list-group-activity dropzone-previews flex-column-reverse list-group-flush list ">
                                                <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                                    data-e="null">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="Peggy Brown"
                                                                     src="../assets/images/avatar-1.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="Peggy Brown" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">client-questionnaire</a>
                                                                <br>
                                                                <span class="name">48kb Text Doc</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="Harry Xai" src="../assets/images/avatar-2.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="Harry Xai" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">moodboard_images</a>
                                                                <br>
                                                                <span class="name">748kb ZIP</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-image"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="Ravi Singh"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="Ravi Singh" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">possible-hero-image</a>
                                                                <br>
                                                                <span class="name">1.2mb JPEG image</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="Claire Connors"
                                                                     src="../assets/images/avatar-3.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="Claire Connors" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">LandingPrototypes</a>
                                                                <br>
                                                                <span class="name">415kb Sketch Doc</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <ul class="avatars list-unstyled">
                                                            <li>
                                                                <div class="avatar bg-primary">
                                                                    <i class="fas fa-file"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img alt="David Whittaker"
                                                                     src="../assets/images/avatar-4.jpg"
                                                                     class="avatar filter-by-data-title"
                                                                     data-title="David Whittaker" data-toggle="tooltip"
                                                                     data-filter-by="data-title">
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="media-body d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="name">Branding-Proforma</a>
                                                                <br>
                                                                <span class="name">15kb Text Document</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn-options" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger"
                                                                       href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('javascripts')
    @include('partials.backend.table_script')
@endsection
