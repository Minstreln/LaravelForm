<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />

    <!-- font awesome style -->
    <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- Custom styles for this form -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>

    <div class="main-container">
       
        <div class="write-up">

            <h1>SCHOOL REGISTRATION FORM</h1>
     
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia eos ducimus odio recusandae neque, esse eaque delectus voluptas. Sint reiciendis sit ipsum eum harum architecto tempore ut quae pariatur excepturi. At deserunt ullam quae, exercitationem ad aliquid. Quasi ratione aliquid placeat, rerum illo saepe optio itaque. Fugit atque numquam sint, quo dolores quasi aliquid placeat quae reiciendis quidem voluptas recusandae perferendis delectus a modi eum ipsam eius excepturi accusantium aliquam! Id officia, animi tenetur ipsam totam minus impedit numquam assumenda, iusto omnis quidem enim laborum, quo praesentium consequatur voluptatem quasi harum. Odio aperiam numquam alias cupiditate suscipit aliquid, accusamus blanditiis!</p>

        </div>

        <div class="main-form">

            <form action="" method="POST">

                <div class="form-header">

                    <div class="h1">
                        <h1>Registration Form</h1>
                    </div>

                    <div class="img">
                        <img src="{{asset('image/edit_white_24dp.svg')}}" alt="">
                    </div>
                </div>

                <div class="forms">

                    <div class="form-groups">
                        <label for="firstname">First Name</label> <br>
                        <input type="text" name="firstname" placeholder="Enter Firstname" required>
                    </div>
    
                    <div class="form-groups">
                        <label for="lastname">Last Name</label> <br>
                        <input type="text" name="lastname" placeholder="Enter Lastname" required>
                    </div>
    
                    <div class="form-groups">
                        <label for="email">Email</label> <br>
                        <input type="email" name="email" placeholder="Enter Email" required>
                    </div>
    
                    <div class="form-groups">
                        <label for="password">Password</label> <br>
                        <input type="number" name="password_confirmation" placeholder="Enter Password" required>
                    </div>
    
                    <div class="form-groups">
                        <label for="password">Confirm Password</label> <br>
                        <input type="number" name="confirm_password" placeholder="Re-Enter Password" required>
                    </div>



                    <div class="form-groups">
                        <label for="country">Country</label> <br>
                       <input type="text" name="country" placeholder="Enter Country" required>
                    </div>
    
                    <div class="form-groups">
    
                        <div class="label-head">
                            <label for="">Gender</label> <br>
                        </div>
    
                        <div class="labels">
                            <label id="lab" for="male">Male</label>
                            <input type="radio" id="male" value="Male" name="gender">
    
                            <label id="lab" for="female">Female</label>
                            <input type="radio" id="female" value="Female" name="gender">
                        </div>
                    </div>


                    <div class="form-groups">
                        <label for="message">Message</label> <br>
                        <textarea name="message" id="" cols="30" rows="1"></textarea>
                    </div>
    
    
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>

            </form>

        </div>

    </div>
    



    <script>
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <script src="home/js/popper.min.js"></script>
        <script src="home/js/bootstrap.js"></script>
        <script src="home/js/custom.js"></script>
    </script>

</body>
</html>