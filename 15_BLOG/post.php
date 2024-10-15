<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse doloribus quas optio? Labore inventore error, perspiciatis molestias autem accusamus porro maiores incidunt quas quos ea laboriosam officia dolores exercitationem eaque?
        Totam iusto quas delectus nulla ipsum dolor veniam. Placeat voluptate, voluptatum consequatur earum harum neque dignissimos reiciendis atque repellendus hic error corrupti porro vitae? Asperiores deserunt vero sapiente nobis sunt.
        Eius omnis quae aliquid. Provident nam, nulla dolorem qui sed aspernatur ducimus incidunt, nemo eum sequi adipisci voluptas modi libero atque nisi obcaecati nostrum, corporis architecto ut labore amet quod!
        Quia porro, voluptatibus iure deleniti nulla dolores voluptates quos? Earum ipsa sequi quibusdam aut ad. Autem quos harum explicabo distinctio quae rem aut accusantium, eveniet vel ipsa. Iusto, consectetur suscipit.
        Tenetur iure facilis unde. A reiciendis doloribus quidem ipsam, velit mollitia aliquid ducimus architecto eum nihil quisquam modi, corporis exercitationem, ut cumque delectus assumenda quos illo totam! Odit, ut quae?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag){
                ?><li><a href="#"><?= $tag?></a></li>
            <?php }?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category){
                ?><li><a href="#"><?= $category?></a></li>
            <?php }?>
        </ul>
    </aside>
</main>
<?php 
    include_once("templates/footer.php");
?>