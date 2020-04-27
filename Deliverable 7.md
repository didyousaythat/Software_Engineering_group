*Colton Barboro, Nicholas Bollone,*
*Joshua Geyer, Ian McIlrath*
CS386 Section 3, Project group 4

#Deliverable 7: Verification and Validation

##I. Description
Our system provides an auction house over the web for students to buy and sell
products for school faster and locally. Instead of visiting multiple sites
users can login with a registered account and start browsing the auction house.
If a user is not in the database they will be required to register with valid
information. Once on the main page, the user will find a search bar and options
to narrow their search via category and subcategory. If the user chooses to buy
they can either bid or choose buyout (buy now option). If the user wants to sell
then they can submit an item as an auction by providing enough details for the
item to be valid.

##II. Verification
###1. Unit Tests

Test framework that we thought would work was the PHPUnit
[Project Folder](https://github.com/didyousaythat/Software_Engineering_group/tree/master/Auction_House)
[Test Example](https://github.com/tfrommen/unit-test-examples/blob/master/tests/php/FortuneTellerTest.php)
![image](https://i.imgur.com/006XvEw.png)
    
###2. Integration Tests

Test framework that we thought would work was the PHP unit
[Project Folder](https://github.com/didyousaythat/Software_Engineering_group/tree/master/Auction_House)
[Test Example](https://github.com/alexnederlof/integration-testing-example/blob/master/src/test/java/com/alexnederlof/inttesting/MultiBrowserTest.java) This test incorperate a unit test the author had already made, notably 
[Other test](https://github.com/alexnederlof/integration-testing-example/blob/master/src/test/java/com/alexnederlof/inttesting/SlowTest.java.)
I was also unable to get the integration tests working for our project, due to issues running PHPUnit. 

###3. Acceptance Tests

Test framework that we thought would so well was the Mocha framework for node.js
[Project Folder](https://github.com/didyousaythat/Software_Engineering_group/tree/master/Auction_House)
[Test Example](https://gist.github.com/fzaninotto/f13ce17fc15c532d00a4#file-gistfile1-js)
![image](https://i.imgur.com/JoWBBr7.png)


##III. Validation
###Script & Results
	Instruct the user to register through the login page.
	Allow them to roam the homepage, then instruct them to click on a listing.
	After a while, ask them to bid on the listing.

**How would you describe the look of the site?**
a) “It looks like it will steal your credit card, but apart from that it looks
    alright”
b) “Pretty good but would add a search bar”
c) “Looks cool but not secure”

**What other websites are you reminded of?**
a) “Ebay or any other auction site.”
b) “Facebook” (Social Media Markets)
c) “Facebook or Ebay”

**How would you compare them?**
a) “They both have a navbar.”
b) “User Interface seem similar ”
c) “Has a shopping cart and categories for items”

**Were any of the UI elements confusing at all?**
a) “It was pretty straightforward”
b) “Search Tab”
c)“No easy to understand because of other programs like it”

**On a scale from 1-5, how easy is it to use?**
a) 3
b) 3
c) 2

**On a scale from 1-5, how likely would you use the service as it is?**
a) 1
b) 1
c) 1

###Reflections
	
**Features that Worked Well:**
When registering for an account it checks for validation of user input
Login directs user to the main page
When a item is picked, it takes you to a description page

**Things that can be Changed:**
Get user login/register input connected to a database
Better Security for database ( only hashed passwords in the database )
Search Bar
More Categories

**Learning Curve:**
Easy to Navigate 

**User Performance:**
Yes they explored the site just as we expected.

**User’s Actions:**
Not exactly because we had trouble connecting to an online database.

**User Liked the Most:**
The look of the site and how funny the description was.
	
**Value Proposition:**
Our value proposition would have been met if we could of connected to an online database
	
	
