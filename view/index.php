<?php
echo '<pre>'; print_r($_SESSION); echo '</pre>';
//echo '<pre>'; print_r($this->job_list); echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <title>HappyTech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../code/css/bootstrap.min.css">
    <link rel="stylesheet" href="../code/css/myStyle.css">
    <script src="../code/js/jquery-3.3.1.js"></script>

    <style>
        .modal-content{
            background: -webkit-linear-gradient(to left, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to left, #91EAE4, #86A8E7, #7F7FD5);
        }
    </style>
    <script src="../code/js/form-validation.js"></script>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"> HJob Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="joblist.php">Application List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mycv.php">My CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="applyprocess.php">Apply Process</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-default btn-rounded " data-toggle="modal" data-target="#exampleModalLong"
                       id="signInLink">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Welcome to HJob</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="loginForm">
                    <p class="text-center display-4 font-weight-bold">Login</p>
                    <form action="index.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');
                    >
                        <div class="form-group">
                            <label for="email">Email-ID</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                   placeholder="Email-ID">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" required name="password"
                                   placeholder="password">
                        </div>
                        <div class="row">
                            <button type="submit" value="submit_login" class="btn btn-primary w-75 mx-auto" name="submit">Sign In</button>
                        </div>

                    </form>

                    <hr>

                    <p class="text-right text-muted"><a id="goRegisterForm">don't have an accounting?</a></p>

                </div>

                <div id="registerForm">
                    <p class="text-center display-4 font-weight-bold">Login</p>
                    <form>
                        <div class="form-group">
                            <label for="usernameS">Username</label>
                            <input type="text" class="form-control" id="usernameS" required
                                   placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="passwordS">Password</label>
                            <input type="text" class="form-control" id="passwordS" required
                                   placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="password2S">Password</label>
                            <input type="text" class="form-control" id="password2S" required
                                   placeholder="password">
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary w-75 mx-auto">Sign Up</button>
                        </div>

                        <hr>

                        <p class="text-right text-muted"><a id="goSignInForm">Already have an accounting?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!--container-->
<div class="container">


    <!--image jumbtron and search form-->
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark shadow-lg">

        <!--welcome text-->
        <div class="col-md-12 px-0 mb-5 mt-5">
            <h1 class="display-4 font-italic font-weight-bold">Online HappyTech HJob Application Recruitment System</h1>
            <p class="lead my-3 font-weight-bold ">Welcome to the best Online HappyTech HJob Application Recruitment System HappyTech Company</p>
            <!--          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
        </div>

        <!--search form-->
        <!--form class="row mb-6">
            <div class="col-md-8">
                <input type="text" class="form-control inline" placeholder="I am looking for...">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <input type="button" value="Search" class="form-control inline">
            </div>
        </form-->
        <p></p>
    </div>

    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Latest Jobs:
    </h3>

    <!--3 HappyTech HJob Application boxes-->
    <?php
    for($i=0;$i<count($this->job_list);$i++)
    {?>
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card flex-md-row mb-4 box-shadow h-md-250 shadow-lg JB4">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3><strong class="d-inline-block mb-0 text-primary"><?php echo $this->job_list[$i]['title']?></strong></h3>
                    <p class="mb-0">
                        <a class="text-dark" href="#">UK</a>
                    </p>
                    <div class="mb-1 text-muted"><?php echo date_format(date_create($this->job_list[$i]['post_date']),"M-d") ?></div>
                    <p class="card-text mb-auto"><?php echo $this->job_list[$i]['brief_description']?></p>
                    <a href="#">Continue reading</a>

                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <hr>
    <!-- Copyright -->

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 HappyTech, Company</p>
    </footer>
</div>

</body>
<script>
    $("#registerForm").hide();

    // Calling Register Form
    $("#goRegisterForm").click(function() {
        $("#loginForm").hide();
        $("#registerForm").show();
        return false;
    });

    $("#goSignInForm").click(function() {
        $("#loginForm").show();
        $("#registerForm").hide();
        return false;
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</html>
