


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC OPEN ELECTIVE</title>
    
    <link rel="stylesheet" type="text/css" href="college project.css">
    <script defer src="college project.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js" ></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<?php
// define variables and set to empty values
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(!empty($_POST['login'])){
    $name = test_input($_POST["userid"]);
  $pass = test_input($_POST["password"]);
  }
  
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <section id="nav">
  <img src="kec2.jpg" id="kec2">

  <h3 >KEC ELECTIVE SUBJECTS</h3>
  <a href="tel:9345305335" title="gethelp" id="tel">
    <ion-icon name="call-outline"></ion-icon>
  </a>
    </section>

    <marquee>Read the instructions before selecting..</marquee>
    <section class="container">
      <div class="m">
        <h3 id="student">
            FOR LOGIN
  
        </h3>
    
        

        <h3 id="administrator">
          <span style="margin-left:1px">NEW USER <a href="#" style="margin-left: 2px;color: black; font-size: larger;padding:10px;" id="signup">Sign up</a><br><br></span>
          <br>
          <span>LOGIN IN AS AN <a href="#" id="black">ADMINISTRATOR</a></span>
          
        </h3>
      </div>
      
      <div class="form none" >
        <form  <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" id="studentform">
          <a id="pree" href="#">⬅Previous</a>
          <div id="gap" ><label><h4>Name of the student : <span class="star">*</span>
          </h4><input name="Name" type="name" id="formname"></label></div>
          <div id="gap" ><label><h4>Roll No of the student :<span class="star">*</span></h4><input id="formrollno" type="name" name="Rollno"></label></div>
          <div id="gap" ><label><h4>Password :<span class="star">*</span></h4><input type="password" name="Password" id="formpass"></label></div>
          <div id="gap" ><label><h4>Dept of the student :<span class="star">*</span></h4>
          <select class="formdept" id="select" name="Dept">
            <option disabled selected value=" "></option>
            <option>Electronics and instrumentation engineering</option>
            <option>Electronics and communication engineering</option>
            <option>Electrical and electronics engineering</option>
            <option>Computer science engineering</option>
            <option>Mechanical engineering</option>
            <option>Information technology </option>
            <option>Civil engineering</option>
            <option>Mechatronics engineering</option>
            <option> Automobile engineering</option>
            <option>Artificial intelligence and data science</option>
            <option>Artificial intelligence and machine learning</option>
            <option>Computer science and design engineering</option>
         
          </select>
          
          </label></div>
          <div id="gap" ><label><h4>Mobile no of the student :<span class="star">*</span></h4><input type="name" name="Mobileno" id="formmobileno"></label></div>
          <div id="gap" ><label><h4>Email of the student :<span class="star">*</span></h4><input type="email" name="Email" id="formemail"></label></div>
          <div id="gap" ><label><h4>Semester :<span class="star">*</span></h4><select id="select" name="Semester" class="sem" draggable="true" class="formsem" id="select">
             <option label=" " disabled selected value=" "></option>
            <option>3</option>
            <option>5</option>
            <option>7</option>
          </select></label></div>
         
          <div id="gap" ><label><h4>Date of birth :<span class="star">*</span></h4><input class="date" type="date" name="dob" id="formdob"></label></div><br>
         
          <div id="ful"> <button type="submit" class="proceed" type="submit" id="submit">Proceed</button></div>
         </form>
        
      </div>
      <form id="addminstratorform" class="none" >
        
         <div class="box">
          <div class="op">
            <div id="gap" name="name"><label><h4>User Id :<span class="star">*</span></h4><input type="text"></label></div>
            <div id="gap" name="name"><label><h4>Password :<span class="star">*</span></h4><input type="password"></label></div>
            <div id="gg">
              <button type="submit" id="login">LOGIN</button>
              <a id="pre" href="#">⬅Previous</a>
             </div>
          </div>
         </div>
         
         
         </form>
         <form id="loginstudentform" class="none" name="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        
          <div class="box">
           <div class="op">
             <div id="gap" name="name"><label id=""><h4>User Id :<span class="star">*</span></h4><input type="text" name="userid"></label></div>
             <div id="gap" name="name"><label><h4>Password :<span class="star">*</span></h4><input type="password" name="password"></label></div>
             <div id="gg">
               <input type="submit" value="login" id="login" style="margin: auto;"></input>
               
              </div>
           </div>
          </div>
          
          
          </form>



         <div class="response none" style="color: white;">
          <h1 style="font-size: 200px; ">👨🏻‍🎓</h1>
           Your Response is submitted successfully.
         </div>
         <section class="listforselection none">
          <div class="selectedlist">

             <div class="dd">
              <span id="def">IF YOU WANT TO CHANGE YOUR PRIORITY DRAG AND PLACE IN YOUR DESIRED POSITION AND SELECT YOUR FAVORITE FACULTY
                </span>
                <ol class="listyy" id="list">
                  
                  
                </ol>
                <button id="final">submit</button>
             </div>


          </div>
        </section>
         <div class="place none" >
          <div class="sbefore" id="database">Proceed➡</div>
          <div class="sample">
            <div class="sampleblock"></div>
            
          </div>
          <div class="sample">
            <div class="samplered">Select 5 subjects</div>
            
          </div>
         
          

          <div class="card" data-aos="fade-up">
            <img src="python.png" class="cardimg">
            <div class="carddetailes">
              <h1 class="cardheading">Python</h1><br>
              <div class="cardmax"><a href="python.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
              <hr>
              <h3 id="av">Course offered by CSE</h3>
              <br>
              <div class="periods">
              
                <button class="selectp">Select</button>
              </div>
            </div>
            <div class="gif">
              <h1>Selected✅</h1>
              
              <br>
              <button class="unselect selectu">Unselect</button>
            </div>
            
            <div  class="hoverme">Hover me</div>
            <div class="cardhover">
              <button class="leave"><-back</button>
              <div class="hovertab">

                Python courses deal with basic python programming language that can be used for website, software development, writing coding scripts, etc. Python has become very popular due to its syntax which is easy to learn and enables reduced program maintenance.
              
              
            </div>
          </div>
        </div>





              <div class="card" data-aos="fade-up">
                <img src="NSS.jpg" class="cardimg">
                <div class="carddetailes">
                  <h1 class="cardheading">Network signal system</h1><br>
                  <div class="cardmax"><a href="nss.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
                  <hr>
                  <h3 id="av">Course offered by EIE</h3>
                  <br>
                  <div class="periods">
                  
                    <button class="selectp">Select</button>
                  </div>
                </div>
                <div class="gif">
                  <h1>Selected✅</h1>
                  
                  <br>
                  <button class="unselect selectu">Unselect</button>
                </div>
                
                <div  class="hoverme">Hover me</div>
                <div class="cardhover">
                  <button class="leave"><-back</button>
                  <div class="hovertab">
    
                    An electronic communications system using electronic signals A communications system or communication system is a collection of individual telecommunications networks, transmission systems, relay stations, tributary stations, and terminal equipment usually capable of interconnection and interoperation to form an integrated whole.
                  
                  
                </div>
                  </div>
                  </div>
    

    
                  <div class="card" data-aos="fade-up">
                    <img src="emd.jpg" class="cardimg">
                    <div class="carddetailes">
                      <h1 class="cardheading">Electrical machine and design</h1><br>
                      <div class="cardmax"><a href="eee.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
                      <hr>
                      <h3 id="av">Course offered by EEE</h3>
                      <br>
                      <div class="periods">
                      
                        <button class="selectp">Select</button>
                      </div>
                    </div>
                    <div class="gif">
                      <h1>Selected✅</h1>
                      
                      <br>
                      <button class="unselect selectu">Unselect</button>
                    </div>
                    
                    <div  class="hoverme">Hover me</div>
                    <div class="cardhover">
                      <button class="leave"><-back</button>
                      <div class="hovertab">
        
                        In electrical engineering, electric machine is a general term for machines using electromagnetic forces, such as electric motors, electric generators, and others. They are electromechanical energy converters: an electric motor converts electricity to mechanical power while an electric generator converts mechanical power to electricity.
                      
                    </div>
                      </div>    
                      </div>
                      

                      

          <div class="card" data-aos="fade-up">
            <img src="wc.jpg" class="cardimg">
            <div class="carddetailes">
              <h1 class="cardheading">Wireless Networks</h1><br>
              <div class="cardmax"><a href="ece.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
              <hr>
              <h3 id="av">Course offered by ECE</h3>
              <br>
              <div class="periods">
              
                <button class="selectp">Select</button>
              </div>
            </div>
            <div class="gif">
              <h1>Selected✅</h1>
              
              <br>
              <button class="unselect selectu">Unselect</button>
            </div>
            
            <div  class="hoverme">Hover me</div>
            <div class="cardhover">
              <button class="leave"><-back</button>
              <div class="hovertab">

                Computer networks that are not connected by cables are called wireless networks. They generally use radio waves for communication between the network nodes. They allow devices to be connected to the network while roaming around within the network coverage.
              
              
            </div>
              </div>
   </div>
              
          <div class="card" data-aos="fade-up">
            <img src="mts.jpg" class="cardimg">
            <div class="carddetailes">
              <h1 class="cardheading">process control and instrumentation</h1><br>
              <div class="cardmax"><a href="mts.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
              <hr>
              <h3 id="av">Course offered by MTS</h3>
              <br>
              <div class="periods">
              
                <button class="selectp">Select</button>
              </div>
            </div>
            <div class="gif">
              <h1>Selected✅</h1>
              
              <br>
              <button class="unselect selectu">Unselect</button>
            </div>
            
            <div  class="hoverme">Hover me</div>
            <div class="cardhover">
              <button class="leave"><-back</button>
              <div class="hovertab">

                Process Control Instrumentation monitors the state of a process parameter, detecting when it varies from desired state, and taking action to restore it.
              
              
            </div>
              </div>
              </div>


                   
          <div class="card" data-aos="fade-up">
            <img src="IML.jpg" class="cardimg">
            <div class="carddetailes">
              <h1 class="cardheading">Industrial machine learning</h1><br>
              <div class="cardmax"><a href="aiml.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
              <hr>
              <h3 id="av">Course offered by AIML</h3>
              <br>
              <div class="periods">
              
                <button class="selectp">Select</button>
              </div>
            </div>
            <div class="gif">
              <h1>Selected✅</h1>
              
              <br>
              <button class="unselect selectu">Unselect</button>
            </div>
            
            <div  class="hoverme">Hover me</div>
            <div class="cardhover">
              <button class="leave"><-back</button>
              <div class="hovertab">
                Industrial automation and machine learning have the same goal: to optimize workflows and remove productivity barriers by automatically handling tedious time-consuming tasks. Machine learning algorithms are adaptive and poised for adjustment in lockstep with the dynamic industrial landscape.
               
              
              
            </div>
              </div>
              </div>


                      
          <div class="card" data-aos="fade-up">
            <img src="DSA.jpg" class="cardimg">
            <div class="carddetailes">
              <h1 class="cardheading">Data science analysis</h1><br>
              <div class="cardmax"><a href="aids1.pdf" download="" id="avv" style="text-decoration: none;">click to view syllabus</a> </div></h1>
              <hr>
              <h3 id="av">Course offered by AIDS</h3>
              <br>
              <div class="periods">
              
                <button class="selectp">Select</button>
              </div>
            </div>
            <div class="gif">
              <h1>Selected✅</h1>
              
              <br>
              <button class="unselect selectu">Unselect</button>
            </div>
            
            <div  class="hoverme">Hover me</div>
            <div class="cardhover">
              <button class="leave"><-back</button>
              <div class="hovertab">
                Data science, and in essence, data analysis plays an important role by helping us to discover useful information from the data, answer questions, and even predict the future or the unknown. It uses scientific approaches, procedures, algorithms, the framework to extract the knowledge and insight from a huge amount of data.
              
              
            </div>
              </div>
              </div>


              
          




              
            
          </div>



          
              
            
          </div>
  
  

          

          
          
          
    </section>

    <section id="inst">
    <section id="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-mf-6 col-12" id="row">
            <img src="inst.jpg" class="img-fluid">
          </div>
          <div class="col-lg-6 col-mf-6 col-12 p-5">
            <h1>Instructions</h1>
            <p>1]The students should select five subjects.<br>
              2]The students login should be professional.<br>
              3]The student should select the courses correctly before submitting the form.<br>
              4]No changes will be made once the form is submitted.<br>
            </p>
          </div>

        </div>

      </div>
    </section>
    </section>


    <div id="footer">
    <h5 class="text-center"> Get in touch! 🍻 </h5>
    <div class="icon">
      <a href="https://www.instagram.com/engal_nanban/?__coig_restricted=1">
        <ion-icon name="logo-instagram"></ion-icon>
      </a>
      <a href="mailto:sakthiadhavan452@gmail.com">
        <ion-icon name="mail-outline"></ion-icon>
      </a>
      <a href="tel:9345305335">
        <ion-icon name="call-outline"></ion-icon>
      </a>

    </div>

  </div>


    
   


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      let drag=document.querySelector("#list");
      new Sortable(drag,{
        animation:150
      });
    </script>
    <script>
      AOS.init();
    </script>


<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user=$_POST['userid'];
  $pass=$_POST['password'];
  $con=mysqli_connect("localhost","root","","logincheck");
  $sql="SELECT * from login WHERE userid='$user' AND password='$pass'";
  $result=mysqli_query($con,$sql);
  $resultcheck=mysqli_num_rows($result);
  if($resultcheck>0)
  {
    echo "
    <script type= 'text/javascript'>
    
      document.querySelector('.place').classList.remove('none');
document.querySelector('.m').classList.add('none');

    
    </script>";
  
    
    
  }




  
}
  


?>




</body>
<script>
  document.querySelector(".proceed").addEventListener("click",()=>{
    userid=document.querySelector("#formname").value;
    document.cookie="f="+userid;
    pass=document.querySelector("#formpass").value;
    
    document.cookie="e="+pass;
    rollno=document.querySelector("#formrollno").value;
    
    document.cookie="g="+rollno;
    dept=document.querySelector(".formdept").value;
    document.cookie="h="+dept;
    mobile=document.querySelector("#formmobileno").value;
    document.cookie="i="+mobile;
    email=document.querySelector("#formemail").value;
    document.cookie="j="+email;
    dob=document.querySelector("#formdob").value;
    document.cookie="p="+dob;
    
    
    
  });
  finalc=[];
  finalf=[];
  document.querySelector("#final").addEventListener("click",(e)=>{
    xb=e.target.parentNode.querySelector(".listyy");
    xb.querySelectorAll("li").forEach((element,index) => {
      finalf.push(element.querySelector("select").value);
      
    
    });
  
    function display()
    {
      alert("kk");
    }
  })
  
  
  
  
  
  </script>
  <div class="lastin">
  <?php
  $z=$_COOKIE['f'];
  $y=$_COOKIE['e'];
  $x=$_COOKIE['g'];
  $w=$_COOKIE['h'];
  $v=$_COOKIE['i'];
  $u=$_COOKIE['j'];
  $s=$_COOKIE['p'];
  $b1=$_COOKIE['a1'];
   
  
  
  
  
  $_con=mysqli_connect("localhost", "root", "", "logincheck");
  $t="INSERT INTO `login`
(userid,password,Rollno,Dept,Mobileno,Email,Dob,F1)VALUES('$z','$y','$x','$w','$v','$u','$s','$b1')";
$g= mysqli_query($_con, $t);
  ?>
  </div>
</html>





    
  
      