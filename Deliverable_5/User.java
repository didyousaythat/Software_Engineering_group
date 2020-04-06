public abstract class CrossCompiler 
{
  public final void User() 
  {
    setID();
    setName();
    setAge();
    setEmail();
  }
 protected abstract void  setID();
 protected abstract void  setName();
 protected abstract void  setAge();
 protected abstract void setEmail();
}
 
 public class NewUser extends User
 {
   protected void setID()
   {
   ...
   }
   protected void setName()
   {
   ...
   }
   protected void setAge()
   {
   ...
   }
   protected void setEmail()
   {
   ...
   }
  }
    
