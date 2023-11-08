

<form action="user" method="POST">
    @csrf
<label >username:</label>
<input type="text" name="username"><br><br>
<label >Password:</label>
<input type="password" name="password"><br><br>
<button type="submit">Submit</button>
</form>