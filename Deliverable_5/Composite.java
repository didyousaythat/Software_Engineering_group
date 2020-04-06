interface User 
{
    public int setUserID();
}

class Buyer implements User
{
  int userID = getUserID();
  getBidStatus(int userID)
  {
    ...
  }
  getBidTimer(int userID)
  {
    ...
  }
}

class Seller implements User
{
  userID = getUserID();
  getAuction(int userID)
  {
    ...
  }
  getBid()
  {
    ...
  }
}

