


<form action="{{ route("comics-app-name-update",$edit->id) }}" method="post">@csrf

    <input name="app_name" value="{{ $edit->app_name }}"/>
    <button type="submit" class="btn btn-info mr-3">Submit</button>

</form>