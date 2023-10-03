<form action="/api/airlines/{{$airline->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" id="Name">
    <input type="text" name="country" id="Country">
    <input type="submit" value="Ok">
</form>