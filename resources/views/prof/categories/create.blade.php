@extends('layouts.app_prof')

@section('content')

<div class="container">

  @component('prof.components.breadcrumb')
    @slot('title') Создание категории @endslot
    @slot('parent') Главная @endslot
    @slot('active') Категории @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('prof.category.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('prof.categories.partials.form')

  </form>

</div>

@endsection
