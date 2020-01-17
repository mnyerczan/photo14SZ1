<main class="photos">
    <?php foreach ( $photos as $photo ): ?>
    <a href="index.php?page=photo&id=<?=$photo['id']?>">
    <img 
        src="<?=$photo['thumbnail']?>" 
        alt="<?=$photo['title']?>" 
        title="<?=$photo['title']?>">    
    <?php endforeach; ?>    
    </a>
</main>