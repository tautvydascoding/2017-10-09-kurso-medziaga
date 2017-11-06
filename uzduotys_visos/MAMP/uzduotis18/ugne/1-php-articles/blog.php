<?php
        include("./header.php");
        include("./db_functions2.php");
        

$allArticles = getArticles();
    if($allArticles !=NULL) {        
        
        while($straipsnis = mysqli_fetch_assoc($allArticles)) : 
?>
            
            <h2>
                <a href="./articles.php?article_id=<?php echo $straipsnis['id'];?>">
                    
                    <?php echo $straipsnis['title'];?>
                    
                </a>
            </h2>
            
<?php
        endwhile;
    }
        
        include("./footer.php");
?>