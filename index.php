<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMEGA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
    require "connect.php";
?>
<body>
    <div class="all-father">
        <div class="all-father-cover">

            <div class="background-img-box">
                <img src="background.jpg" alt="">
            </div>
            <div class="background-text">
                <h1>OMEGA</h1>
            </div>
            <div class="filter"></div>

            <div class="menu-and-content">
                <div class="menu-page-indicator">
                    <input type="radio" name="page" value="" class="page-indicator" id="home">
                    <input type="radio" name="page" value="" class="page-indicator" id="work">
                    <input type="radio" name="page" value="" class="page-indicator" id="contect">
                    <input type="radio" name="page" value="" class="page-indicator" id="profile">
                </div>
                <div class="menu-parent">
                    <div class="menu-link-list">
                        <div class="brand-text-box menu-component-box">
                            <a href="#" id="brand-text">OMEGA</a>
                        </div>
                        <ul class="menu-text-container">
                            <li class="menu-text-box menu-component-box" id="menu-link-01"><a href="#">home</a></li>
                            <li class="menu-text-box menu-component-box" id="menu-link-02"><a href="#">work</a></li>
                            <li class="menu-text-box menu-component-box" id="menu-link-03"><a href="#">contect</a></li>
                            <li class="menu-text-box menu-component-box" id="menu-link-04"><a href="#">profile</a></li>
                        </ul>
                        <div class="footer-text-box menu-component-box"></div>
                    </div>
                    <div class="menu-icon-list">
                        <div class="brand-icon-box menu-component-box">
                            <a href="#" id="brand-icon">
                                <i class="fa-solid fa-ring"></i>
                            </a>
                        </div>
                        <ul class="menu-icon-container">
                            <li class="menu-icon-box menu-component-box">
                                <a href="#">
                                    <div class="icon-parent" id="icon-parent-home">
                                        <div class="icon-box icon-box-shadow">
                                            <div class="icon main-icon-shadow">
                                                <i class="fa-solid fa-house-chimney-window"></i>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon main-icon">
                                                <i class="fa-solid fa-house-chimney-window"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-icon-box menu-component-box">
                                <a href="#">
                                    <div class="icon-parent" id="icon-parent-work">
                                        <div class="icon-box icon-box-shadow">
                                            <div class="icon main-icon-shadow">
                                                <i class="fa-solid fa-laptop"></i>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon main-icon">
                                                <i class="fa-solid fa-laptop"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-icon-box menu-component-box">
                                <a href="#">
                                    <div class="icon-parent" id="icon-parent-contect">
                                        <div class="icon-box icon-box-shadow">
                                            <div class="icon main-icon-shadow">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon main-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-icon-box menu-component-box">
                                <a href="#">
                                    <div class="icon-parent" id="icon-parent-profile">
                                        <div class="icon-box icon-box-shadow">
                                            <div class="icon main-icon-shadow">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon main-icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-icon-box menu-component-box">
                            <a href="https://github.com/heyomega" target="_blank">
                                <i class="fa-brands fa-github-alt"></i>
                            </a>
                        </div>

                    </div>
                </div>



                <div class="content-parent">
                    <div class="content-page-cover">
                        <div class="content-page" id="page-01">
                            <div class="content-container home-content-container">
                                <div class="home-page-text">
                                    <div class="text-01"><span class="first-letter">h</span>eyomega</div>
                                    <div class="text-02">A person who knows how to control the problems or hunt them by my blade...</div>
                                </div>
                            </div>
                        </div>
                        <div class="content-page" id="page-02">
                            <div class="content-container">
                                <div class="content-data">
                                    <div class="cards-container">
                                        <?php 
                                            $sql = "SELECT * FROM project";
                                            $result = $conn->query($sql);
                                            
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    $title = $row["title"];
                                                    $thumbnail = $row["thumbnail"];
                                                    $source = $row["source"];
                                                    $blog = $row["blog"];
                                                    $date_time = $row["reg_date"];
                                                    
                                                    echo '<div class="card-box">
                                                    <img src="'.$thumbnail.'" alt="">
                                                    <div class="card-hidden-data" style="display:none;">
                                                        <span class="card-data-01">'.$title.'</span>
                                                        <span class="card-data-02">'.$thumbnail.'</span>
                                                        <span class="card-data-03">'.$source.'</span>
                                                        <span class="card-data-04">'.$blog.'</span>
                                                        <span class="card-data-05">'.$date_time.'</span>
                                                    </div>
                                                    </div>';
                                                }
                                            } else {
                                            echo "0 results";
                                            }

                                            $conn->close();
                                        ?>
                                        <!-- <div class="card-box">
                                            <img src="img/img3.jpg" alt="">
                                        </div>
                                         -->


                                    </div>
                                </div>
                                <div class="content-footer"></div>
                            </div>
                        </div>
                        <div class="content-page" id="page-03">
                            <div class="content-container contect-content-container">
                                <div class="background-of-text">
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled">heyome9a@gmail.com</span>
                                    <span class="background-text-styled" id="contect-mail"><a href="mailto:madstar@gmail.com">heyome9a@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="content-page" id="page-04">
                            <div class="content-container profile-content-container">
                                <div class="profile-img-container">
                                    <div class="profile-img-box">
                                        <div class="img01 profile-img00">
                                            <img src="img/img10.jpg" alt="" class="profile-img">
                                        </div>
                                        <div class="img02 profile-img00">
                                            <img src="img/img10.jpg" alt="" class="profile-img">
                                        </div>
                                        <div class="img03 profile-img00">
                                            <img src="img/img10.jpg" alt="" class="profile-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-text-container">
                                    <div class="text-title">OMEGA</div>
                                    <div class="location text-with-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                        tokyo, japan
                                    </div>
                                    <p class="about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto quis eius animi maiores dolorem quos nemo minima doloribus fugit perferendis facilis officiis voluptate est alias repudiandae laudantium labore, corrupti vitae. Facilis deserunt laborum consectetur fugiat dicta possimus dolor suscipit aliquid repudiandae delectus perferendis, sit, facere quidem cum itaque voluptas ex.</p>
                                    <div class="skills">
                                        <div class="skills-title text-with-icon">
                                            <i class="fa-solid fa-brain"></i>
                                            skills
                                        </div>
                                        <button>html</button><button>css</button><button>javascript</button><button>jquery</button><button>electron</button><button>bootstrap</button><button>scss</button><button>git</button><button>anguler</button><button>php</button><button>mysql</button><button>python</button><button>django</button>
                                    </div>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="#"><i class="fa-brands fa-figma"></i></a>
                                        <a href="#"><i class="fa-brands fa-deviantart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="hamburger-parent">
            <div class="hamburger">
                <i class="fa-solid fa-ellipsis"></i>
            </div>
        </div>
        <div class="goback-parent">
            <div class="goback">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
        </div>
        <div class="content-page-data">

        </div>
        <div class="cards-data">
            <div class="cards-data-cover">
                
                <div class="cards-data-img-box">
                    <img src="" alt="" id="active-card-thumbnail">
                </div>
                
                <h1 class="title-02" id="active-card-title"></h1>
                <div id="active-card-text-container" class="scroll_this">
                    <span id="active-card-date"></span><br>
                    <a href="" id="active-card-link">visit the code... <i class="fa-solid fa-arrow-up-right-from-square"></i></a><br>
                    <span id="active-card-blog"></span><br>

                </div>
        
            </div>
        </div>

    </div>
    </div>


<script src="script.js"></script>
</body>

</html>