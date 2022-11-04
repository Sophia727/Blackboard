@extends('template.user_homepage')
@section('content')

<div class="row">
    {{-- alert message box --}}
    @if(session('status'))
    <x-alert type="success" :message="session('status')" class="mb-4"/>   
    @endif
    @if(session('error'))
    <x-alert type="danger" :message="session('error')" class="mb-4"/>   
    @endif
</div>
<div class="row">
<div class="col-6">
  <h1>
    <strong>Reports</strong>
  </h1>
</div>
<div class="col-6">
    <div class="btn-toolbar d-grid d-md-flex justify-content-md-end ">
        <a href="{{route("add.report")}}" class="btn btn-outline-secondary ">
            <i class="bi bi-plus-circle"></i>
            Upload New File
        </a>
    </div>   
</div>
</div>
<div class="row">
    <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Tag</th>
          <th scope="col">File Name</th>
          <th scope="col">Uploaded Date</th>
          <th scope="col">Uploaded by</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reports as $report)
        <tr>
          <th scope="row" id="formFile">{{$report->id}}</th>
          <td>{{$report->tag}}</td>
          <td>{{$report->name}}</td>
          <td>{{$report->created_at}}</td>
          <td>{{$report->author->name}}</td>
          <td>

            {{-- download --}}
            <a class="btn btn-outline-secondary btn-sm" target="_blank"
             href="{{asset('storage/'.$report->file)}}" title="Download" class="btn btn-secondary btn-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
              </svg>
            </a>
                    
            
            {{-- delete --}}
            <button onclick="if(confirm('Are you sure you want to delete this file?')){
              document.getElementById('report-delete-{{$report->id}}').submit(); }"
            class="btn btn-outline-secondary btn-sm" type="submit" title="Delete">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
          </button>
            <form id="report-delete-{{$report->id}}" action="{{route('destroy.report', ['report'=>$report->id])}}" method="post">
              @csrf
              @method('delete')
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
</table>

</div>

  @endsection