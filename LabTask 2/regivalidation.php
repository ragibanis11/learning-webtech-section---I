<html>
<head>
    <title>registration Form Submission</title>
</head>
<body>
        <form  onsubmit="return validate()" method="post" enctype="">
            <fieldset>
                <legend>Registration</legend>
                <table>
                    <tr>
                        <td>Name</td></tr>
                        <tr>
                        <td><input type="text" name="username" id ="username"value=""></td>
                    </tr>
                    <tr>
                        <td>ID</td>
                        </tr>
                        <tr>
                        <td><input type="Number" name="id" id="id"value=""></td>
                    </tr>
                   
                    <tr>
                        <td>password</td></tr>
                        <tr>
                        <td><input type="password" name="password" id="password" value=""></td>
                    </tr>
                    <tr>
                        <td>confirm_password</td></tr>
                        <tr>
                        <td><input type="password" name="confirm" id="confirm" value=""></td>
                    </tr>
                    <tr>
                        <td>Phone_Number</td></tr>
                        <tr>
                        <td><input type="text" name="Pnumber" id="Pnumber" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td></tr>
                        <tr>
                        <td><input type="email" name="email" id="email" value=""></td>
                    </tr>
                                        <tr>
                        <td>DOB</td></tr>
                        <tr>
                        <td><input type="date" name="dob" id="dob" value=""></td>
                    </tr>
                    <tr>
                        <td>Address</td></tr>
                        <tr>
                        <td >
                            <textarea style="height: 70px;width: 180px;"></textarea>
                        </td>
                    </tr>
                    <td><br></td>
                   
                    <tr>
                        <td>
                            <input type="submit" name="" id ="submit"value="SignUp">
                            <a href="signup.html"> Signin </a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <script>
            function validate()
            {
                let username = document.getElementById("username").value;

                let id = document.getElementById("id").value;

                let password = document.getElementById("password").value;

                let confirm = document.getElementById("confirm").value;

                let Pnumber = document.getElementById("Pnumber").value;

                let email = document.getElementById("email").value;

                let dob = document.getElementById("dob").value;

               

                if(username != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong username");
                    return false;
                }




               
                if(id != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong id");
                    return false;
                }

                if(password != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong password");
                    return false;
                }

                if(confirm != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong confirm");
                    return false;
                }



                if(Pnumber != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong Pnumber");
                    return false;
                }



       


               
                if(email != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong email");
                    return false;
                }


               
                if(dob != "")
                {
                    return true;
                }
                else
                {
                    alert("Wrong dob");
                    return false;
                }
            }


        </script>
</body>
</html>