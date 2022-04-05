  <?php 
             include_once("templates/header.php");

        if(isset($_GET['id'])) {

            $postId = $_GET['id'];
            $currentPost;

            foreach($posts as $post) {
                if($post['id'] == $postId) {
                    $currentPost = $post;
                }
            }
        }
?>
      
    <main id="post-container">
            <div class="content-container">
                    <h1 id="main-title"><?= $currentPost['title'] ?> </h1>
                    <p id="post-description"><?=  $currentPost ['description'] ?></p>
                    <div class="img-container">
                    <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
                    </div>
                    <p class="post-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed illum neque minima odit accusamus nihil possimus perferendis ad quis, minus molestias. Doloremque vel, natus illum voluptates aliquid aspernatur enim beatae.
                        Quibusdam blanditiis odio cum accusantium amet quos incidunt quis neque voluptates dolorum, corrupti repellendus vitae dolorem fugit itaque, facilis aspernatur omnis illo facere. Cupiditate vel eaque numquam. Ut, dignissimos libero.
                        Ullam rem similique, eos, tempora ex eaque voluptatibus cupiditate illo nostrum, qui magni perspiciatis saepe inventore recusandae accusamus voluptas modi impedit eum optio. Cum expedita optio veritatis excepturi quidem enim.
                        Nihil, illum architecto corrupti repellendus minus maiores mollitia assumenda at iste pariatur, autem cupiditate eveniet accusamus temporibus obcaecati libero quas repudiandae nostrum dicta! Iure officiis quam dolorum esse quibusdam facere!
                        Aspernatur, ad non! Tempora provident, illum eligendi placeat, nisi tempore neque id eos ducimus voluptate consequatur earum corporis molestias necessitatibus qui vero assumenda facilis dignissimos quod mollitia excepturi? Incidunt, maiores!
                        Iusto dolor ipsam tenetur eum consectetur ut, odit quis atque aut et voluptatibus illum quo, aperiam impedit. Molestiae tempora animi, error maiores ut, ipsum eligendi velit exercitationem magnam a ullam?
                        Fugiat voluptatibus dolores nihil minus, saepe a laboriosam excepturi! Iure placeat sint quisquam nesciunt, similique officia dolorum sit? Fuga quaerat, excepturi fugiat sint ex consequatur adipisci suscipit autem ducimus consectetur.
                        Accusantium numquam id possimus! Repudiandae quas consequuntur, architecto sed earum id quia incidunt eaque illo assumenda adipisci obcaecati laboriosam ratione unde hic voluptate expedita vitae pariatur impedit! Asperiores, provident aliquid.
                        Corporis voluptatibus veniam esse blanditiis. Itaque praesentium consequatur fugiat nihil in inventore incidunt at libero provident? In ea culpa asperiores fugit voluptas ipsa similique delectus officiis, sequi consequatur quidem ipsum.
                        Facere animi eaque ullam sit eum. Labore officiis quos vero non omnis, aut ea aliquam vel ratione error quasi voluptatem cum quam ducimus modi blanditiis, dolorem adipisci totam quia qui.
                    </p>
            </div>
     <aside id="nav-container">
        <h3 id="tags-title"> Tags</h3>
        <ul id= "tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                       <li> <a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>    
         </ul>
         <h3 id="categories-title">Categorias</h3>
         <ul id="categories-list">
         <?php foreach($categories as $category): ?>
                       <li> <a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>    
         </ul>
    </aside>
    </main>
   
    <?php
    include_once("templates/footer.php")
    ?>