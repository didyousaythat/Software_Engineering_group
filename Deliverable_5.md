# Deliverable 5

## Introduction:
Students spend money and time trying to buy/sell items for school and their housing. The UAuction app helps students to 
find these items locally or globally but more efficiently. For students trying to sell their items UAction will make this 
process easier and less stressful. The server will hold information pertaining to account user information and the items 
they are selling or trying to buy. The client will login to the program and will be checked for valid account information. 
If no information has been given for the user, they will be required to create an account inorder to buy or sell an item.  
Once the user is on the main page they can explore the auction house. To explore the auction house the user can click on 
categories and subcategories to minimize the search they typed in.  Once a selling item is sold via the bid being won from 
a buyer or a buyer choosing the buyout option (pay more to get right now option). Once the seller has been notified they 
will communicate with the buyer on how to access the product.

## Architecture:
![Alt Text](https://i.imgur.com/fwWXEul.jpg)
The UI, Web Server, and Database are the three main modules of our project. The directional arrows show a level of dependency 
or access (User interacts with the UI which accesses Web Server which accesses Database).

## Class Diagram:
![Alt Text](https://i.imgur.com/E0gVyMh.png)

## Sequence Diagram:
![Alt Text](https://i.imgur.com/Y3NkPPh.png)

Use case: User logs into the system.
Actor: User
Description: User logs into the Auction house account.
Pre-conditions: User is at the login page.
Post-Conditions: User logs in.
__Main-flow:__
  1. User enters their password and username
  2. System authorizes their inputs
    a. The system cannot find matching username and password in the database
    b. Login fails and system prompts user to try again
  3. System matches username and password to data in database
  4. User successfully logs in

## Design Patterns:
  a. Singleton
  ![Alt Text](https://i.imgur.com/3fWBHKp.png)
  
  Gets a single instance of the Auction object. [code link](https://github.com/didyousaythat/Software_Engineering_group/blob/master/Deliverable_5/Auction.java)
  
  b. Template:
  ![Alt Text](https://i.imgur.com/chTodKM.png)
  
  Hypothetical usage of the template method to add a new user. [code link](https://github.com/didyousaythat/Software_Engineering_group/blob/master/Deliverable_5/User.java)
  
  c. Composite:
  ![Alt Text](https://i.imgur.com/qbMHXeD.jpg)
  
  Hypothetical usage of using a composite method to control buyer and seller with user. [code link](https://github.com/didyousaythat/Software_Engineering_group/blob/master/Deliverable_5/Composite.java)

## Design Principles:

__Single Responsibility Principle__: An example of this principle would be in our Bid class. This class only has one job, 
and that is to store bid values. A bid will only change if a user elects to change their bid.

__Open/Closed Principle__: An example of this principle would be our User class. The code in the user class should not be 
modified. Instead, we would allow for modification through applying the Buyer/Seller classes.

__Liskov Substitution Principle__: An example of this principle would be our MethodOfBuying class. Both subclasses, Bid and 
BuyOut, are valid substitutions for a MethodofBuying. 

__Interface Segregation Principle__: An example of this principle would be the login screen. A user will only see the login 
screen if they have already made an account. If the user needs to make an account, then they can use the separate method.

__Dependency Inversion Principle__: An example of this principle would be our Communication class within our Buyer/Seller 
class. While our Buyer and Seller classes make use of the Communication class, they are not dependent on the Communication class. 
