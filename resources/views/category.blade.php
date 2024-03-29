<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>日期排行</title>

   <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Searching</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL('/category')}}">Category</a>
                    </li>
                    <li>
                        <a class="navbar-brand" href="{{URL('/index')}}">home</a>
                    </li>
                    <li>
                        <a class="navbar-brand" href="{{URL('/result')}}">result</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
   <!--  @foreach($pixnetdata as $data)
        <div class="container-fluid">
            <div class="row no-gutter ">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{$data->search_href}}" class="portfolio-box">
                       <img class="img-responsive" src="{{$data->article_picture}}" alt="圖片未能抓取"  width="60%">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    {{$data->search_title}}
                                </div>
                                <div class="project-name">
                                   {{$data->search_time}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    @endforeach
      {{$pixnetdata->links()}} -->
    
               

        </div>
     </div>








    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">all
                    <small><font color="blue"></font></small>
                    </h1>
                   
                    
                </h1>

            </div>
        </div>
        <!-- /.row -->
  

        <!-- Project One -->
  

       @foreach($pixnetdata as $data)
        <section id="services">
        <div class="row">
            <div class="col-md-7">
                <a href="{{$data->link}}">
                    <img class="img-responsive" src="{{$data->article_pic}}" alt="圖片未能抓取" width="60%">

                </a>
            </div>
            <div class="col-md-5">
                <h3>{{$data->title}}</h3>
                <h4>{{$data->date}}</h4>
                <p>{{$data->S_title}}</p>
                <a class="btn btn-primary" href="{{$data->link}}">查看更多 <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        </section>
        <!-- /.row -->
        @endforeach

   


        <hr>

      <!--  -->
              {{$pixnetdata->links()}}
        <!-- Pagination -->


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>




    <!-- div handmake -->




</body>

</html>
