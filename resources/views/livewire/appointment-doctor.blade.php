<div class="appointment-area bg-color-ffffff ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="appointment-img wow fadeInLeft delay-0-2s">
                    <img src="{{ asset('assets/images/appointment-img.png') }}" alt="Изображение"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-content wow fadeInRight delay-0-2s">
                    <span class="top-title">Записаться на приём</span>
                    <h2>Свяжитесь с нами для любой медицинской помощи и заполните форму записи на приём</h2>
                    <form action="{{ route('doctor.order') }}" method="post" class="appointment-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Номер телефона</label>
                                    <input name="number" type="text" class="form-control" placeholder="+7(747) 409 2621" required/>
                                    <i class="ri-phone-line"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Врач</label>
                                    <select wire:model="doctor_id" name="doctor_id" class="form-select form-control" aria-label="По умолчанию выбрано значение" required>
                                        <option selected>Выберите врача</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Услуги {{ request()->get('service_id') }}</label>
                                    <select wire:model="service_id" name="service_id" class="form-select form-control" aria-label="По умолчанию выбрано значение" required>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}" {{ request()->get('service_id') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Дата записи</label>
                                    <input wire:model="day" name="day" wire:change="day_change" type="date" class="form-control" placeholder="12/03/2022" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Время</label>
                                    <select name="time_id" class="form-select form-control" aria-label="По умолчанию выбрано значение" required>
                                        @foreach($dates as $date)
                                            <option value="{{ $date->id }}">{{ $date->time }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if($errors->has('msg'))
                                <div style="font-size: 15px; color: red; font-weight: 600;">{{$errors->first('msg')}}</div>
                            @endif
                            <div class="col-lg-12">
                                <div class="d-flex submit-btn align-items-center">
                                    <button type="submit" class="default-btn">Подтвердить запись на приём</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
