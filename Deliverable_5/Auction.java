public final class Auction {
  private static final Auction INSTANCE = new Auction();
    private Auction() {}
    public static Auction getInstance() {
    return INSTANCE;
   }
}
