<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- BS4 -->
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
        <script   script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- BS4 end-->

    </head>
<style>
/* Make the image fully responsive */

    
    /* Carousel */
            .carousel-inner img {
          width: 100%;
          height: 100%;
          
            }

    /* HomePage Carousel */
      #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
        height: 100vh;   
        
            }      

        

      .carousel-item:nth-child(1) {
        background-image: url('/img/1.svg' );
        object-fit: cover;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
       
      }

      .carousel-item:nth-child(2) {
        background-image: url('/img/2.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(3) {
        background-image: url('/img/3.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      } 

      .carousel-item:nth-child(4) {
        background-image: url('/img/4.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      } 

      .carousel-item:nth-child(5) {
        background-image: url('/img/5.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      } 
    /* Carousel */
    
    /* Fact Counter CSS */
            .counter{
            color: #eaa636;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            height: 190px;
            width: 190px;
            padding: 30px 25px 25px;
            margin: 0 auto;
            margin-top: 30%;
            margin-bottom: 100%;
            border: 3px solid #eaa636;
            border-radius: 20px 20px;
            position: relative;
            z-index: 1;
            }
            .counter:before,
            .counter:after{
            content: "";
            background: #f3f3f3;
            border-radius: 20px;
            box-shadow: 4px 4px 2px rgba(0,0,0,0.2);
            position: absolute;
            left: 15px;
            top: 15px;
            bottom: 15px;
            right: 15px;
            z-index: -1;
            }
            .counter:after{
            background: transparent;
            width: 100px;
            height: 100px;
            border: 15px solid #eaa636;
            border-top: none;
            border-right: none;
            border-radius: 0 0 0 20px;
            box-shadow: none;
            top: auto;
            left: -10px;
            bottom: -10px;
            right: auto;
            }
            .counter .counter-icon{
            font-size: 35px;
            line-height: 35px;
            margin: 0 0 15px;
            transition: all 0.3s ease 0s;
            }
            .counter:hover .counter-icon{ transform: rotateY(360deg); }
            .counter .counter-value{
            color: #555;
            font-size: 30px;
            font-weight: 600;
            line-height: 20px;
            margin: 0 0 20px;
            display: block;
            transition: all 0.3s ease 0s;
            }
            .counter:hover .counter-value{ text-shadow: 2px 2px 0 #d1d8e0; }
            .counter h3{
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 15px;
            }
            .counter.blue{
            color: #4accdb;
            border-color: #4accdb;
            }
            .counter.blue:after{
            border-bottom-color: #4accdb;
            border-left-color: #4accdb;
            }
            @media screen and (max-width:990px){
            .counter{ margin-bottom: 40px; }
            }
    
    /* Fact Counter END CSS*/

    /* About CSS*/
    /*** About ***/
.img-twice::before {
    position: absolute;
    content: "";
    width: 60%;
    height: 80%;
    top: 10%;
    left: 20%;
    background: var(--primary);
    border: 25px solid var(--light);
    border-radius: 6px;
    z-index: -1;
}

.about {
    margin-bottom: 10%;
}
    /* About CSS end*/
    
    /*** Product CSS ***/
            .product-item {
            transition: .5s;
            }
    
            .product-item:hover {
            background: var(--primary) !important;
            }
    
            .product-item:hover * {
            color: var(--light);
            }
    
            .product-item:hover .border-primary {
            border-color: var(--light) !important;
            }
    
            .product-item .product-overlay {
            position: absolute;
            width: 100%;
            height: 0;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .5);
            overflow: hidden;
            opacity: 0;
            transition: .5s;
            }
    
            .product-item:hover .product-overlay {
            height: 100%;
            opacity: 1;
            }
    /*** Product END CSS ***/
    
    
</style>

@yield('style')
