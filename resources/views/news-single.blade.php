@extends('layouts.app') @section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Детали новости</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}">
							Главная
						</a>
					</li>
					<li class="active">Детали новости</li>
				</ul>
			</div>
		</div>
		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение"/>
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение"/>
	</div>
	<div class="blog-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="blog-details-content">
						<img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="Изображение"/>
						<div class="blog-content">
							<ul>
								<li>
									<i class="ri-time-line"></i>
									18 декабря 2021 г.
								</li>
								<li>
									<a href="blog-details.html#">
										<i class="ri-chat-2-line"></i>
										Нет комментариев
									</a>
								</li>
							</ul>
							<h3>Что такое обслуживание клиентов в области телемедицины и телездравоохранения?</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore nam itaque doloremque eligendi neque ex harum natus necessitatibus. Facilis optio odit, earum unde delectus id recusandae porro labore quia
								corporis! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat totam, commodi impedit ullam similique optio. Eveniet delectus, totam qui, itaque dignissimos illum dicta, eligendi voluptatem odio fuga
								deserunt in iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quas eius debitis optio? Quaerat laudantium debitis corrupti voluptatum amet. Incidunt quibusdam ex laboriosam. Molestiae, est
								dolorem. Deleniti quos commodi.
							</p>
							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore nam itaque doloremque eligendi neque ex harum natus necessitatibus. Facilis optio odit, earum unde delectus id recusandae porro labore quia
								corporis! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat totam, commodi impedit ullam similique optio. Eveniet delectus, totam qui, itaque dignissimos illum dicta, eligendi voluptatem odio fuga
								deserunt in iure.
							</p>
							<div class="mb-30"></div>
							<h4>Какие преимущества получает клиент от обслуживания клиентов в области телемедицины?</h4>
							<p>
								Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin egettortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
								Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus.
							</p>

							<div class="row">
								<div class="col-lg-6">
									<div class="img-1 mb-30">
										<img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="Изображение"/>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="img-2 mb-30">
										<img src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt="Изображение"/>
									</div>
								</div>
							</div>

							<p>
								Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Nulla quis lorem ut libero
								malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo,
								lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
							</p>

							<p>
								Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed
								magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.
							</p>

							<h4>Что должно включать обслуживание клиентов в области телемедицины</h4>
							<p>
								Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Nulla quis lorem ut libero
								malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
							</p>
							<p>Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.</p>

							<div class="mb-30"></div>

							<ul class="tag-list">
								<li>
									<span>Теги:</span>
								</li>
								<li>
									<a href="blog-details.html#">сотрудничество,</a>
								</li>
								<li>
									<a href="blog-details.html#">будущее работы,</a>
								</li>
								<li>
									<a href="blog-details.html#">удаленная работа,</a>
								</li>
							</ul>
							<div class="mb-30"></div>
							<div class="leave-form">
								<h3>Оставьте комментарий</h3>
								<p>Ваш адрес электронной почты не будет опубликован.</p>
								<form>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label>Полное имя</label>
												<input type="text" class="form-control" placeholder="Ереке"/>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" placeholder="ereke@gmail.com"/>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Веб-сайт</label>
												<input type="text" class="form-control" placeholder="www.ereke.com"/>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Комментарий</label>
												<textarea name="message" class="form-control" id="message" rows="6" placeholder="Напишите свой комментарий здесь..."></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group mb-0">
												<button type="submit" class="default-btn">Оставить комментарий</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
