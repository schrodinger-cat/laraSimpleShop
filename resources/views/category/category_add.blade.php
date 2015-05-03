@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Добавить категорию</h2>

				<hr/>

				<form action="/admin/category" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label>Введи название категории</label>
						<input type="text" name="cat_name" class="form-control" placeholder="Название категории">
					</div>

					<button type="submit" class="btn btn-default">Схоронить</button>
				</form>

			</div>
		</div>
	</div>
@endsection