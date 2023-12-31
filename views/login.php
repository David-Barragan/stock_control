<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOG-IN</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">  <!-- our style sheet -->
    </head>

    <body id="login-body">
    
        <main> 
            <div class="container px-4 py-5 mx-auto">
                <div class="card card0">
                    <div class="d-flex flex-lg-row flex-column-reverse">
                        <div class="card card1">
                            <!-- the next div center all the content in our card one -->
                            <div class="row justify-content-center my-auto">
                                <!-- The following div groups all the content in a col width a medium of 8. and  adjust the content with a simple col. -->
                                <div class="col-md-8 col-10 my-5">
                                    <!-- text-center; it's a class of bootstrap that is responsible for aligning the text, in this case in the center-->
                                    <h3 class="mb-5 text-center heading">Practice Project</h3>
            
                                    <h4 class="msg-info">Please login to your account</h4>

                                    <form action="../controllers/login.php" method="post">
                                        <div class="form-group">
                                            <!-- form-control-label isn't a bootstrap class -->
                                            <label class="form-control-label text-muted">Username</label>
                                            <!-- In the input's the class 'form-control' is mandatory for to adapt in the form-group. -->
                                            <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label text-muted">Password</label>
                                            <input type="password" id="psw" name="password" placeholder="Password" class="form-control">
                                        </div>
                
                                        <div class="row justify-content-center my-3 px-3">
                                            <!-- ?btn-block; is like display: block; 
                                            in shot, it makes the button occupy all the available width. -->
                                            <button type="submit" class="btn-block btn-color">Login</button>
                                        </div>
                                    </form>
            
                                    <div class="row justify-content-center my-2">
                                        <!-- !text-muted; is a class of bootstrap with a little fade or in simple word's a little light than the others  -->
                                        <a href="#"><small class="text-muted">Forgot Password?</small></a>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom text-center mb-5">
                                <p class="sm-text mx-auto mb-3">Don't have an account? <a class="btn btn-white ml-2" href="../index.html" id="create">Create new</a></p>
                            </div>
                        </div>

                        <div class="card card2">
                            <!-- 
                                !my-auto -> margin-verticual: auto; center in the sense y, or vertical sense.
                                ?mx-md-5 margin-horizontal: md-5, margin in the horizantal sense, and md is for responsive design and that mean medium.
                             -->
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white">We are a team of student's in practice</h3>
                                <small class="text-white">If you have feedback to give us, we look forward to any comments, please see what we are doing, and criticize what we are doing.</small>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </main>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <script src="./js/app.js"></script>
    </body>
</html>