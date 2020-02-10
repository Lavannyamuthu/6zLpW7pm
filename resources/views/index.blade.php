@extends('layouts.main')
@section('content')
<!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Let's get your vehicle back on the trail!</h1>
      </div>
    </div>
  </div>
</header>

<!-- List Tickets -->
<section class="bg-light">
  <div class="container">
    <div class="row">
      <table class="table table-striped">
        <thead>
          <th>Ticket #</th>
          <th>Client Name</th>
          <th>Status</th>
          <th>Last Update</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach($requests AS $request)
          <tr>
            <td>{{ $request->id }}</td>
            <td>{{ $request->client_name }}</td>
            <td>{{ $request->status }}</td>
            <td>{{ $request->updated_at->format('m/d/Y h:i a') }}</td>
            <td><a href="{{ route('edit',[$request->id]) }}" class="btn btn-primary">EDIT</a></td>
            <td>
              <form action="{{ route('serviceRequest.delete',[$request->id]) }}" method="POST" class="delete" id="delete">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="DELETE" />
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $requests->links() }}
    </div>
  </div>
</section>
<script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $("#delete").on("submit", function() {
    alert("test");
    console.log("test123");
    return confirm("Are you sure you want to delete the service?");
  });
</script>
@endsection