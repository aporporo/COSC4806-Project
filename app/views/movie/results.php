
<?php require_once 'app/views/templates/header.php' ?>

<style>
    .list-inline {
      display:block;
    }
    .list-inline li {
      display:inline-block;
    }
    .list-inline li:not(:last-child)::after {
      content:'|';
      margin:0 10px;
    }

    .bi-star {
        transition: fill 0.3s ease;
    }
    .bi-star:hover {
        fill: #FF8C00;
    }
</style>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                
                results

                <?php 
                echo "<pre>";
                print_r($data['movie']);  ?>


            </div>
        </div>
        <div class="row border-bottom">
            <div class="col-lg-6">
                <h1><?php echo $data['movie']['Title'] ?></h1>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        
                        <?php echo $data['movie']['Year'] ?>
                    </li>
                    <li class="list-inline-item">
                        <?php echo $data['movie']['Rated'] ?>
                    </li>
                    <li class="list-inline-item">
                        <?php echo $data['movie']['Runtime'] ?>
                     </li>
                    
                    
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="row  justify-content-end">
                    <div class="col-lg-2 text-center">
                        
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/IMDb_Logo_Square.svg/128px-IMDb_Logo_Square.svg.png?20200218171646" width="50" height="50" alt="IMDb Logo"></img>
                        <br>
                        <?php echo $data['movie']['imdbRating']?>/10
                    </div>
                    <div class="col-lg-2 text-center">
                        
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Metacritic.svg/88px-Metacritic.svg.png?20150314054830" width="50" height="50" alt="IMDb Logo"></img>
                        <br>
                        <?php echo $data['movie']['Metascore']?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Rotten_Tomatoes_alternative_logo.svg/144px-Rotten_Tomatoes_alternative_logo.svg.png?20180315205910" width="50" height="50" alt="IMDb Logo"></img>
                        
                        <br>
                        <?php echo $data['movie']['Ratings'][1]->Value?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <a class="d-block text-body-emphasis text-decoration-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                            </svg>
                            <br>
                            Rate
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"></div>
            
        </div>
            
    </div>

    



    

    <br>



    <?php require_once 'app/views/templates/footer.php' ?>