<html>

<form id='register' action='Index.php' method='post' accept-charset='UTF-8'>

    <fieldset >

        <legend>Register</legend>

        <input type='hidden' name='submitted' id='submitted' value='1'/>

        <label for='username' >UserName:</label>

        <input type='text' name='username' id='username'  maxlength="50" />

        <label for='password' >Password:</label>

        <input type='password' name='password' id='password' maxlength="50" />

        <label for='repeatedPassword' >Repeat Password:</label>

        <input type='password' name='password' id='repeatedPassword' maxlength="50" />

        <input type='submit' name='Submit' value='Register' />

    </fieldset>
</form>

</html>
