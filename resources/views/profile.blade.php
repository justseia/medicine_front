@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a class="active" href="#activity" data-bs-toggle="tab">Record</a></li>
                            <li><a href="#settings" data-bs-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="usertimeline">
                                <div class="publisher publisher-multi bg-white b-1 mb-30">
                                    <textarea class="publisher-input auto-expand" rows="4" placeholder="Write something"></textarea>
                                    <div class="flexbox">
                                        <div class="gap-items">
                                        <span class="publisher-btn file-group">
                                            <i class="fa fa-image file-browser"></i>
                                            <input type="file"/>
                                        </span>
                                            <a class="publisher-btn" href="#"><i class="fa fa-map-marker"></i></a>
                                            <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                        </div>
                                        <button class="btn btn-sm btn-bold btn-primary">Post</button>
                                    </div>
                                </div>
                                <div class="box b-1 no-shadow">
                                    <div class="media bb-1 border-fade">
                                        <img class="avatar avatar-lg" src="{{asset('avatar/3.jpg')}}" alt="..."/>
                                        <div class="media-body">
                                            <p>
                                                <strong>Denial Webar</strong>
                                                <time class="float-end text-fade" datetime="2017">24 min ago</time>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-body bb-1 border-fade">
                                        <p class="lead">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>
                                    </div>
                                    <div class="media-list media-list-divided bg-lighter">
                                        <div class="media">
                                            <a class="avatar" href="#">
                                                <img src="avatar/6.jpg" alt="..."/>
                                            </a>
                                            <div class="media-body">
                                                <p>
                                                    <a href="#"><strong>Rock Tele</strong></a>
                                                    <time class="float-end text-fade" datetime="2017-07-14 20:00">Just now</time>
                                                </p>
                                                <p>Uniquely enhance world-class channels with just in time schemas.</p>

                                                <div class="media px-0 mt-20">
                                                    <a class="avatar" href="#">
                                                        <img src="avatar/8.jpg" alt="..."/>
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            <a href="#"><strong>Brock Lensar</strong></a>
                                                            <time class="float-end text-fade" datetime="2017-07-14 20:00">26 mins ago</time>
                                                        </p>
                                                        <p>Thank you for your nice comment.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="avatar" href="#">
                                                <img src="avatar/9.jpg" alt="..."/>
                                            </a>
                                            <div class="media-body">
                                                <p>
                                                    <a href="#"><strong>Tony Stark</strong></a>
                                                    <time class="float-end text-fade" datetime="2017-07-14 20:00">2 hours ago</time>
                                                </p>
                                                <p>Continually drive user friendly solutions through performance based infomediaries.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="publisher bt-1 border-fade">
                                        <img class="avatar avatar-sm" src="avatar/4.jpg" alt="..."/>
                                        <input class="publisher-input" type="text" placeholder="Add Your Comment"/>
                                        <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                        <span class="publisher-btn file-group">
                                        <i class="fa fa-camera file-browser"></i>
                                        <input type="file"/>
                                    </span>
                                    </form>
                                </div>
                                <div class="box p-15">
                                    <div class="timeline timeline-single-column timeline-single-full-column">
                                    <span class="timeline-label">
                                        <span class="badge badge-info badge-pill">Images</span>
                                    </span>
                                        <div class="timeline-item">
                                            <div class="timeline-point timeline-point-success">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="timeline-event">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title"><a href="#">Rakesh Kumar</a><small> uploaded new photos</small></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <img src="150x100.png" alt="..." class="m-10"/>
                                                    <img src="150x100.png" alt="..." class="m-10"/>
                                                    <img src="150x100.png" alt="..." class="m-10"/>
                                                    <img src="150x100.png" alt="..." class="m-10"/>
                                                </div>
                                                <div class="timeline-footer">
                                                    <p class="text-end"><i class="fa fa-clock-o"></i> 8 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-point timeline-point-info">
                                                <i class="ion ion-chatbubble-working"></i>
                                            </div>
                                            <div class="timeline-event">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title"><a href="#">Jone Doe</a><small> commented on your post</small></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam
                                                        quaerat, magni commodi quisquam.
                                                    </p>
                                                </div>
                                                <div class="timeline-footer">
                                                    <a class="btn btn-success btn-sm" href="#">View comment</a>
                                                    <p class="pull-right"><i class="fa fa-clock-o"></i> 8 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-point timeline-point-danger">
                                                <i class="ion ion-ios-videocam"></i>
                                            </div>
                                            <div class="timeline-event">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title"><a href="#">Jone Doe</a><small> shared a video</small></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/k85mRPqvMbE"></iframe>
                                                    </div>
                                                </div>
                                                <div class="timeline-footer">
                                                    <a class="btn btn-success btn-sm" href="#">View comment</a>
                                                    <p class="pull-right"><i class="fa fa-clock-o"></i> 8 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="timeline-label">
                                        <button class="btn btn-danger"><i class="fa fa-clock-o"></i></button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="active tab-pane" id="activity">
                                @foreach($doctor_orders as $doctor_order)
                                    <div class="box no-shadow">
                                        <div class="post clearfix">
                                            <div class="user-block" style="padding-left: 50px; padding-top: 20px;">
                                                <img class="img-bordered-sm rounded-circle" src="{{ \App\Models\User::where('id', $doctor_order->doctor_id)->first()->image }}" alt="user image"/>
                                                <span class="username">
                                            <a href="#">{{ \App\Models\User::where('id', $doctor_order->doctor_id)->first()->name }}</a>
                                        </span>
                                                <span class="description">{{$doctor_order->created_at->isoFormat('LL')}}</span>
                                            </div>
                                            <div class="activitytimeline">
                                                <p>
                                                    {!! $doctor_order->body !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="tab-pane" id="settings">
                                <div class="box no-shadow">
                                    <form action="{{ route('profile.update') }}" method="post" class="form-horizontal form-element col-12" style="padding-top: 20px; padding-right: 20px;">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 form-label" style="display: grid; place-content: center;">Name</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->name }}" name="name" type="text" class="form-control" id="inputName" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 form-label" style="display: grid; place-content: center;">Email</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->email }}" name="email" type="text" class="form-control" id="inputEmail" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPhone" class="col-sm-2 form-label" style="display: grid; place-content: center;">Phone</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->phone }}" name="phone" type="text" class="form-control" id="inputPhone" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 form-label" style="display: grid; place-content: center;">Biography</label>
                                            <div class="col-sm-10">
                                                <textarea name="biography" class="form-control" rows="5" id="inputExperience" placeholder="" style="padding: 10px; border-radius: 10px; border: 1px solid;">{{ auth()->user()->biography }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="ms-auto col-sm-10">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('{{asset('gallery/full/10.jpg')}}') center center;height: 200px" data-overlay="5">
                            <h3 class="widget-user-username text-white">{{ auth()->user()->name }}</h3>
                        </div>
                        <div class="widget-user-image">
                            <img class="rounded-circle" src="{{ auth()->user()->image }}" alt="User Avatar" style="height: 90px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
