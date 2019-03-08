@extends('layouts.app')
@section('content')

    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <form action="{{ route('book.store') }}" method="POST">
      {{ csrf_field() }}
        <div class="form-group">
            <input type="date" id="date" name="date" class="form-control" required="required"/>
        </div>
        <div class="form-group">
            <input type="time" id="time" name="radio_time" class="form-control" required="required"/>
         </div>
         <div class="form-group">
           <input type="submit" value="Book" />
         </div>
    </form>
</div>
@endsection
