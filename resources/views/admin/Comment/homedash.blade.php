@extends('layouts.admin')

@section('content')
    <div class="col-md-12 my-3">
        <div class="row">
            <div class="col-md-6">Comment DASHBOARD</div>

        </div>
        <div id="msg"></div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('COMMENTS') }}</div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Parent Post</th>
                            <th>Comment</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Parent Post</th>
                            <th>Comment</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach($contents as $content)
                            <tr>
                                <td> {{$i++}} </td>
                                <td> {{$content->post->post_title}} </td>
                                <td> {{$content->message}} </td>
                                <td> {{$content->email}} </td>
                                <td class="d-flex">
                                    <div class="mx-2">

                                        <form action="/admin/Comment/{{$content->id}}" method="POST" class="accept_form" >
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" value="status" name="action">

                                            @if($content->comment_status==1)
                                        <button class="btn btn-success btn-sm">Accepted</button>
                                            @else
                                                <button type="submit" class="btn btn-info btn-sm pend" value="check"  id="pend">Pending</button>
                                            @endif
                                        </form>


                                    </div>

                                    <form action="/admin/Comment/{{$content->id}}" method="POST" class="delete_form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" value="delete" name="action" class="action">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>


                    </table>
                    <ul class="custom-pagination list-unstyled">


{{--                        <li>{{ $contents->links() }}</li>--}}
                    </ul>
                </div>



            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
      $(document).ready(function () {


          $(".accept_form").submit(function (e) {
              e.preventDefault();
              let form=$(this);
              let action=$(form).attr('action');
              let data=$(form).serialize();
              let pend=$(form).find('#pend');
              var notification_count=parseInt($(".notification").text());
              var new_notification_count= (notification_count -1);
              // console.log(pend);
              $.ajax({
                  url:action,
                  type:'POST',
                  data:data,
                  success:function (response) {
                      if($.isEmptyObject(response.error)){
                          $('#msg').removeClass('.alert alert-danger').addClass('.alert alert-success');
                          $('#msg').text(response.success);
                          $(pend).removeClass('.btn btn-info').addClass('.btn btn-success');
                          $(pend).text('Accepted');
                          $(".notification").text(new_notification_count);
                      }
                      else{
                          $('#msg').removeClass('.alert alert-success').addClass('.alert alert-danger');
                          $('#msg').text(response.error);
                          // printErrorMsg(response.error);
                      }

                  }
              });

          });

          $(".delete_form").submit(function (e) {
              e.preventDefault();
              let form=$(this);
              let action=$(form).attr('action');
              let data=$(form).serialize();
              var notification_count=parseInt($(".notification").text());
              var new_notification_count= (notification_count -1);
              var counter= $(form).prev().find('.pend').html();
              // console.log(counter);
              let row=$(form).parentsUntil('tbody');
              $.ajax({
                  url:action,
                  type:'POST',
                  data:data,
                  success:function (response) {
                      if($.isEmptyObject(response.error)){
                          $('#msg').removeClass('.alert alert-danger').addClass('.alert alert-success');
                          $('#msg').text(response.success);
                          $(row).fadeOut();
                          if(counter==='Pending') {
                              $(".notification").text(new_notification_count);
                          }

                      }
                      else{
                          $('#msg').removeClass('.alert alert-success').addClass('.alert alert-danger');
                          $('#msg').text(response.error);
                          // printErrorMsg(response.error);
                      }

                  }
              });

          });

      });

    </script>
@endsection
