<!DOCTYPE html>
<html>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
	body{
		background-color: #cee5eb;
		font-family: 'Poppins', sans-serif;
	}
	#container{
		width: 100%;
	}
	/*--------------------------HEADER SECTION---------------------*/

	#header{
		background-color: white;
		padding: 50px;
	}
	.clearfix:after{
    content: ".";
    visibility: hidden;
    display: block;
    height: 0px;
    clear: both;
    position:fixed;
    }
    .row{
        max-width: 1180px;
        margin: 0 auto;
    } 
    .logo{
        height: 60px;
        width: auto;
        float: left;
        margin-top: -35px;
    }
    .main-nav{
        float: right;
        margin-top: -30px;
    }
    .main-nav li{
        display: inline-block;
        list-style: none;
        margin-left: 40px;
    }
    .main-nav li a{
        text-decoration: none;
        text-transform: uppercase;
        font-size: 95%;
        font-weight: 200;
        color: black;	
    }
    .j-btn{
        background-color: rgb(0, 136, 169, 1);
        color: #ffffff;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        padding: 8px 24px;
        margin-top: 15px;
        margin-left: 30px;
    }

    /*------------------Form section--------------------*/
    #form-sec{
    	height: 100%;
    	padding: 50px;

    	background-color: #dde1e7;
    }
    .content{
    	margin-left: 450px;
	    width: 330px;
        background: #dde1e7;
        border-radius: 30px;
        padding: 40px 30px;
        box-shadow: -3px -3px 7px #ffffff73,
                    2px 2px 5px rgba(94,104,121,0.288);
    }
    .content .text{
	    font-size: 33px; 
	    font-weight: 600;
	    margin-bottom: 35px;
	    color: #595959; 
    }
    .content .field{
	    height: 50px;
	    width: 100%;
	    display: flex;
	    position: relative;
    }
    .field input{
	    height: 100%;
	    width: 100%;
	    padding-left: 45px;
	    font-size: 18px;
	    outline: none;
	    border: none;
	    color: #595959;
	    border-radius: 25px;
	    background: #dde1e7;
	    box-shadow: inset 2px 2px 5px #babecc,
	                inset -5px 5px 10px #ffffff73;
    }
    .field input:focus{
	    box-shadow: inset 1px 1px 2px #babecc,
	                inset -1px 1px 2px #ffffff73;
    }	
    .field:nth-child(2){
	    margin-top: 20px;
    }
    .field span{
	    position: absolute;
	    width: 50px;
	    line-height: 50px;
	    color: #595959;
	    margin-left: 20px;
    }
    .field label{
	    position: absolute;
	    top: 50%;
	    left: 45px;
	    pointer-events: none;
	    color: #666666;
        transform: translateY(-50%);
    }
    .field input:focus ~ label{
	    color: #666666;
    }	

    .field input:valid ~ label{
	    opacity: 0;
    }
    .forgot-pass{
	    text-align: left;
	    margin: 10px 0 10px 5px;
    }
    .forgot-pass a{
	    font-size: 14px;
	    color: #3498db;
	    text-decoration: none;
    }
    .forgot-pass:hover a{
	    text-decoration: underline;
    }
    .sign-btn{
	    margin: 15px 0;
	    width: 100%;
	    height: 50px;
	    color: #595959;
	    font-size: 17px;
	    font-weight: 550;
	    background: #dde1e7;
	    border: none;
	    outline: none;
	    border-radius: 25px;
	    cursor: pointer;
	    box-shadow: 2px 2px 5px #babecc,
	                -5px 5px 10px #ffffff73;
    }
    .sign-btn:hover{
	    color: #3498db;
	    box-shadow: inset 2px 2px 5px #babecc,
	                inset -5px 5px 10px #ffffff73;
    }
    .signup{
	    font-size: 16px;
	    color: #595959;
	    margin: 10px 0;
    }
    .signup a{
	    color: #3498db;
	    text-decoration: none;
    }
    .signup a:hover{
	    text-decoration: underline;
    }

    /*-----------------Footer--------------------*/
	footer{
		bottom: 0px;
		background-color: #111;
		color: #d9d9d9;
		width: 100%;
	}
	#footer-content{
		display: flex;
	}
	#footer-content .box{
		flex-basis: 50%;
		padding: 10px 20px;
	}
	.box h2{
		font-size: 1.125rem;
		font-weight: 600;
		text-transform: uppercase;
	}
	.box .about-content{
		margin: 20px 0 0 0;
	}
	.left{
		margin-left: 20px;
	}
	.left .about-content p{
		text-align: left;
		margin-left: 10px;
		margin-top: -10px;
	}
	.center{
		margin-left: 200px;
	}
	
	.center .about-content .fab{
		font-size: 1.4375rem;
		height: 45px;
		width: 45px;
		line-height: 45px;
		text-align: center;
		border-radius: 50%;
		transition: 0.3s;
		cursor: pointer;
	} 
	.center .about-content .fab:hover{
		background: #f12020;
	}
	.center .about-content .fas{
		font-size: 1.4375rem;
		height: 45px;
		width: 45px;
		line-height: 45px;
		text-align: center;
		border-radius: 50%;
		transition: 0.3s;
		cursor: pointer;

	}
	.center .about-content .fas:hover{
		background: #f12020;
	}
	.center .about-content .text{
		font-size: 1.0625rem;
		font-weight: 500;
		padding-left: 10px;
		text-decoration: none;
		color: #d9d9d9;
	}
	.right{
		margin-left: 100px;
	}
	.right form .submit-btn{
		margin-top: 10px;
	}
	.right form .submit-btn button{
		height: 25px;
		width: 50%;
		border: none;
		outline: none;
		background: #f12020;
		font-size: 1.0625rem;
		font-weight: 100;
		cursor: pointer;
		transition: 0.3s;
		color: #ffffff;
	}
	#footeronly center{
		padding: 5px;
		font-size: 0.9375rem;
		background: #151515;
	}
	.bottom center span{
		color: #656565;
	}    
</style>
<head>
	<title>Log in</title>

	 <!-----FONTAWESOME LINK-------->
    <script src="https://kit.fontawesome.com/31c4898ef7.js" crossorigin="anonymous"></script>
    
</head>
<body>
	<div id="container">
		<div id="header">
			<nav>
				<div class="row-clearfix">
					<img src="img/logo.png" class="logo" alt="logo">
					<ul class="main-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html">Team</a></li>
						<li><a href="index.html">Channels</a></li>
						<a href="join.html"><button class="j-btn">Join us</button></a>
					</ul>
				</div>
			</nav>
		</div>

        <div id="form-sec">
        	<div class="content">
        		<div class="text">Log in</div>
                <form action ="" method="POST">
                <?php
                $conn=mysqli_connect("localhost","root","","curdform");
                 $id=$_GET['id'];
                    $select="SELECT * from curdreg where id=$id";
                    $q=mysqli_query($conn,$select);
                    $res=mysqli_fetch_assoc($q);

                if(isset($_POST['update'])){

                    $id=$_GET['id'];
                   $Username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    $update="UPDATE curdreg set id='$id',Username='$Username',Password='$Password' where id=$id";
                    $sql=mysqli_query($conn,$update);
                    if($sql){
                        ?>
                        <script>alert("updated successfully");</script>

                        <?php
                        header('location:display.php');
                    }
                    else{
                        ?>
                        <script> alert('not updated');</script>
                    <?php
                    }
                    }
                    ?>
        			<div class="field">
        				<span class="fas fa-user"></span>
					    <input type="text" required>
					    <label>Username</label>
			        </div>
			        <div class="field">
			    	    <span class="fas fa-lock"></span>
			    	    <input type="password" required>
			    	    <label>Password</label>
			        </div>
			        <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
			        <button class="sign-btn">sign in</button>
			        <div class="signup">Not a member?
			        	<a href="#">signup now</a>
			        </div>
		        </form>
	        </div>
	    </div>
			
		

		<footer>
        	<div id="footer-content">
        		<div class="left box">
        			<h2>About us</h2>
        			<div class="about-content">
        				<p>Learn N Share is a non-profit organization working to bridge the gap between theoretical and practical knowledge for Information Technology students.</p>
				    </div>

			    </div>

			    <div class="center box">
			    	<h2>Connect with us</h2>
			    	<div class="about-content">
			    		<span class="fab fa-facebook-f"></span>
					    <span class="fab fa-linkedin"></span>
					    <span class="fab fa-medium"></span>
					    <span class="fas fa-envelope"></span>
					</div>
				</div>

				<div class="right box">
					<h2>Contact us</h2>
					<div class="about-content">
						<form action="#">
							<div class="email">
								<div class="text">Email *</div>
								<input type="email" required>
							</div>

							<div class="msg">
								<div class="text">Message *</div>
								<textarea rows="2" cols="25" reuired></textarea>
							</div>
							<div class="submit-btn">
								<button type="submit">Send</button>
							</div>
				        </form>
				    </div>
				</div>
			</div>

			<div id="footeronly">
				<center>
					<span class="far fa-copyright"></span><span>  2020 All rights reserved.</span>
				</center>
	        </div>
	    </footer>
		

	    
    </div>
</body>
</html>