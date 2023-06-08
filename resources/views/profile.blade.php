@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Профиль</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}"> Главная </a>
                    </li>
                    <li class="active">Профиль</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение"/>
        <img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение"/>
    </div>
    <div class="container" style="padding-top: 100px;">
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a class="active" href="#times" data-bs-toggle="tab">Время записи</a></li>
                            <li><a href="#activity" data-bs-toggle="tab">Записи</a></li>
                            <li><a href="#settings" data-bs-toggle="tab">Профиль данные</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="times">
                                @forelse($my_orders as $my_order)
                                    <div class="box no-shadow">
                                        <div class="post clearfix">
                                            <div class="user-block" style="padding-left: 50px; padding-top: 20px;">
                                                <img class="img-bordered-sm rounded-circle" src="{{ \App\Models\User::where('id', $my_order->doctor_id)->first()->image }}" alt="изображение пользователя"/>
                                                <div style="display: flex;justify-content: space-between;">
                                                    <div style="display: flex;flex-direction: column;">
                                                        <div class="username" style="display: flex;">
                                                            <a href="{{ route('doctor.show', $my_order->doctor_id) }}">{{ \App\Models\User::where('id', $my_order->doctor_id)->first()->name }}</a>
                                                        </div>
                                                        <div class="description" style="display: flex;">{{ $my_order->day->isoFormat('LL') . ' ' . $my_order->time->time  }}</div>
                                                    </div>
                                                    <div style="display:flex;align-items: center;padding-right: 30px;">
                                                        <form action="{{ route('profile.delete', $my_order->id) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" style="background-color: #00000000;color: red;">Удалить</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div>У вас нет записей</div>
                                @endforelse
                            </div>
                            <div class="tab-pane" id="activity">
                                <form action="{{ route('profile.filter') }}" method="post" class="form-group">
                                    @csrf
                                    <input name="start" type="date" style="width: 200px;border: 1px solid #000000;border-radius: 5px;padding: 10px 15px;background-color: #fff;">
                                    <input name="end" type="date" style="width: 200px;border: 1px solid #000000;border-radius: 5px;padding: 10px 15px;background-color: #fff;"/>
                                    <button type="submit" style="background-color: #9aa2ff;width: 200px;padding: 10px 0px;border-radius: 5px;color: #fff;">Фильтр</button>
                                </form>
                                @forelse($doctor_orders as $doctor_order)
                                    <div class="box no-shadow">
                                        <div class="post clearfix">
                                            <div class="user-block" style="padding-left: 50px; padding-top: 20px;">
                                                <img class="img-bordered-sm rounded-circle" src="{{ \App\Models\User::where('id', $doctor_order->doctor_id)->first()->image }}" alt="изображение пользователя"/>
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
                                @empty
                                    <div>У вас нет записей</div>
                                @endforelse
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="box no-shadow">
                                    <form action="{{ route('profile.update') }}" method="post" class="form-horizontal form-element col-12" style="padding-top: 20px; padding-right: 20px;" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 form-label" style="display: grid; place-content: center;">Имя</label>
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
                                            <label for="inputPhone" class="col-sm-2 form-label" style="display: grid; place-content: center;">Телефон</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->phone }}" name="phone" type="text" class="form-control" id="inputPhone" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPhone" class="col-sm-2 form-label" style="display: grid; place-content: center;">Вес</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->weight }}" name="weight" type="number" class="form-control" id="inputPhone" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPhone" class="col-sm-2 form-label" style="display: grid; place-content: center;">Рост</label>
                                            <div class="col-sm-10">
                                                <input value="{{ auth()->user()->height }}" name="height" type="number" class="form-control" id="inputPhone" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 form-label" style="display: grid; place-content: center;">Болезни</label>
                                            <div class="col-sm-10">
                                                <textarea name="biography" class="form-control" rows="5" id="inputExperience" placeholder="" style="padding: 10px; border-radius: 10px; border: 1px solid;">{{ auth()->user()->biography }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPhone" class="col-sm-2 form-label" style="display: grid; place-content: center;">Фото</label>
                                            <div class="col-sm-10">
                                                <input id="imageFile" name="image" type="file" class="form-control" id="inputPhone" placeholder="" style="padding: 10px; height: 40px; border-radius: 10px; border: 1px solid;"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="ms-auto col-sm-10">
                                                <button type="submit" style="background-color: #9aa2ff;width: 200px;padding: 10px 0px;border-radius: 5px;color: #fff;">Сохранить</button>
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
                        <img id="prevImage" src="{{ auth()->user()->image }}" class="widget-user-header bg-img bbsr-0 bber-0" style="height: 400px;object-position:top;object-fit:cover;padding:0px"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function imageFile(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onloadend = function (e) {
                    $('#prevImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageFile").change(function () {
            imageFile(this);
        });
    </script>
@endsection
