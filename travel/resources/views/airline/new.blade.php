<form action="/api/airlines" method="post">
    {{csrf_field()}}
    <input type="text" name="name" id="Name">
    <input type="text" name="country" id="Country">
    <input type="submit" value="Ok">
</form>