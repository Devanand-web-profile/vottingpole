<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap.css"> -->
    <title> Online Voting System </title>
</head>
<style>
:root {
    --border: #4A99FF;
    --background: #0043FCFD;
}
</style>

<body>

    <div class="container">
        <?php  require 'navbar.php' ?>
    </div>

    <!-- 2nd line end  -->

    <div class="continer-fluid vote" id="row-2">
        <div class="row" id="row2">
            <div class="col-md-1"></div>
            <div class="col-md-6" id="info-2"> <br>
                <h4>Registered voters in India have the opportunity for early voting..</h4>
                <p>On June 5, 2023, every voter in India who is registered to vote will receive a ballot in the mail
                    that can be returned either in person or by mail.</p>
                <button type="button" class="btn btn-warning btn-lg">Learn more</button>
            </div>
            <div class="col-md-4">
                <img src="assets/img/vote.png" class="img-fluid" style="max-width: 65%; height: auto;">
            </div>
        </div>

    </div><!-- 2nd line end  -->
    <br>


    <!-- 3rd line start  -->

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                            <a href="#"> <img src="assets/img/registered.png" class="img-fluid"
                                    style="width:39%; height:auto;"> </a><br><br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Registered For vote</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                            <a href="#"> <img src="assets/img/mail.png" class="img-fluid"
                                    style="width: 39%; height:auto;"> </a><br><br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Vote By Mail</h6>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                            <a href="#"> <img src="assets/img/result.png" class="img-fluid"
                                    style="width:39%; height:auto;"> </a><br><br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">View Election Results</h6>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                            <a href="#"> <img src="assets/img/ballot.png" class="img-fluid"
                                    style="width:39%; height:auto;"> </a><br><br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">What's on the ballot</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- 3rd row 2nd line  -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                            <a href="#"> <img src="assets/img/where-to-vote.png" class="img-fluid"
                                    style="width:39%; height:auto;"> </a><br><br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Where to Vote </h6>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                                <a href="#"> <img src="assets/img/badge.png" class="img-fluid"
                                        style="width:55%; height:auto;"> </a><br><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Become a Poll</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                                <a href="#"> <img src="assets/img/annc.png" class="img-fluid"
                                        style="width:38%; height:auto;"> </a><br><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Campaign</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body" style="text-align: center; border: 1px solid var(--border);"><br>
                                <a href="#"> <img src="assets/img/news.png" class="img-fluid"
                                        style="width:47%; height:auto;"> </a><br><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary">News & Press</h6>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- 3rd line end  -->
        <div class="space pt-3"></div>

        <div class="container-fluid" style="background-color: var(--background)">
            <div class="row">
                <div class="col-md-4 pt-2">
                    <div class="card mb-2" style="width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="assets/img/rajiv.jpg" class="img-fluid rounded-start"
                                    style="width:100px; height: 100px;">
                            </div>
                            <div class="col-md-7" style="margin:0px; padding :0px;">
                                <div class="card-body">
                                    <h5 class="card-title">Sh. Rajiv Kumar</h5>
                                    <p class="card-text">Chief Election Commissioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="assets/img/anup.jpg" class="img-fluid rounded-start"
                                    style="width:100px; height: 100px;">
                            </div>
                            <div class="col-md-7" style="margin:0px ; padding :0px;">
                                <div class="card-body">
                                    <h5 class="card-title">Sh. Anup Chandra Pandey </h5>
                                    <p class="card-text">Election Commissioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="assets/img/Arun-goel.jpg" class="img-fluid rounded-start"
                                    style="width:100px; height: 100px;">
                            </div>
                            <div class="col-md-7" style="margin:0px ; padding :0px;">
                                <div class="card-body">
                                    <h5 class="card-title">Sh. Arun Goel </h5>
                                    <p class="card-text">Election Commissioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-1"></div>
                <!-- news and press   -->

                <div class="col-md-7 pt-2">
                    <div class="card text-center" style="height: 320px;">
                        <div class="card-header" style="background-color: rgba(0, 135, 145, 0.555);">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Current Issues</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body" style=" overflow: hidden; ">
                            <marquee behavior="" direction="up" scrolldelay: 100 id="news">
                                <div  onMouseOver="document.getElementById('news').stop();"
                                    onMouseOut="document.getElementById('news').start();">
                                    <ul>
                                        <li>
                                            <p class="card-text">Letter to Indian National Congress - Clarification reg.
                                                INC's Letter Dated 08-May-2023 <b>18 hours ago</b> </p>
                                        </li>
                                        <li>
                                            <p class="card-text">Newly weds to the newly born, group of PwDs,
                                                transgenders and tribals amongst enthusiastic voters seen across
                                                Karnataka today <b>Wednesday at 18:42</b></p>
                                        </li>
                                        <li>
                                            <p class="card-text">4.5 times increase in seizures marks increased focus on
                                                expenditure monitoring in poll going State of Karnataka <b>Tuesday at
                                                    12:48</b></p>
                                        </li>
                                        <li>
                                            <p class="card-text">Letter to Indian National Congress for alleged
                                                violation of Model Code of Conduct and other election laws <b> Monday at
                                                    20:12</b></p>
                                        </li>
                                        <li>
                                            <p class="card-text">Commission's show cause notice to President Bharatiya
                                                Janata Party, Karnataka. <b>Monday at 20:11</b></p>
                                        </li>
                                    </ul>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- exit line-->

        <div class="space pt-3"></div>



        <div class="container pt-2 pb-2" style="background-color: var(--background)">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/map.png" class="img-fluid rounded-start" style="width:350px; height: auto;">
                </div>


                <div class="col-md-8" id="city"> <br>
                    <h4>Link to the official websites of the state and federal chief electoral officers.</h4>
                    <p>The chief electoral officers of all states and UTs have created websites that incorporate
                        statistics and local interest material. On these websites, you can also find the most recent
                        electoral rolls and a search feature.</p>
                    <br>
                    <div class="col-md-6 ">
                        <select class="form-select " aria-label="Default select example" name="Semester">
                            <option selected>Please Select an State/UT</option>
                            <option value=""><a href="">Andhra Pradesh</a></option>
                            <option value=""><a href="">Arunachal Pradesh</a></option>
                            <option value=""><a href="">Assam</a></option>
                            <option value=""><a href="">Bihar</a></option>
                            <option value=""><a href="">Chhattisgarh</a></option>
                            <option value=""><a href="">Goa</a></option>
                            <option value=""><a href="">Gujarat</a></option>
                            <option value=""><a href="">Haryana</a></option>
                            <option value=""><a href="">Himachal Pradesh</a></option>
                            <option value=""><a href="">Jharkhand</a></option>
                            <option value=""><a href="">Karnataka</a></option>
                            <option value=""><a href="">Kerala</a></option>
                            <option value=""><a href="">Madhya Pradesh</a></option>
                            <option value=""><a href="">Maharashtra</a></option>
                            <option value=""><a href="">Manipur</a></option>
                            <option value=""><a href="">Meghalaya</a></option>
                            <option value=""><a href="">Mizoram</a></option>
                            <option value=""><a href="">Nagaland</a></option>
                            <option value=""><a href="">Odisha</a></option>
                            <option value=""><a href="">Punjab</a></option>
                            <option value=""><a href="">Rajasthan</a></option>
                            <option value=""><a href="">Sikkim</a></option>
                            <option value=""><a href="">Tamil Nadu</a></option>
                            <option value=""><a href="">Telangana</a></option>
                            <option value=""><a href="">Tripura</a></option>
                            <option value=""><a href="">Uttar Pradesh</a></option>
                            <option value=""><a href="">Uttrahand</a></option>
                            <option value=""><a href="">West Bengal</a></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer code  -->
    <!-- ******************************************************************************** -->
    <div class="space pt-3"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <footer class="text-center text-white" style="background-color: #caced1;">
                    <!-- Grid container -->
                    <div class="container p-4">
                        <!-- Section: Images -->
                        <section class="">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd.jpg" class="w-100" style="height:105px" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd1.jpeg" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd2.jpeg" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd3.jpeg" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd4.jpeg" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="assets/img/nvd5.jpeg" class="w-100" style="height:105px" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Section: Images -->
                    </div>


                    <!-- social media  -->

                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin"></i></a>
                            <!-- Github -->
                            <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->

                    </div>




                    <!-- Grid container -->

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

                        <p class="text-white">© Copyright Election Commission of India
                            <br> Current version of website updated on 24.02.2020
                        </p>
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>
        </div>
    </div>





</body>

</html>