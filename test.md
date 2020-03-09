Nick Bollone, Colton Barboro,
Ian Mcllrath, Joshua Geyer
**D.3 Analysis
System Description:**
Overpriced textbooks affect college students, the impact being students pay too
much money on textbooks and are unable to resell those same textbooks at a later
date. In an effort to alleviate the difficulty of reselling books and supplies, [PRODUCT
NAME] is an auction house that allows users to buy and sell textbooks between each
other, unlike traditional university bookstores our product allows users to set the price of
how much they are willing to pay for their textbooks. The application would allow
students to sell to one another using price points decided upon by the students.
The key requirements of this application involve being able to allow ​ **users** ​ to
register themselves into the system by making an account with a ​ _username_ ​ and
_password_ ​, along with contact info (​ _email_ ​). Registered ​ **users** ​ should be able to access
the applications’ ​ **buying** ​ and ​ **selling** ​ functions. ​ **Users** ​ looking to ​ **buy** ​ should be able to
check bids​, ​make bids​, and ​buy products at a flat rate​ ​if available, whereas ​ **users**
looking to ​ **sell** ​should be able to ​post items for auction​, ​set a timer for the auction​, and
set how much the product should sell for as a flat rate​. ​ **Users** ​ should be able to ​search
for their items and find it in a number of ​ _categories_ ​ present within the system.


**UML-Diagram:**


**Class Responsibilities:**
Bid:​ The Bid class is for managing bids that buyers put on products up for bid. It will
allow bids to be tracked and keep tabs on how much longer a bid is eligible to be placed
on a product.
Buyer:​ This class manages purchasing functions of the user, from managing auction
bids to flat purchases of items. It is connected and identified by the user class user ID’s.
Seller: ​This class manages selling functions of the user, from managing how long an
item is put up to auction, to setting a flat rate of purchase and checking bids as they are
given from users.
Communication: ​Manages text communication between users (buyers and sellers).
Listing:​ This class manages auction listings set by sellers to be displayed in listings.
Auction:​ Auction class functionalities are used if the seller wants to put the item up for
bid instead of selling for just a flat rate, with the options to set up timers for the auction
and starting bids.
User:​ The user is the primary class for a person’s account and is used to keep track of
their actions. It will consist of their name, an ID, age, and email. The User data is used
in the buyer and seller classes to manage their functions.
Login:​ The login class checks the username and password of the User that is set up on
creation of the new user and makes sure the strings match before allowing the user to
access the program’s other functions.
Searching:​ The searching class allows for users to search for a matching string in
categories to look for items listed for selling.
Category:​ categories used to separate different types of products and make searching
easier for the user.