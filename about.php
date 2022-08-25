<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="Young African.png" alt="">
        </div>
        <div class="links">
                 <a href="home.php">Home</a>
                 <a href="shop.php">Shop</a>
                 <a href="updates.php">Updates</a>
                 
                 <?php
                  session_start();
                  if(isset($_SESSION['email']) && $_SESSION['loggedin'] == true){
                          echo '<a href="profile.php">Profile</a>';
                          echo '<a href="logout.php">Log Out</a>';
                      }else{
                     echo '<a href="signup.php">Login / Sign up</a>';
                    }
                 ?>
                 <a href="about.php">About</a>    
        </div>
    </nav>
    <hr>
   
    <div class="brokers" style="margin-top:150px; font-size:12px; padding:5px 40px;">
    <h2 style="text-align:center;">SUPPORTING RATIONALE</h2>
    <h2>STATEMENT OF THE PROBLEM</h2>
<p>Football clubs as a brand has its way of selling its products such as jerseys, caps, jackets, sweaters to its customers (most of which are fans). But they are not monetizing effectively due to some factors such as following;
<ol style="padding-left:20px"><li>	 Fewer means of which in individual can have access to buy those products for instance there are only few clubs agents for selling those products whereby they are not well allocated in all regions of the country, also outside the country.
                </li><li>	Presence of fake products which are being sold by the name of the brand, thus reducing revenue which should be earned by the club. For instance, there are some businessmen who are selling fake jerseys by fraud people that they are original brands from certain club while not.
                </li></ol>
        <h2>BUSINESS MODEL</h2>
<p>Football club online shop is a start-up project that aims to increase club’s revenue through sales of its products concerning digital market platforms. Is a web app which will be dealing with selling various product which are produced by the football club. This business will be online based by giving chance user to order and make purchase online then being delivered his/her product.
First beneficiary of this web-based project will be football club itself as it aims on increasing the revenue and second beneficiary will be customers which most are its fans by ease they a process of accessing club products and make purchases. 
The system will give chance a user to buy any product at the shop and as in diagram below, the system will communicate with the club’s department responsible for products to see about presence and transportation means and talk to the manufacturer about the total requirement of the products.
                </p>

<h2>AIM/OBJECTIVES</h2>
The aim is to develop a web-based system that will allow customers to visit and explore various products which are available, reviewing about their quality and standards, and if they would like to buy, they can purchase and accomplishing through online payments and being delivered the products.
The objectives are: 
<ul style="padding-left:20px">
    <li>
To create a secured web-based system that will allow user to have a survey of all products which are being provided by our shop.
                </li><li>	To ease the problem of finding shops where you can have access of club’s product. 
                </li><li>Creating environment for those who are far from our country to have the same access of products as others which are within our country. Since there toughness in buying those products due to distance and trust issues.
                </li><li>Provide a forum of people to share and their views about various products and services which are offered by the club.
                </li><li>	Providing news about our products such as release of new products for instance release of new jerseys, presence of certain price reduction offers so as people interested can be informed.
                </ul>
                <h2>VALUE PROPOSITIONS</h2>
A value proposition is a simple statement that summarizes why a customer would choose your product or service. It communicates the clearest benefit that customers receive by giving you, their business. Every value proposition should speak to a customer’s challenge and make the case for your company as the problem-solver.
Football club online sales makes it possible for customers to buy products in under a minute using their smartphone or computer at any location provided that address information will be valid so as to ease the process of shipping. going from thought to action is almost instantaneous. 
The club products such as jersey are just as simple to receive. One a user has accomplished the payment process; shipping process starts immediately so as for his/her to receive property which has been purchased.
The challenge of fewer allocation of club’s shops or places you can access club products. For instance, in our country there are very few places where you can buy football club jersey thus, the club loses revenue to do to some people lacking the access to shops.
Secondly, there is a group of people who are busy with their business this it is difficult for them to go physical and buy what they want at the shop. Through online shopping one can see this as the best method as it does not interrupt with his/her schedule.
Thirdly there has been a tendency of some people to sell fake products to people and claiming that those products are original one’s, this may lead to football club missing some of its revenues as people being selling fake products by using club’s brand. Thus, to reduce the risk of club’s customers being buying fake products without knowing, a customer can directly buy products to this recognized site thus contributing to club’s economy and also buying original one.
Lastly, there is a huge group of people who are living outside the country(diaspora) and they face difficult to where they can find those products.
<h2>COMPITETIVE ANALYSIS</h2>
A competitive analysis can help you learn the ins and outs of how your competition works, and identify potential opportunities where you can out-perform them. also enables you to stay atop of industry trends and ensure your product is consistently meeting and exceeding industry standards. Let's dive into a few more benefits of conducting competitive analyses
In our system we conduct a competitive analysis research in categories such as features, grossing, price, feedback mechanism, payments methods, location, working hours.

<h3>ONLINE SHOP</h3>
<h4>FEATURES</h4>

                        <ol style="padding:1px 15px"><li>Buy Clubs Products</li>
                        <li>Receive information about release of new products such as jerseys.
                </li><li>Place an order for new coming products.	</li><li>Buy clubs products
                </li><li>You can put an order but not for all shops.<td><td>Featrues<td>
                </li> </ol>
                <h4>Grossing</h4>
                        

	<ol><li>Anyone who has smartphone or computer can have access though it</li><li>You can access the products for only areas which are near to your place
Price</li><li>There is increase in shipping price</li><li>There is no increase in price
Feedback Mechanism</li><li>There is a community field for people to comment and giving feedback.	-There is no clear way of keeping the users’ reviews.
Payment Methods</li><li>Client has been provided with a way of paying through online payment such as 	-Payment can be done by physical way or by 
Location</li><li>You can access this service at any location provided that you have internet location	-You have to be near places where the service is available.
Working hours</li><li>Any time you are free to access the product and purchase	-Most have maximum working hours of 12
                </li></ol>
<h2>REVENUE MODEL</h2>
<p>Any start-up, tech company, or digital business may operate with multiple revenue sources and, consequently, with different revenue models. Depending on the industry and the product/service type, the revenue model will look differently.
Here we have the most common revenue model which we have used in our system. The revenue is generated by directly selling an item or a service to a customer. The customer or a consumer (B2C). The price of the product or service constitutes the production costs and margin also shipping costs. Increasing the margin, the business is able to generate more income from sales.
                </p>


    </div>
    <footer>
        <div class="icons">
            <a href="https://web.whatsapp.com/"><img src="whatsapp.png" alt=""></a>
            <a href="https://web.facebook.com/"> <img src="facebook.png" alt=""></a>
            <a href="https://web.twitter.com/"> <img src="twitter.png" alt=""></a>
            <a href="https://web.gmail.com/"> <img src="gmail.png" alt=""></a>
            <a href="https://web.instagram.com/"><img src="instagram.png" alt=""></a>
    </div>
   
    </footer>
    </body>
    </html>