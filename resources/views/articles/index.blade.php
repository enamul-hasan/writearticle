@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Articles List <a href="{{ url('articles/create') }}" style="float: right;font-size: 18px;">Add Article</a></h2>


            @if(count($articles))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Posted By</th>
                        <th>Published On</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($articles as $article)    
                    <tr>
                        <td><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></td>
                        <td>{{ $article->body }}</td>
                        <td>{{ $article->users_id }}</td>
                        <td>{{ $article->published_at->format('m/d/Y H:m:s') }}</td>
                        
                        @if (Auth::user() && Auth::id() == $article->users_id)
                        <td>
                            <a href="{{ url("articles/$article->id/edit")}}" class="btn btn-info" role="button">Edit</a>
                        </td>
                        <td>
                            {{ Form::open(array('url' => 'articles/' . $article->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                        @endif
                    </tr>
                    @endforeach   

                </tbody>
            </table>
            @endif


        </div>
    </div>
</div>
@endsection

