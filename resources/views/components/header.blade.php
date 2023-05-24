<div class="fixed-top" style="background-color: #ffffff">
	<div class="bg-transparent navbar-area">
		<div class="mobile-responsive-nav">
			<div class="container">
				<div class="mobile-responsive-menu">
					<div class="logo">
						<a href="{{ route('home.index') }}" class="font-bold text-[22px]"> Dental Clinic </a>
					</div>
				</div>
			</div>
		</div>
		<div class="desktop-nav">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand font-bold text-[22px]" href="/"> Dental Clinic </a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto">
							<li class="nav-item">
								<a href="{{ route('home.index') }}" class="nav-link">Главная</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('about.index') }}" class="nav-link">О нас</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('doctor.index') }}" class="nav-link">Наши доктора</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('price.index') }}" class="nav-link">Цены</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('service.index') }}" class="nav-link">Сервисы</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('news.index') }}" class="nav-link">Новости</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('contact.index') }}" class="nav-link">Контакты</a>
							</li>
						</ul>

						<div class="others-options">
							<ul>
								<li>
									<a href="tel:+77474092621" class="call-us">
										<i class="ri-phone-line"></i>
										<span>+7(747) 409 2621</span>
									</a>
								</li>
								@if(auth()->user())
									@if(auth()->user()->type == 1)
										<li>
											<a href="{{ route('admin.index') }}" class="default-btn" style="background-color: #9aa2ff; border: 0;">
												Профиль
											</a>
										</li>
									@elseif(auth()->user()->type == 2)
										<li>
											<a href="{{ route('admin.index') }}" class="default-btn" style="background-color: #9aa2ff; border: 0;">
												Профиль
											</a>
										</li>
									@elseif(auth()->user()->type == 3)
										<li>
											<a href="{{ route('home.index') }}" class="default-btn" style="background-color: #9aa2ff; border: 0;">
												Профиль
											</a>
										</li>
									@endif
								@else
									<li>
										<a href="{{ route('login') }}" class="default-btn">
											<span>Войти</span>
										</a>
									</li>
								@endif
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>

				<div class="container">
					<div class="option-inner">
						<div class="others-options justify-content-center d-flex align-items-center">
							<ul>
								<li>
									<form class="search-form">
										<input type="text" class="form-control" placeholder="Поиск..."/>
										<button type="submit" class="src-btn">
											<i class="ri-search-line"></i>
										</button>
									</form>
								</li>
								<li>
									<a href="tel:+77474092621" class="call-us">
										<i class="ri-phone-line"></i>
										<span>+7(747) 409 2621</span>
									</a>
								</li>
								<li>
									<a href="{{ route('login') }}" class="default-btn">
										<span>Войти</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
