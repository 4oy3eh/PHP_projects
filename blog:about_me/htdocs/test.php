<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comment and reply system in PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 post">
            <h2 id="what-does-a-computer-programmer-do">What does a Computer Programmer do?</h2>
            <p><img alt="A computer programmer working at designing a computer program." class=" lazyloaded" data-src="https://res.cloudinary.com/hnpb47ejt/image/upload/v1544637963/zuwfkmzsqf9hnhw43ltz.jpg" src="https://res.cloudinary.com/hnpb47ejt/image/upload/v1544637963/zuwfkmzsqf9hnhw43ltz.jpg"></p>
            <p>The 21st century has brought in an extraordinary amount of technological progress. In the centre of this modern technology sits computer programmers, with the technological skills to create and navigate any new projects that may come their way. </p>
            <p>It’s the job of computer programmers to take designs created by software developers and engineers and turn them into sets of instructions that computers can follow. These instructions result in the social media platforms, word processing programs, browsers, and more that people use every day.</p>
            <p>There is an ongoing debate on the extent to which the writing of programs is an art, a craft, or an engineering discipline. In general, good programming is considered to be the measured application of all three, with the goal of producing an efficient software solution. </p>
            <p>The discipline differs from many other technical professions in that a computer programmer, in general, does not need to be licensed or pass any standardized (or governmentally regulated) certification tests in order to call themselves a "programmer" or even a "software engineer." </p>
            <p>However, representing oneself as a "professional software engineer" without a license from an accredited institution is illegal in many parts of the world.  Because the discipline covers many areas, which may or may not include critical applications, it is debatable whether licensing is required for the profession as a whole.  In most cases, the discipline is self-governed by the entities which require the programming.</p>
            <p>A computer programmer figures out the process of designing, writing, testing, debugging/troubleshooting and maintaining the source code of computer programs. This source code is written in a programming language so the computer can 'understand' it. The code may be a modification of an existing source or something completely new. </p>
            <p>The purpose of programming is to create a program that produces a certain desired behaviour (customization). The process of writing source code often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms, and formal logic.  </p>
            <p>The computer programmer also designs a graphical user interface (GUI) so that non-technical users can use the software through easy, point-and-click menu options. The GUI acts as a translator between the user and the software code.  </p>
            <p>Some, especially those working on large projects that involve many computer programmers, use computer-assisted software engineering (CASE) tools to automate much of the coding process. These tools enable a programmer to concentrate on writing the unique parts of a program. </p>
            <p>A programmer working on smaller projects will often use “programmer environments,” or applications that increase productivity by combining compiling, code walk-through, code generation, test data generation, and debugging functions. </p>
            <p>A computer programmer will also use libraries of basic code that can be modified or customized for a specific application. This approach yields more reliable and consistent programs and increases programmers' productivity by eliminating some routine steps.  The computer programmer will also be responsible for maintaining the program’s health. </p>
            <p>As software design has continued to advance, and some programming functions have become automated, computer programmers have begun to assume some of the responsibilities that were once performed only by software engineers. As a result, some computer programmers now assist <a href="/careers/software-engineer/">software engineers</a> in identifying user needs and designing certain parts of computer programs, as well as other functions.</p>

        </div>

        <!-- comments section -->
        <div class="col-md-6 col-md-offset-3 comments-section">
            <!-- comment form -->
            <form class="clearfix" action="index.php" method="post" id="comment_form">
                <h4>Post a comment:</h4>
                <textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
            </form>

            <!-- Display total number of comments on this post  -->
            <h2><span id="comments_count">0</span> Comment(s)</h2>
            <hr>
            <!-- comments wrapper -->
            <div id="comments-wrapper">
                <div class="comment clearfix">
                    <img src="profile.png" alt="" class="profile_pic">
                    <div class="comment-details">
                        <span class="comment-name">Melvine</span>
                        <span class="comment-date">Apr 24, 2018</span>
                        <p>This is the first reply to this post on this website.</p>
                        <a class="reply-btn" href="#" >reply</a>
                    </div>
                    <div>
                        <!-- reply -->
                        <div class="comment reply clearfix">
                            <img src="profile.png" alt="" class="profile_pic">
                            <div class="comment-details">
                                <span class="comment-name">Awa</span>
                                <span class="comment-date">Apr 24, 2018</span>
                                <p>Hey, why are you the first to comment on this post?</p>
                                <a class="reply-btn" href="#">reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // comments wrapper -->
        </div>
        <!-- // comments section -->
    </div>
</div>
<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>