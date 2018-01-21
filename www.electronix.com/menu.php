<ul class="menu">
        <li><a href="#" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav2">Products</a></li>
       <?php  
            if(isset($_SESSION["u_email"]))
            {
        ?>
        
        <li class="divider"></li>
        <li><a href="myaccount.php" class="nav4">My account</a></li>
        <li class="divider"></li>
        <li><a href="logout.php" class="nav3">logout</a></li>
          <?php 
            }
            else
            {   
            ?>
        <li class="divider"></li>
        <li><a href="login.php" class="nav3">login</a></li>
        <li class="divider"></li>
        <li><a href="register.php" class="nav4">Sign Up</a></li>
           <?php 
            }
        ?>
        <li class="divider"></li>
        <li><a href="#" class="nav5">Shipping</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav6">Contact Us</a></li>
        <li class="divider"></li>
        <li class="currencies">Currencies
          <select>
            <option>US Dollar</option>
            <option>Euro</option>
          </select>
        </li>
      </ul>