@extends('layouts.app_prof')

@section('content');

<div class="container">
  @component('prof.components.breadcrumb')
    @slot('title') Список статей @endslot
    @slot('parent') Главная @endslot
    @slot('active') Статьи @endslot
  @endcomponent
    <hr />

    <a href="{{route('prof.article.create')}}" class="btn btn-primary pull-right">
    <i class="fa fa-plus-square-o"></i> Создать статью</a>

    <table class="table table-striped">
      <thead>
        <th>Наименование</th>
        <th>Публикация</th>
        <th class="text-right">Действие</th>
      </thead>
      <tbody>
        @forelse ($articles as $article)
          <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->published}}</td>
            <td class="text-right">
              <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" class="" action="{{route('prof.article.destroy', $article)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button type="submit" class="btn" name="button"><i class="fa fa-trash-o"></i></button>
                <a class="btn btn-default" href="{{route('prof.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center "><h2>Данные отсутствуют</h2></td>
          </tr>
        @endforelse
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">
             <ul class="pagination pull-right">
               {{$articles->links()}}
             </ul>
          </td>
        </tr>
      </tfoot>
    </table>
</div>
@endsection
