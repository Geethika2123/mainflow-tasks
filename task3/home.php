
<!DOCTYPE html>
<html>
    <head>
        <title> login page  </title>
    </head>    
        <style >
            *{ padding:0; margin:0;box-sizing:border-box;}
            body{ 
            background-color:;
          }
            nav{
              height: 60px;
              background-color: white ;
              padding: 0;
            }
            .logo{
              font-size: 2em;
              letter-spacing:2px;
            }
            .menu{
               font-size:20px;
               text-align: center;
            }
            .menu ul{
              display: inline flex;
              list-style: none;
              color: black;
            }
            .menu ul li{
              width:100px;
            }
            .active,.menu ul li:hover{
              background-color:rgb(143, 180, 225);
              border-radius:3px;
            }
            .menu .fi{
              margin-right:8px;
            }          

           .h{
            max-width: 650px;
            position: absolute;
            top: 400px;
            left:650px ;
            transform: translate(-800,-600);
            text-align: center;
            color: black;
            transition: 0.4s;
           }
           .h a:hover{
                background:transparent ;
                border: 1px solid indianred;
           }
           
           .h a{
            text-decoration: none;
            background-color: indianred;
            color: white;
            padding: 10px 20px;
            letter-spacing: 5px;
           }

        </style>
    
    <body>
       <nav>
          <div class="logo"> login page</div>
          <div class="menu">
            <ul>
                <li><a class="active" href="a">logout</a></li>
            </ul>   
       </nav>
        <section class="h">
          
            <h1 > logged successfully</h1> 
            <br>
            <a href="#"> select the courses</a>
            </section>
    </body>
</html>
