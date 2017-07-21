@extends('layouts.app')

@section('title', 'Список проектов')

@section('content')
    @parent
    <div class="section">
        <div class="container">
            <h1 class="title title-xxl">Список проектов</h1>
            <table class="table">
                <thead class="table__head">
                    <tr class="table__row">
                        <td class="table__column">№</td>
                        <td class="table__column">Название</td>
                        <td class="table__column">Описание</td>
                        <td class="table__column">Рубрика</td>
                        <td class="table__column">Автор</td>
                        <td class="table__column">Модерация</td>
                        <td class="table__column">Опубликован</td>
                    </tr>
                </thead>
                <tbody class="table__body">
                    @foreach ($projects as $project)
                        <tr class="table__row">
                            <td class="table__column">{{ $project->id }}</td>
                            <td class="table__column"><a class="link" href="{{ route('projects.show', $project) }}">{{ $project->title }}</td>
                            <td class="table__column">{{ $project->description }}</td>
                            <td class="table__column">
                                @if($project->rubric)
                                    <a class="link" href="{{ route('rubrics.show', $project->rubric) }}">{{ $project->rubric->name }}</a>
                                @endif
                            </td>
                            <td class="table__column">{{ $project->user->full_name }}</td>
                            <td class="table__column">
                                @if ($project->moderated === null)
                                    Рассматривается
                                @elseif ($project->moderated == 1)
                                    Одобрен
                                @else
                                    Отклонён
                                @endif
                            </td>
                            <td class="table__column">
                                {{ $project->published_at ? 'Да' : 'Нет' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $projects->links('layouts.pagination') }}

@endsection