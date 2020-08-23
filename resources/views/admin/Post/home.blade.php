@extends('layouts.admin')

@section('content')
    <div class="col-md-12 my-3">
        <div class="row">
        <div class="col-md-6">POST DASHBOARD</div>
        <div class="col-md-6" style="float:right">
            <button class="btn btn-info" style="float:right"><a href="/admin/Post/create">Add new post</a></button>
        </div>
    </div>
    </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('POSTS') }}</div>

                <div class="card-body">

                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($posts as $post)
                            <tr>
                        <td> {{$i++}} </td>
                        <td> {{$post->post_title}} </td>
                        <td> {{$post->post_author}} </td>
                        <td class="d-flex">
                            <div class="mx-2">
                           <button class="btn btn-info btn-sm"><a href="/admin/Post/{{$post->id}}">View Details</a></button>
                            </div>

                           <button class="btn btn-danger btn-sm">Delete</button>

                        </td>
                            </tr>

                        @endforeach
                        </tbody>


                    </table>
                        <ul class="custom-pagination list-unstyled">


                            <li>{{ $posts->links() }}</li>
                        </ul>
                    </div>



                </div>
            </div>

</div>

@endsection
@section('scripts')
@endsection
