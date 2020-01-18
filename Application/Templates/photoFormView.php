<fieldset class="fieldset">
    <legend>Add photo</legend>
    <form action="index.php?page=add" method="POST">
        <label for="thumbnail">thumbnail</label>
        <input type="text" name="thumbnail" id="thumbnail" size="30" autofocus>
        <br>
        <label for="url">url</label>
        <input type="text" name="url" id="url" size="30">
        <br>
        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <br>
        <input class="btn" type="submit" name="new-submit" value="submit">
    </form>
</fieldset>