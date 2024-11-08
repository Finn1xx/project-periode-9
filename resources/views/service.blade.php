<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('nav')

<main>
    <div class="container serviceContainer">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="Onze-Service">
                    <h1 class="cred">ONZE <span class="Service-Color">SERVICE</span></h1>
                </div>
                <div class="Lorem">
                    <p class="Lorem-Text">Dit zijn alle diensten die wij leveren.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="Service-Alignaaa"> -->
            <div class="col-4 border-2">
                    <img src="" alt="">
                    <h1>Graphic Design</h1>
                    <p>Ons bedrijf biedt grafisch ontwerp diensten aan, zoals logo's, branding, webdesign, printmaterialen en visuele content.</p>
            </div>
            <div class="col-4">
                    <img src="" alt="">
                    <h1 >Software Development</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit dignissimos, facere consectetur, ipsam delectus voluptatibus reiciendis quas, </p>
            </div>
            <div class="col-4">
        
                    <img src="" alt="">
                    <h1 >Product Design</h1>
                    <p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis nihil provident ipsa ut optio sunt tenetur vitae excepturi consequuntur est, </p>
              
            </div>
            <!-- </div> -->
        </div>
        <div class="row">
            <!-- <div class="Service-Align2aaa"> -->
                <div class="col-4">
                    
                        <img src="" alt="">
                        <h1 >Blog Writing</h1>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, dolorum dolore, </p>
                    
                </div>
                <div class="col-4">
                    
                        <img src="" alt="">
                        <h1 >Social Marketing</h1>
                        <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ab quo tempore? </p>
                    
                </div>
                <div class="col-4">
                        <img src="" alt="">
                        <h1 >IT Services</h1>
                        <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, accusantium? </p>
                    
                </div>
            <!-- </div> -->
            </div>
    </div>
</main>
@extends('footer')
</body>
</html>