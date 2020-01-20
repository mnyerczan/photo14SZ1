<main class="main-photo">
    <img src="<?=$photo['url']?>" alt="<?=$photo['title']?>" title="<?=$photo['title']?>">
    <section id="update-section">
        <form action="index.php?page=update" method="POST">
            <table>
                <tr>            
                    <td>
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" 
                        placeholder="<?=$photo['title']?>" size="30">
                        <input type="hidden" name="id" value="<?=$photo['id']?>">
                    </td>
                </tr>                
                <tr>
                    <td>                        
                        <input type="submit" name="submit" class="btn green" value="Update">
                    </td>
                </tr>
            </table>
        </form>
        <form action="index.php?page=delete" method="POST">
            <table> 
                <tr>
                    <td>
                        DANGER ZONE
                    </td>
                </tr>       
                <tr>
                    <td>                        
                        <input type="submit" name="submit" class="btn red" value="Delete">
                        <input type="hidden" name="id" value="<?=$photo['id']?>">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</main>