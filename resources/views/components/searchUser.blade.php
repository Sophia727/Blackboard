@props(['view'=>'post-login.admin.lists.studentsList'])

<form method="get" action="{{route("search.user", ['view'=>$view])}}">

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="" name="query" aria-label="Example text with button addon" aria-describedby="button-addon1">
    <button class="btn btn-warning" type="submit" id="button-addon1">Search</button>
  </div>
</form>